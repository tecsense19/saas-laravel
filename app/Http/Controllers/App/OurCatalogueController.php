<?php

namespace App\Http\Controllers\App;

use App\Models\{
    Catalogue
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

use App\Services\ImageUploadService;

class OurCatalogueController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.catalogue.index');
    }
    
    public function checkTitle(Request $request)
    {
        $title = $request->input('catalogue_title');
        $catalogueId = $request->input('catalogue_id') ? decrypt($request->input('catalogue_id')) : '';
        
        $checkTitle = true;
        // Check if a variant with the given name exists
        if($catalogueId)
        {
            $checkTitle = Catalogue::where('catalogue_title', $title)->where('id', '!=', $catalogueId)->exists();
        }
        else
        {
            $checkTitle = Catalogue::where('catalogue_title', $title)->exists();
        }

        // Return JSON response indicating if variant name is unique
        echo json_encode(!$checkTitle);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Determine the per-page record count from the environment variable
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        $query = Catalogue::query();

        // Add a conditional clause using 'when'
        $query->when($searchQuery, function($q) use ($searchQuery) {
            return $q->where('catalogue_title', 'like', '%' . $searchQuery . '%');
        });

        // Paginate the results
        $catalogueList = $query->paginate($perPage);
        
        return view('app.catalogue.list', compact('catalogueList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ids = $request->input('catalogue_id') ? decrypt($request->input('catalogue_id')) : '';

        $validatedData = $request->validate([
            'catalogue_title' => ['required', 'string', 'max:255']
        ]);

        if($ids)
        {
            Catalogue::where('id', $ids)->update([
                'catalogue_title' => $request->catalogue_title
            ]);

            if($file = $request->file('selected_file'))
            {
                $result = $this->imageUploadService->upload(Catalogue::class, 'file_path', 'catalogue', $file, $ids);
            }

            return redirect()->route('catalogue.index')->withSuccess('Catalogue updated successfully.');
        }
        else
        {
            $lastEntry = Catalogue::create([
                'catalogue_title' => $request->catalogue_title
            ]);

            if($file = $request->file('selected_file'))
            {
                $result = $this->imageUploadService->upload(Catalogue::class, 'file_path', 'catalogue', $file, $lastEntry->id);
            }

            return redirect()->route('catalogue.index')->withSuccess('Catalogue created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->catalogue_id);
            $catalogue = Catalogue::findOrFail($id);
            if ($catalogue && $catalogue->file_path) {
                $proFilePath = $catalogue->file_path;
                $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                if (file_exists(public_path('/public/'.$proPath))) {
                    \File::delete(public_path('/public/'.$proPath));
                }
            }
            $catalogue->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Catalogue deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete catalogue.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
