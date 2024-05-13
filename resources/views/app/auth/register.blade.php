<x-tenant-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
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

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="domain_name" :value="__('Domain Name')" />
            <x-text-input id="domain_name" class="block mt-1 w-full" type="text" name="domain_name" :value="old('domain_name')" placeholder="Domain Name" required autocomplete="username" />
            <x-input-error :messages="$errors->get('domain_name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-grid mt-4 mb-10">
            <x-primary-button class="">
                {{ __('Sign up') }}
            </x-primary-button>
        </div>

        <div class="text-gray-500 text-center fw-semibold fs-6 mt-4">{{ __('Already registered?') }}
            <a href="{{ route('login') }}" class="link-primary">{{ __('Sign in') }}</a>
        </div>
    </form>
</x-tenant-guest-layout>
