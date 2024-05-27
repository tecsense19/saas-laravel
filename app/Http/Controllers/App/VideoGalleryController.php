<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User,
    VideoGallery
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.video.index');
    }
    
    public function galleryIndex()
    {
        return view('app.gallery.index');
    }
    
    public function checkTitle(Request $request)
    {
        $title = $request->input('title');
        $videoGalleryId = $request->input('video_gallery_id') ? decrypt($request->input('video_gallery_id')) : '';
        
        $checkTitle = true;
        // Check if a variant with the given name exists
        if($videoGalleryId)
        {
            $checkTitle = VideoGallery::where('title', $title)->where('id', '!=', $videoGalleryId)->exists();
        }
        else
        {
            $checkTitle = VideoGallery::where('title', $title)->exists();
        }

        // Return JSON response indicating if variant name is unique
        echo json_encode(!$checkTitle);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Determine the per-page record count from the environment variable
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        $query = VideoGallery::where('video_gallery_type', 'video');

        // Query to retrieve video galleries
        if ($searchQuery) {
            $query->where('title', 'like', '%' . $searchQuery . '%')->paginate($perPage);
        }

        $videoList = $query->paginate($perPage);
        
        return view('app.video.list', compact('videoList'));
    }

    public function galleryList(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Determine the per-page record count from the environment variable
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        $query = VideoGallery::where('video_gallery_type', 'gallery');

        // Query to retrieve video galleries
        if ($searchQuery) {
            $query->where('title', 'like', '%' . $searchQuery . '%')->paginate($perPage);
        }

        $galleryList = $query->paginate($perPage);
        
        return view('app.gallery.list', compact('galleryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ids = $request->input('video_gallery_id') ? decrypt($request->input('video_gallery_id')) : '';

        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        $redirect = $request->video_gallery_type == 'video' ? 'video.index' : 'gallery.index';

        if($ids)
        {
            VideoGallery::where('id', $ids)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
                'video_gallery_type' => $request->video_gallery_type,
                'file_type' => $request->selected_type
            ]);

            if($file = $request->file('selected_file'))
            {
                $path = $request->video_gallery_type == 'video' ? 'public/uploads/video/' : 'public/uploads/gallery/';

                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);

                $img = 'public/uploads/video/' . $filename;

                VideoGallery::where('id', $ids)->update([
                    'file_url' => $img,
                ]);
            }

            if($request->selected_type == 'link') {
                VideoGallery::where('id', $ids)->update([
                    'file_url' => $request->selected_link
                ]);
            }

            $message = $request->video_gallery_type == 'video' ? 'Video updated successfully.' : 'Gallery updated successfully.';

            return redirect()->route($redirect)->withSuccess($message);
        }
        else
        {
            $lastEntry = VideoGallery::create([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
                'video_gallery_type' => $request->video_gallery_type,
                'file_type' => $request->selected_type,
                'file_url' => $request->selected_type == 'link' ? $request->selected_link : ''
            ]);

            if($file = $request->file('selected_file'))
            {
                $path = $request->video_gallery_type == 'video' ? 'public/uploads/video/' : 'public/uploads/gallery/';

                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $filename);

                $img = 'public/uploads/video/' . $filename;

                VideoGallery::where('id', $lastEntry->id)->update([
                    'file_url' => $img,
                ]);
            }

            $message = $request->video_gallery_type == 'video' ? 'Video added successfully.' : 'Gallery added successfully.';

            return redirect()->route($redirect)->withSuccess($message);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->video_gallery_id);
            $video = VideoGallery::findOrFail($id);
            if ($video) {
                if($video->file_type != 'link')
                {
                    $proFilePath = $video->file_url;
                    $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                    if (file_exists(public_path('/public/'.$proPath))) {
                        \File::delete(public_path('/public/'.$proPath));
                    }
                }
            }
            $video->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Item deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete Item.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
