<x-tenant-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
        </div>

        <div class="row g-3 mb-9">
            <div class="col-md-6">
                <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="{{ asset_url('app/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="{{ asset_url('app/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
                <img alt="Logo" src="{{ asset_url('app/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
            </div>
        </div>

        <div class="separator separator-content my-14">
            <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control bg-transparent" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control bg-transparent" type="password" name="password" placeholder="Password" :value="old('password')" required autofocus autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        @if (Route::has('password.request'))
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>
                <a href="{{ route('password.request') }}" class="link-primary">{{ __('Forgot your password?') }}</a>
            </div>
        @endif

        <div class="d-grid mb-10">
            <x-primary-button class="">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
            <a href="{{ route('register') }}" class="link-primary">Sign up</a>
        </div>
    </form>
</x-tenant-guest-layout>
