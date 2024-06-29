<x-front-layout>
    <section id="services" class="py-10 py-lg-20">
        <div class="container">
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <div class="card-body pt-5">
                    <form method="POST" class="form" action="{{ route('customer.store') }}" id="companyForm" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $planId }}" />
                        <h3 class="mb-5">Customer Details</h3>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-1">
                            <div class="fv-row mb-7 d-flex flex-wrap">
                                <label class="fs-6 fw-semibold form-label mt-3 col-md-3">
                                    <span class="required">Company Name</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Name" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="fv-row mb-7 d-flex flex-wrap">
                                <label class="fs-6 fw-semibold form-label mt-3 col-md-3">
                                    <span class="required">Email</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" placeholder="Email" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="fv-row mb-7 d-flex flex-wrap">
                                <label class="fs-6 fw-semibold form-label mt-3 col-md-3">
                                    <span class="required">Domain Name</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the domain name.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg form-control-solid block mt-1 w-full error" id="domain_name" name="domain_name" :value="old('domain_name')" placeholder="Domain Name" required aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text border-0 mt-1" id="basic-addon2" style="padding: .950rem 1.5rem;">.{{ request()->getHost(); }}</span>
                                        </div>
                                    </div>
                                    <label id="domain_name-error" class="error" for="domain_name"></label>
                                </div>
                            </div>
                            <div class="fv-row mb-7 d-flex flex-wrap">
                                <label class="fs-6 fw-semibold form-label mt-3 col-md-3">
                                    <span class="required">Password</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the password.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>    
                                <div class="col-md-9">    
                                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>
                            <div class="fv-row mb-7 d-flex flex-wrap">
                                <label class="fs-6 fw-semibold form-label mt-3 col-md-3">
                                    <span class="required">Confirm Password</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the confirm password.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="col-md-9">
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                            <div class="separator mb-6"></div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="companyFormSubmit" class="btn btn-primary">
                                    <span class="indicator-label">Save</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @section('script')
    <script type="text/javascript">
        $( document ).ready(function() 
        {
            $("#companyForm").validate({
                rules: {
                    name: {
                        required: true,
                        remote: {
                            url: '{{ route("check.fields") }}',
                            type: 'get',
                            async: false,
                            dataType:'json',
                            data: {
                                user_id: function() {
                                    // Return the ID value you want to pass
                                    return $('#user_id').val();
                                },
                                name: function() {
                                    return $('#name').val();
                                },
                                field_name: function() {
                                    return 'name';
                                }
                            }
                        }
                    },
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: '{{ route("check.fields") }}',
                            type: 'get',
                            async: false,
                            dataType:'json',
                            data: {
                                user_id: function() {
                                    // Return the ID value you want to pass
                                    return $('#user_id').val();
                                },
                                name: function() {
                                    return $('#email').val();
                                },
                                field_name: function() {
                                    return 'email';
                                }
                            }
                        }
                    },
                    domain_name: {
                        required: true,
                        remote: {
                            url: '{{ route("check.domain") }}',
                            type: 'get',
                            async: false,
                            dataType:'json',
                            data: {
                                user_id: function() {
                                    // Return the ID value you want to pass
                                    return $('#user_id').val();
                                },
                                domain_name: function() {
                                    return $('#domain_name').val();
                                }
                            }
                        }
                    },
                    password: {
                        required: true,
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    name: {
                        required: 'Company name is required!',
                        remote: "Company name already exist!"
                    },
                    email: {
                        required: 'Email is required!',
                        email: 'Please enter a valid email address.',
                        remote: "Email address already exist!"
                    },
                    domain_name: {
                        required: 'Domain name is required!',
                        remote: "Domain name already exist!"
                    },
                    password: {
                        required: 'Password is required!',
                    },
                    password_confirmation: {
                        required: 'Confirm password is required!',
                        equalTo: 'Passwords do not match!'
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                    // Show loading indication
                    submitButton = document.getElementById('companyFormSubmit');
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;

                    // Remove loading indication
                    // submitButton = document.getElementById('qrCodeSubmit');
                    // submitButton.removeAttribute('data-kt-indicator');
                    // submitButton.disabled = false;
                }
            });
        });
    </script>
    @endsection
</x-front-layout>