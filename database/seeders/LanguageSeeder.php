<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Read the SQL file contents
        $sqlFile = file_get_contents(base_path('language/language-db.sql'));

        // Execute the SQL directly
        DB::unprepared($sqlFile);
    }
}
