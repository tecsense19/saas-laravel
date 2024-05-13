<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample category data
        $categories = [
            ['category_name' => 'Tile Cleaner'],
            ['category_name' => 'Power Spacer'],
            ['category_name' => 'COOL SEAL PROOF'],
            ['category_name' => 'CRACK FILL PASTE'],
            ['category_name' => 'NEXTITE'],
            ['category_name' => 'Mastic (2 PART)'],
            ['category_name' => 'Proxy Grout (3 PART ) (Epoxy Tiles Joint Filler)'],
            ['category_name' => 'Grouts Plus'],
            ['category_name' => 'SBR (LATEX)'],
            ['category_name' => 'Liquid water Proof (LWP)'],
            ['category_name' => 'Ready Mix Mortar (RMM)'],
            ['category_name' => 'Block Joint Mortar'],
            ['category_name' => 'Wall Care Putty'],
            ['category_name' => 'Adhesive PU Base'],
            ['category_name' => 'Adhesives Mortar'],
            ['category_name' => 'Sand Grouts'],
            // Add more categories as needed
        ];

        // Insert data into the categories table
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
