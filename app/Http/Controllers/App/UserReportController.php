<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User
};
use App\Exports\UserReportExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;

use Auth;

class UserReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.report.user.index');
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $state_id = $request->input('state_id');
        $city_id = $request->input('city_id');

        // Query to retrieve variants with variant options
        $query = User::with('roles')
                    ->whereDoesntHave('roles', function ($query) {
                        $query->where('name', 'Admin');
                    });;

        // If search query is provided, apply search filters
        if ($state_id) {
            $query->where('state_id', $state_id);
        }

        if ($city_id) {
            $query->where('city_id', $city_id);
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $userReportList = $query->orderBy('id', 'desc')->paginate($perPage);
        
        return view('app.report.user.list', compact('userReportList'));
    }

    public function usersReportExport(Request $request)
    {
        // Retrieve search query parameter
        $state_id = $request->input('state_id');
        $city_id = $request->input('city_id');

        // Query to retrieve variants with variant options
        $query = User::with('roles')
                    ->whereDoesntHave('roles', function ($query) {
                        $query->where('name', 'Admin');
                    });;

        // If search query is provided, apply search filters
        if ($state_id) {
            $query->where('state_id', $state_id);
        }

        if ($city_id) {
            $query->where('city_id', $city_id);
        }
        $usersList = $query->orderBy('id', 'desc')->get();

        $filename = strtolower(Auth::user()->name) . '_company_user_report_' . date('Y-m-d') . '.csv';

        return Excel::download(new UserReportExport($usersList), $filename);
    }
}
