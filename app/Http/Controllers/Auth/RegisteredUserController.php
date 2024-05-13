<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'domain_name' => ['required', 'string', 'lowercase', 'max:255', 'unique:domains,domain'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $tenant = Tenant::create($validatedData);

        $tenant->domains()->create([
            'domain' => $validatedData['domain_name'].'.'.config('app.domain')
        ]);

        event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);

        $newDomain = $validatedData['domain_name'].'.'.config('app.domain');

        // Construct the URL with the new domain
        $redirectUrl = 'http://' . $newDomain . ':8000/login';

        // Redirect to the new domain
        return Redirect::away($redirectUrl);
    }
}
