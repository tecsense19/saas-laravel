<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678')
        ]);

        $company = [
            'name' => 'Demo',
            'email' => 'demo@gmail.com',
            'domain_name' => 'demo',
            'password' => Hash::make('12345678'),
        ];

        $tenant = Tenant::create($company);

        $tenant->domains()->create([
            'domain' => 'demo.'.config('app.domain')
        ]);

        $this->call(CountryStateCityTableSeeder::class);
    }
}
