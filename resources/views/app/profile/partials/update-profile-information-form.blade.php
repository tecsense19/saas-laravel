<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6 mb-5">
        @csrf
        @method('patch')
        <h3 class="mb-5">User Details</h3>
        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
            <div class="col">
                <div class="fv-row mb-7">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Name</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                            <i class="ki-duotone ki-information fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" placeholder="Name" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </div>
            <div class="col">
                <div class="fv-row mb-7">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Email</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                            <i class="ki-duotone ki-information fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </label>
                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email', $user->email)" placeholder="Email" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
