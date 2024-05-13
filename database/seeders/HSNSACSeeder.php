<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HsnSac;

class HSNSACSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample category data
        $hsnsacArr = [
            ['hsnsac_name' => '39073090', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '32099090', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '34029099', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '39232990', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '30291090', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '35061000', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '40021100', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '38244010', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '32141000', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '35069900', 'hsnsac_value' => '18'],
            ['hsnsac_name' => '38245090', 'hsnsac_value' => '18'],
            // Add more hsnsac as needed
        ];

        // Insert data into the hsnsac table
        foreach ($hsnsacArr as $hsnsac) {
            HsnSac::create($hsnsac);
        }
    }
}
