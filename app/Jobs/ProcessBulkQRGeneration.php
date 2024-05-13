<?php

namespace App\Jobs;

use App\Jobs\UpdateQRCodeImages;
use Illuminate\Support\Facades\Queue;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use App\Models\GeneratedQR;

class ProcessBulkQRGeneration implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $min;
    protected $max;
    protected $productId;
    protected $qrPointId;
    protected $branchCode;

    /**
     * Create a new job instance.
     */
    public function __construct($min, $max, $productId, $qrPointId, $branchCode)
    {
        $this->min = $min;
        $this->max = $max;
        $this->productId = $productId;
        $this->qrPointId = $qrPointId;
        $this->branchCode = $branchCode;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Generate UUIDs
        $uuids = collect(range($this->min, $this->max))->map(function () {
            return (string) Str::uuid();
        });
    
        // Prepare data for bulk insert
        $qrCodes = $uuids->map(function ($uuid) {
            return [
                'product_id' => $this->productId,
                'qr_point_id' => $this->qrPointId,
                'code_uuid' => $uuid,
                'banch_code' => $this->branchCode,
                'valid_on' => now()->addYear(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();
    
        // Bulk insert QR codes
        GeneratedQR::insert($qrCodes);
    
        // Generate QR code images paths
        $qrPaths = collect($qrCodes)->map(function ($qrCode) {
            $options = new QROptions([
                'outputType' => QRCode::OUTPUT_IMAGE_PNG,
                'eccLevel'   => QRCode::ECC_L,
                // Add more options as needed
            ]);
            $qrcode = new QRCode($options);
            $qrPath = 'public/uploads/product_qr/' . $qrCode['code_uuid'] . '.png';
            $qrcode->render($qrCode['code_uuid'], $qrPath);
            return [
                'code_uuid' => $qrCode['code_uuid'],
                'qr_code_image' => $qrPath,
            ];
        });

        // Dispatch job to update QR code images in the background
        Queue::push(new UpdateQRCodeImages($qrPaths->toArray()));
    }
}
