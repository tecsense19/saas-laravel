<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use App\Models\Domain;
use App\Services\CloudFlareService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class TenantController extends Controller
{
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'company_name' => ['required', 'string', 'max:255', 'unique:users,company_name'],
            'domain_name' => ['required', 'string', 'lowercase', 'max:255', 'unique:domains,domain'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $tenant = Tenant::create($validatedData);

        // $tenant->domains()->create([
        //     'domain' => $validatedData['domain_name'].'.'.config('app.domain')
        // ]);

        // Create DNS record on CloudFlare
        $cloudFlareService = new CloudFlareService();
        // $cloudFlareService->createDNSRecord($tenant->subdomain);
        $cloudFlareService->createDNSRecord($validatedData['domain_name'].'.'.config('app.domain'));

        return redirect()->route('tenants.index')->with('success', 'Tenant created successfully.');
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
