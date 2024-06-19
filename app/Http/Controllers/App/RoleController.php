<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        $getAllRole = Role::with('permissions')->get();
        return view('app.roles.index', compact('getAllRole', 'permissions'));
    }

    public function roleCheckName(Request $request)
    {
        $name = $request->input('role_name');
        $roleId = $request->input('role_id') ? decrypt($request->input('role_id')) : '';
        
        // Check if a permission with the given name exists
        if($roleId)
        {
            $roleExists = Role::where('name', $name)->where('id', '!=', $roleId)->exists();
        }
        else
        {
            $roleExists = Role::where('name', $name)->exists();
        }

        // Return JSON response indicating if permission name is unique
        echo json_encode(!$roleExists);
    }

    public function store(Request $request) 
    {
        try {
            $input = $request->all();
            // Validate the request input to ensure all required fields are provided.
            $validator = Validator::make($input, [
                'role_name' => 'required|string'
            ]);
            
            // If validation fails, return an error response.
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            $roleId = $request->role_id ? decrypt($request->role_id) : '';
            $message = '';
            if($roleId)
            {
                $role = Role::find($roleId);
                $permissions = isset($request->permissions) && count($request->permissions) > 0 ? Permission::whereIn('name', $request->permissions)->pluck('id')->toArray() : [];
                // $role->permissions()->sync($permissions);
                $role->syncPermissions($permissions);
                
                $message = 'Permissions assign successfully.';
            }
            else
            {
                $role = Role::create(['name' => $request->role_name, 'guard_name' => 'web']);
                $permissions = isset($request->permissions) && count($request->permissions) > 0 ? Permission::whereIn('name', $request->permissions)->pluck('id')->toArray() : [];
                // $role->permissions()->sync($permissions);
                $role->syncPermissions($permissions);
                $message = 'Permissions assign successfully.';
            }
            
            return redirect()->route('roles.index')->withSuccess($message);
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response.
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->role_id);
            $role = Role::findOrFail($id);
            $role->permissions()->delete();
            $role->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Role deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete role.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}