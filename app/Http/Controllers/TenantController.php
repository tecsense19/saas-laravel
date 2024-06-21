<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use App\Models\Domain;
use App\Services\CloudFlareService;
use App\Services\CPanelApiService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TenantController extends Controller
{
    protected $cpanel;

    public function __construct(CPanelApiService $cpanel)
    {
        $this->cpanel = $cpanel;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return view('tenants.index');
    }

    public function list(Request $request)
    {
        $tenants = Tenant::with('domains')->paginate(env('PER_PAGE_RECORD_COUNT'));
        
        return view('tenants.list', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenants.create');
    }

    public function checkDbFields(Request $request)
    {
        $fieldName = $request->input('field_name');
        $name = $request->input('name');
        $userId = $request->input('user_id') ? decrypt($request->input('user_id')) : '';
        
        // Check if a hsnsac with the given name exists
        if($userId)
        {
            $cNameExists = Tenant::where($fieldName, $name)->where('id', '!=', $userId)->exists();
        }
        else
        {
            $cNameExists = Tenant::where($fieldName, $name)->exists();
        }

        // Return JSON response indicating if hsnsac name is unique
        echo json_encode(!$cNameExists);
    }
    
    public function checkDomainName(Request $request)
    {
        $name = $request->input('domain_name');
        $userId = $request->input('user_id') ? decrypt($request->input('user_id')) : '';
        $dName = $name . '.' . request()->getHost();
        // Check if a hsnsac with the given name exists
        if($userId)
        {
            $dNameExists = Domain::where('domain', $dName)->where('id', '!=', $userId)->exists();
        }
        else
        {
            $dNameExists = Domain::where('domain', $dName)->exists();
        }

        $cloudFlareService = new CloudFlareService();
        $respo = $cloudFlareService->isSubdomainAvailable($dName);
        if($respo)
        {
            echo json_encode(!$respo);
        }
        else
        {
            // Return JSON response indicating if hsnsac name is unique
            echo json_encode(!$dNameExists);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:tenants,name'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'domain_name' => ['required', 'string', 'lowercase', 'max:255', 'unique:domains,domain'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $tenant = Tenant::create($validatedData);

        $subDomainName = $validatedData['domain_name'].'.'.config('app.domain');

        // Create DNS record on CloudFlare
        $cloudFlareService = new CloudFlareService();
        $cloudFlareService->createDNSRecord($subDomainName);

        $tenant->domains()->create([
            'domain' => $subDomainName
        ]);

        $dbUserName = $tenant ? explode('-', $tenant->id)[0] : '';
        
        if($dbUserName)
        {
            // Create the database
            $dbResponse = $this->cpanel->createDatabase($tenant->id);
            if (!$dbResponse['status']) {
                return redirect()->route('tenants.index')->with('error', $dbResponse['errors'][0]);
            }
            // Create the database user
            $userResponse = $this->cpanel->createDatabaseUser($dbUserName, $tenant->id);
            if (!$userResponse['status']) {
                return redirect()->route('tenants.index')->with('error', $userResponse['errors'][0]);
            }
            // Assign privileges to the user
            $privResponse = $this->cpanel->setUserPrivileges($tenant->id, $dbUserName);
            if (!$privResponse['status']) {
                return redirect()->route('tenants.index')->with('error', $privResponse['errors'][0]);
            }

            $dbName = '';
            $dbUserName = '';
            $dbPassword = '';

            if(request()->getPort() != 80) {
                $dbName = 'tenant' . $tenant->id;
                $dbUserName = env('DB_USERNAME', 'root');
                $dbPassword = env('DB_PASSWORD', '');
            } else {
                $dbName = config('app.cpanel_user_name') . '_' . $tenant->id;
                $dbUserName = config('app.cpanel_user_name') . '_' . explode('-', $tenant->id)[0];
                $dbPassword = $tenant->id;
            }

            // Set the database connection dynamically
            config(['database.connections.tenant.database' => $dbName]);
            config(['database.connections.tenant.username' => $dbUserName]);
            config(['database.connections.tenant.password' => $tenant->id]);
            DB::purge('tenant');
            DB::reconnect('tenant');
            
            // Set the tenant ID globally
            // app()->instance('tenant_id', $tenant->tenant_id);

            DB::setDefaultConnection('tenant');

            // Step 2: Run migrations for the tenant's database
            Artisan::call('migrate', [
                '--database' => 'tenant', // Replace with your tenant's database connection name
                '--path' => 'database/migrations/tenant', // Adjust path if needed
            ]);

            // Run seeders for the tenant's database
            Artisan::call('db:seed', [
                '--class' => 'TenantDatabaseSeeder', // Replace with your seeder class
                '--database' => 'tenant', // Specify the connection name if using multiple database connections
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $user->assignRole('Admin');
        }

        return redirect()->route('tenants.index')->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
