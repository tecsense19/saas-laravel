<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\LanguageStringMaster;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Read the SQL file contents
        $sqlFile = file_get_contents(base_path('permission/permissions.sql'));

        // Execute the SQL directly
        DB::unprepared($sqlFile);

        $role = Role::where('name', 'Admin')->first();
        if($role)
        {
            $permissions = Permission::pluck('id')->toArray();
            $role->syncPermissions($permissions);
        }
    }
}
