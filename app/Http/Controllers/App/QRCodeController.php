<?php

namespace App\Http\Controllers\App;

use App\Models\{ User, Product, GeneratedQR };
use App\Jobs\ProcessBulkQRGeneration;
use Illuminate\Support\Facades\Queue;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Zip;

class QRCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = Product::get();
        return view('app.qrcode.index', compact('productList'));
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        $qrCodeList = GeneratedQR::with('getProduct', 'getQrPoint')
                            ->join('products', 'generated_qr.product_id', '=', 'products.id')
                            ->whereIn('generated_qr.id', function ($query) {
                                $query->selectRaw('MAX(id)')
                                    ->from('generated_qr')
                                    ->whereNull('deleted_at')
                                    ->groupBy('banch_code', 'product_id');
                            })
                            ->where(function ($query) use ($searchQuery) {
                                if ($searchQuery !== null) {
                                    $query->where('products.product_name', 'LIKE', '%' . $searchQuery . '%');
                                }
                            })
                            ->orderBy('generated_qr.id', 'desc')
                            ->paginate(env('PER_PAGE_RECORD_COUNT'));

        foreach ($qrCodeList as $key => $value) 
        {
            $value->banch_count = GeneratedQR::where('product_id', $value->product_id)->where('banch_code', $value->banch_code)->count();
        }
                            
        return view('app.qrcode.list', compact('qrCodeList'));
    }

    public function checkLastId(Request $request)
    {
        $getLastId = GeneratedQR::where('product_id', $request->product_id)->count();

        $response = [
            'status' => true,
            'message' => 'QR code deleted successfully.', // Add your additional data here
            'data' => ($getLastId + 1)
        ];
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lastBanchCode = GeneratedQR::where('product_id', $request->product_id)->max('banch_code');

        $getProductDetails = Product::where('id', $request->product_id)->first();

        $lastBanchCode = ($lastBanchCode + 1);

        $min = $request->from_code;
        $max = $request->to_code;
        
        ProcessBulkQRGeneration::dispatch(
            $min,
            $max,
            $request->product_id,
            $getProductDetails->qr_id,
            $lastBanchCode
        )->onQueue('add_batch');
        
        return redirect()->route('qrcode.index')->withSuccess('QR code generated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $productId = decrypt($request->product_id);
            $banchCode = decrypt($request->banch_code);
            $getAllQr = GeneratedQR::where('product_id', $productId)->where('banch_code', $banchCode)->get();
            foreach ($getAllQr as $key => $value) 
            {
                if ($value->qr_code_image) {
                    $proFilePath = $value->qr_code_image;
                    $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                    if (file_exists(public_path('/public/'.$proPath))) {
                        \File::delete(public_path('/public/'.$proPath));
                    }
                }

                GeneratedQR::where('id', $value->id)->forceDelete();
            }
            $response = [
                'status' => true,
                'message' => 'QR code deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete QR code.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }

    public function qrCodeDownload(Request $request) 
    {
        // try {
            $productId = decrypt($request->product_id);
            $banchCode = decrypt($request->banch_code);
    
            // Fetch image URLs based on productId and banchCode
            $imageUrls = GeneratedQR::where('product_id', $productId)
                            ->where('banch_code', $banchCode)
                            ->pluck('qr_code_image')
                            ->toArray();

            $zipFileName = 'images_' . uniqid() . '.zip';
            $zipFilePath = storage_path('app/' . $zipFileName);

            // Initialize the ZIP object
            $zip = Zip::create($zipFilePath);

            // Add files to the ZIP archive
            foreach ($imageUrls as $imageUrl) {
                $imagePath = public_path($imageUrl);
                if (file_exists($imagePath)) {
                    $zip->add($imagePath);
                } else {
                    // Log or handle missing image files
                    // For now, we'll skip adding the missing file to the ZIP
                    continue;
                }
            }

            // Close the ZIP archive
            $zip->close();

            // Check if ZIP file was created
            if (file_exists($zipFilePath)) {
                $downloadLink = Storage::url($zipFileName);
                return response()->json([
                    'status' => true,
                    'message' => 'Ready to download. Please click OK to start the download.',
                    'downloadLink' => $downloadLink
                ]);
            } else {
                return response()->json(['error' => 'Failed to create ZIP archive'], 500);
            }
        // } catch (\Exception $e) {
        //     return response()->json(['success' => false, 'message' => 'Failed to create zip file.']);
        // }
    }
}
