<?php

namespace App\Http\Controllers\App;

use App\Models\{
    Tenant,
    User,
    Country,
    State,
    City,
    BankAccount
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.users.index');
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve users with roles
        $query = User::with('roles')
                    ->whereDoesntHave('roles', function ($query) {
                        $query->where('name', 'Admin');
                    });

        // Apply search filter
        if ($searchQuery) {
            $query->where(function($q) use ($searchQuery) {
                $q->where('name', 'like', "%$searchQuery%")
                ->orWhere('email', 'like', "%$searchQuery%");
            });
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $users = $query->paginate($perPage);
        
        return view('app.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getAllRole = Role::where('name', '!=', 'Admin')->get();
        return view('app.users.create', compact('getAllRole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'pincode' => $request->pincode,
            'address' => $request->address
        ]);

        if($file = $request->file('avatar'))
        {
            $path = 'public/uploads/user/';

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);

            $img = 'public/uploads/user/' . $filename;

            User::where('id', $user->id)->update([
                'profile_pic' => $img,
            ]);
        }

        $user->roles()->sync($request->input('user_role'));

        $bankAccount = BankAccount::create([
            'user_id' => $user->id,
            'branch_name' => $request->branch_name,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'ac_holder_name' => $request->ac_holder_name
        ]);

        return redirect()->route('users.index')->withSuccess('User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userId)
    {
        $id = decrypt($userId);
        $userDetails = User::with('roles', 'bankAccount')->findOrFail($id);

        $getAllRole = Role::where('name', '!=', 'Admin')->get();
        return view('app.users.edit', compact('getAllRole', 'userDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$user->id]
        ]);

        if($file = $request->file('avatar'))
        {
            $path = 'public/uploads/user/';

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);

            $img = 'public/uploads/user/' . $filename;
            
            $userData['profile_pic'] = $img;

            if($request->user_id)
            {
                $getUserDetails = User::where('id', $request->user_id)->first();
                if ($getUserDetails) {
                    $proFilePath = $getUserDetails->profile_pic;
                    $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                    if (file_exists(public_path('/public/'.$proPath))) {
                        \File::delete(public_path('/public/'.$proPath));
                    }
                }
            }

            User::where('id', $request->user_id)->update([
                'profile_pic' => $img,
            ]);
        }

        User::where('id', $request->user_id)->update([
            'name' => $request->name,
            'country_id' => $request->country,
            'state_id' => $request->state,
            'city_id' => $request->city,
            'pincode' => $request->pincode,
            'address' => $request->address
        ]);

        $user->roles()->sync($request->input('user_role'));

        $bankAccount = BankAccount::where('id', $request->bank_id)->update([
            'user_id' => $request->user_id,
            'branch_name' => $request->branch_name,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'ac_holder_name' => $request->ac_holder_name
        ]);

        return redirect()->route('users.index')->withSuccess('User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory(Request $request)
    {
        // 
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        // try {
            $id = decrypt($request->user_id);
            $user = User::findOrFail($id);
    
            // Delete related bank accounts
            $user->bankAccount()->delete(); // Assuming you have a relationship method named bankAccounts
            
            // Now delete the user
            $user->delete();
            $response = [
                'status' => true,
                'message' => 'User deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        // } catch (\Exception $e) {
        //     $response = [
        //         'status' => false,
        //         'message' => 'Failed to delete user.', // Add your additional data here
        //     ];
        //     return response()->json($response);
        // }
    }
}
