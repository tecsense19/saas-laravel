<?php

namespace App\Http\Controllers\App;

use App\Models\{ User, Product, Event, VideoGallery, Feedback };
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(Request $request): View
    {
        $totalUser = User::with('roles')
                        ->whereDoesntHave('roles', function ($query) {
                            $query->where('name', 'Admin');
                        })->count();
        $totalProduct = Product::count();
        $totalEvent = Event::count();
        $totalVideo = VideoGallery::where('video_gallery_type', 'video')->count();
        $totalGallery = VideoGallery::where('video_gallery_type', 'gallery')->count();
        $totalFeedback = Feedback::count();

        return view('app.dashboard', compact('totalUser', 'totalProduct', 'totalEvent', 'totalVideo', 'totalGallery', 'totalFeedback'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('app.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated')->withSuccess('Prodile updated successfully.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
