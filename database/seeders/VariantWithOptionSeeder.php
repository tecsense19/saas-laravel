<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variant;
use App\Models\VariantOption;

class VariantWithOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample variation data
        $variant = [
            ['variant_name' => 'Type of packing'],
            ['variant_name' => 'Units'],
            ['variant_name' => 'Nos. Of Pouches in Carton'],
            ['variant_name' => 'Colors'],
            ['variant_name' => 'Size & Other'],
            // Add more variant as needed
        ];

        // Insert data into the variant table
        foreach ($variant as $keys => $var) {
            $newVariant = Variant::create($var);

            if($keys == 0)
            {
                // Create associated options for each variation
                $options = [
                    ['variant_id' => $newVariant->id, 'name' => 'loose'],
                    ['variant_id' => $newVariant->id, 'name' => 'Box/Carton'],
                    ['variant_id' => $newVariant->id, 'name' => 'Poly Bottle/ Carton'],
                    ['variant_id' => $newVariant->id, 'name' => 'Bucket'],
                    ['variant_id' => $newVariant->id, 'name' => 'HDPE Laminated bag'],
                    ['variant_id' => $newVariant->id, 'name' => 'Pouch / Carton'],
                ];
            } 
            else if($keys == 1)
            {
                $options = [
                    ['variant_id' => $newVariant->id, 'name' => '0.5 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '1 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '5 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '10 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '20 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '30 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '40 Kgs.'],
                    ['variant_id' => $newVariant->id, 'name' => '1 Ltrs.'],
                    ['variant_id' => $newVariant->id, 'name' => '20 Ltrs.'],
                    ['variant_id' => $newVariant->id, 'name' => '100 Nos/Pouch'],
                    ['variant_id' => $newVariant->id, 'name' => '0.100 Kgs.'],
                ];
            }
            else if($keys == 2)
            {
                $options = [
                    ['variant_id' => $newVariant->id, 'name' => '1x12'],
                    ['variant_id' => $newVariant->id, 'name' => 'One Bag Packing'],
                    ['variant_id' => $newVariant->id, 'name' => '1x24'],
                    ['variant_id' => $newVariant->id, 'name' => 'Bucket'],
                    ['variant_id' => $newVariant->id, 'name' => 'One Bucket'],
                    ['variant_id' => $newVariant->id, 'name' => '1x3 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x4 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x8 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x12 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x15 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x60 bottle'],
                    ['variant_id' => $newVariant->id, 'name' => '1x10 Tin'],
                    ['variant_id' => $newVariant->id, 'name' => '1x20 Tin'],
                    ['variant_id' => $newVariant->id, 'name' => '1x24 Tin'],
                    ['variant_id' => $newVariant->id, 'name' => '1X30 Tin'],
                    ['variant_id' => $newVariant->id, 'name' => '50 Pouch/Carton'],
                    ['variant_id' => $newVariant->id, 'name' => '25 Pouch/Carton'],
                    ['variant_id' => $newVariant->id, 'name' => '1x8 Bucket'],
                    ['variant_id' => $newVariant->id, 'name' => 'One Box'],
                ];
            }
            else if($keys == 3)
            {
                $options = [
                    ['variant_id' => $newVariant->id, 'name' => 'White'],
                    ['variant_id' => $newVariant->id, 'name' => 'Cream'],
                    ['variant_id' => $newVariant->id, 'name' => 'Ivory'],
                    ['variant_id' => $newVariant->id, 'name' => 'Sky blue'],
                    ['variant_id' => $newVariant->id, 'name' => 'Mashroom'],
                    ['variant_id' => $newVariant->id, 'name' => 'Pink'],
                    ['variant_id' => $newVariant->id, 'name' => 'Flora'],
                    ['variant_id' => $newVariant->id, 'name' => 'Grey'],
                    ['variant_id' => $newVariant->id, 'name' => 'Green'],
                    ['variant_id' => $newVariant->id, 'name' => 'Jaisalmer'],
                    ['variant_id' => $newVariant->id, 'name' => 'Brown'],
                    ['variant_id' => $newVariant->id, 'name' => 'Jet Black'],
                    ['variant_id' => $newVariant->id, 'name' => 'Graphite'],
                    ['variant_id' => $newVariant->id, 'name' => 'Alpine blue'],
                    ['variant_id' => $newVariant->id, 'name' => 'Silver Grey'],
                    ['variant_id' => $newVariant->id, 'name' => 'Dark Grey'],
                    ['variant_id' => $newVariant->id, 'name' => 'Beige'],
                    ['variant_id' => $newVariant->id, 'name' => 'Burgundy'],
                    ['variant_id' => $newVariant->id, 'name' => 'Copper Brown'],
                    ['variant_id' => $newVariant->id, 'name' => 'Dark Brown'],
                    ['variant_id' => $newVariant->id, 'name' => 'Terracotta'],
                    ['variant_id' => $newVariant->id, 'name' => 'Pista'],
                    ['variant_id' => $newVariant->id, 'name' => 'Kota Stone'],
                    ['variant_id' => $newVariant->id, 'name' => 'Sand Stone'],
                    ['variant_id' => $newVariant->id, 'name' => 'Coffee Brown'],
                    ['variant_id' => $newVariant->id, 'name' => 'Natural Grey'],
                    ['variant_id' => $newVariant->id, 'name' => 'Raven'],
                    ['variant_id' => $newVariant->id, 'name' => 'Antique White'],
                    ['variant_id' => $newVariant->id, 'name' => 'Smoke Grey'],
                    ['variant_id' => $newVariant->id, 'name' => 'Marbel Beige'],
                    ['variant_id' => $newVariant->id, 'name' => 'Chilly Red'],
                    ['variant_id' => $newVariant->id, 'name' => 'Green White'],
                    ['variant_id' => $newVariant->id, 'name' => 'Yellow'],
                    ['variant_id' => $newVariant->id, 'name' => 'Almond'],
                    ['variant_id' => $newVariant->id, 'name' => 'Aqua Blue'],
                    ['variant_id' => $newVariant->id, 'name' => 'Tree Green'],
                    ['variant_id' => $newVariant->id, 'name' => 'Green Galaxy'],
                    ['variant_id' => $newVariant->id, 'name' => 'Red Galaxy'],
                    ['variant_id' => $newVariant->id, 'name' => 'Tomato Red'],
                    ['variant_id' => $newVariant->id, 'name' => 'Copper'],
                    ['variant_id' => $newVariant->id, 'name' => 'Blue'],
                ];
            }
            else if($keys == 4)
            {
                $options = [
                    ['variant_id' => $newVariant->id, 'name' => 'Part 1 & Part 2'],
                    ['variant_id' => $newVariant->id, 'name' => 'PPDG - Resin/Harder/Filler'],
                    ['variant_id' => $newVariant->id, 'name' => 'PPFG ( Fluorescent ) - Resin/Harder/Filler'],
                    ['variant_id' => $newVariant->id, 'name' => 'PPNV ( Night Vision ) - Resin/Harder/Filler'],
                    ['variant_id' => $newVariant->id, 'name' => 'Resin with Filler & Harder'],
                    ['variant_id' => $newVariant->id, 'name' => 'Part 1'],
                    ['variant_id' => $newVariant->id, 'name' => '2mm'],
                    ['variant_id' => $newVariant->id, 'name' => '3mm'],
                    ['variant_id' => $newVariant->id, 'name' => '4mm'],
                    ['variant_id' => $newVariant->id, 'name' => '5mm'],
                    ['variant_id' => $newVariant->id, 'name' => '6mm'],
                    ['variant_id' => $newVariant->id, 'name' => '7mm'],
                ];
            }

            VariantOption::insert($options);
        }
    }
}
