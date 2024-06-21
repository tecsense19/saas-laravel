<x-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add New Company</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Companies</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="row g-7">
                    <div class="col-xl-12">
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!-- <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <div class="card-title">
                                    <i class="ki-duotone ki-badge fs-1 me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    </i>
                                    <h2>Add New Contact</h2>
                                </div>
                            </div> -->
                            <div class="card-body pt-5">
                                <form method="POST" class="form" action="{{ route('tenants.store') }}" id="companyForm" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="mb-7">
                                        <label class="fs-6 fw-semibold mb-3">
                                            <span>Update Avatar</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <div class="mt-1">
                                            <style>.image-input-placeholder { background-image: url('{{ asset("app/media/svg/files/blank-image.svg") }}' ) } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset("app/media/svg/files/blank-image-dark.svg") }}'); }</style>
                                            <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                                <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                </label>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Company Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Company Name" />
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
                                                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" placeholder="Email" required />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col col-lg-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Domain Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the domain name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-lg form-control-solid block mt-1 w-full error" id="domain_name" name="domain_name" :value="old('domain_name')" placeholder="Domain Name" required aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text border-0 mt-1" id="basic-addon2" style="padding: .950rem 1.5rem;">.{{ request()->getHost(); }}</span>
                                                    </div>
                                                </div>
                                                <label id="domain_name-error" class="error" for="domain_name"></label>
                                                <x-input-error :messages="$errors->get('domain_name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col col-lg-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Password</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the password.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>        
                                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
        
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col col-lg-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Confirm Password</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the confirm password.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>        
                                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
        
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Notes</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <textarea class="form-control form-control-solid" name="notes"></textarea>
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
    <script type="text/javascript">
        $( document ).ready(function() 
        {
            $("#companyForm").validate({
                rules: {
                    name: {
                        required: true,
                        remote: {
                            url: '{{ route("tenants.check.fields") }}',
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
                            url: '{{ route("tenants.check.fields") }}',
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
                            url: '{{ route("tenants.check.domain") }}',
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
</x-app-layout>
