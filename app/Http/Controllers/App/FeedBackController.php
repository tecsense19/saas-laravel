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

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.feedback.index');
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve variants with variant options
        $query = FeedBack::with('userDetails');

        // If search query is provided, apply search filters
        if ($searchQuery) {
            $query->whereHas('userDetails', function ($q) use ($searchQuery) {
                $q->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('email', 'like', '%' . $searchQuery . '%');
            });
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $feedbackList = $query->paginate($perPage);
        
        return view('app.feedback.list', compact('feedbackList'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->feedback_id);
            $feedback = FeedBack::findOrFail($id);
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
                'message' => 'Feedback deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete feedback.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
