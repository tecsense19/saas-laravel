<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\LoginRecord;
use App\Services\ImageUploadService;

class AccountController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display the user's profile form.
     */
    public function account(Request $request): View
    {
        return view('master.account.index');
    }

    public function updateProfile(Request $request) 
    {
        $input = $request->all();

        $updateUser = [];
        $updateUser['name'] = $input['name'];
        $updateUser['email'] = $input['email'];

        User::where('id', $input['user_id'])->update($updateUser);

        if($file = $request->file('avatar'))
        {
            $result = $this->imageUploadService->upload(User::class, 'profile_pic', 'user', $file, $input['user_id']);
        }

        return redirect()->route('account')->with('success', 'Profile updated successfully.');
    }

    public function accountLoginSessionLogs(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve categories
        $query = LoginRecord::query();

        // Apply search filter
        if ($searchQuery) {
            $query->where('device', 'like', "%$searchQuery%");
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $logList = $query->paginate($perPage);
        
        return view('master.account.loglist', compact('logList'));
    }
}