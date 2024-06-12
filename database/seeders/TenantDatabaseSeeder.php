<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'PGLAgent']);
        Role::create(['name' => 'Mason']);
        Role::create(['name' => 'Dealer']);

        $this->call(CountryStateCityTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(VariantWithOptionSeeder::class);
        $this->call(HSNSACSeeder::class);
        $this->call(QRPointSeeder::class);
        $this->call(LanguageSeeder::class);
    }
}
