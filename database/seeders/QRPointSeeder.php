<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QRPoint;

class QRPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample category data
        $qrPont = [
            ['qr_amount' => '10', 'qr_status' => 'active'],
            ['qr_amount' => '20', 'qr_status' => 'active'],
            ['qr_amount' => '30', 'qr_status' => 'active'],
            ['qr_amount' => '40', 'qr_status' => 'active'],
            ['qr_amount' => '50', 'qr_status' => 'active'],
            ['qr_amount' => '60', 'qr_status' => 'active'],
            ['qr_amount' => '70', 'qr_status' => 'active'],
            ['qr_amount' => '80', 'qr_status' => 'active'],
            ['qr_amount' => '90', 'qr_status' => 'active'],
            ['qr_amount' => '100', 'qr_status' => 'active'],
            // Add more categories as needed
        ];

        // Insert data into the categories table
        foreach ($qrPont as $qrpoint) {
            QRPoint::create($qrpoint);
        }
    }
}
