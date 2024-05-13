<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use App\Models\GeneratedQR;

class UpdateQRCodeImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $qrPaths;

    /**
     * Create a new job instance.
     */
    public function __construct($qrPaths)
    {
        $this->qrPaths = $qrPaths;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Prepare the update data for bulk update
        $updateData = collect($this->qrPaths)->pluck('qr_code_image', 'code_uuid')->toArray();

        // Bulk update QR code image paths in the database
        GeneratedQR::whereIn('code_uuid', array_keys($updateData))
            ->update(['qr_code_image' => \DB::raw("CASE code_uuid " . implode(" ", array_map(function ($codeUuid, $qrCodeImage) {
                return "WHEN '$codeUuid' THEN '$qrCodeImage'";
            }, array_keys($updateData), $updateData)) . " END")]);
    }
}
