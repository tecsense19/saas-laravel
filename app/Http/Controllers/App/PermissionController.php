<?php

namespace App\Http\Controllers\App;

use App\Models\{
    FeedBack
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Validator;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.permissions.index');
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve variants with variant options
        $query = Permission::query();

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $permissionsList = $query->paginate($perPage);
        
        return view('app.permissions.list', compact('permissionsList'));
    }

    public function checkPermissionTitle(Request $request)
    {
        $title = $request->input('title');
        $permissionId = $request->input('permission_id') ? decrypt($request->input('permission_id')) : '';
        
        // Check if a permission with the given name exists
        if($permissionId)
        {
            $permissionExists = Permission::where('name', $title)->where('id', '!=', $permissionId)->exists();
        }
        else
        {
            $permissionExists = Permission::where('name', $title)->exists();
        }

        // Return JSON response indicating if permission name is unique
        echo json_encode(!$permissionExists);
    }

    public function store(Request $request) 
    {
        try {
            $input = $request->all();

            // Validate the request input to ensure all required fields are provided.
            $validator = Validator::make($input, [
                'title' => 'required|string'
            ]);
            
            // If validation fails, return an error response.
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            $data = [
                'name' => $request->title,
                'guard_name' => 'web'
            ];
            
            $permissionArr = Permission::updateOrCreate(
                ['name' => $request->bank_account_id],
                $data
            );

            $message = $permissionArr->wasRecentlyCreated ? 'Permission created successfully' : 'Permission updated successfully';
            
            return redirect()->route('permissions.index')->withSuccess($message);
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response.
            return $this->sendError($e->getMessage());
        }
    }

    public function createBulkPermissions(Request $request)
    {
        try {
            $input = $request->all();

            // Validate the request input to ensure all required fields are provided.
            $validator = Validator::make($input, [
                'bulk_title' => 'required|string'
            ]);
            
            // If validation fails, return an error response.
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            $actions = ['Create', 'List', 'Edit', 'Delete', 'View'];

            foreach ($actions as $action) {
                $permissionName = $request->bulk_title . ' ' . $action;
                Permission::updateOrCreate(
                    ['name' => $permissionName, 'guard_name' => 'web'],
                    ['updated_at' => now()]  // you can specify other fields to update if needed
                );
            }

            return redirect()->route('permissions.index')->withSuccess('Permissions created or updated successfully.');

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
            $id = decrypt($request->permission_id);
            $feedback = Permission::findOrFail($id);
            if ($feedback) {
                $proFilePath = $feedback->comment_img;
                $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                if (file_exists(public_path('/public/'.$proPath))) {
                    \File::delete(public_path('/public/'.$proPath));
                }
            }
            $feedback->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Permission deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete permission.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
