<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tenant;

class MigrateTenants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-tenants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for each tenant';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // php artisan app:migrate-tenants
        Tenant::all()->each(function ($tenant) {
            $this->info("Migrating tenant: {$tenant->name}");

            // Set the tenant database connection
            config(['database.connections.tenant.database' => 'tenant'.$tenant->id]);
            \DB::purge('tenant');
            \DB::reconnect('tenant');

            // Run migrations for the tenant
            \Artisan::call('migrate', [
                '--database' => 'tenant',
                '--path' => 'database/migrations/tenant',
                '--force' => true,
            ]);

            $this->info("Migrated tenant: {$tenant->name}");
        });

        $this->info('All tenants migrated successfully.');
    }
}
