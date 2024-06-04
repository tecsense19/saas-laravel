<x-tenant-app-layout>
<div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add New User</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Users</li>
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
                                <form method="POST" class="form" action="{{ route('users.store') }}" id="userForm" enctype='multipart/form-data'>
                                    @csrf
                                    <h3 class="mb-5">User Details</h3>
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
                                            <style>.image-input-placeholder { background-image: url('{{ asset_url("app/media/svg/files/blank-image.svg") }}' ) } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset_url("app/media/svg/files/blank-image-dark.svg") }}'); }</style>
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
                                                    <span class="required">Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Name" required autocomplete="username" />
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
                                                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" placeholder="Email" required />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
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
                                                <x-text-input id="password" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password"
                                                                placeholder="Password"
                                                                required autocomplete="new-password" />
        
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
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
                                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                                type="password"
                                                                placeholder="Confirm Password"
                                                                name="password_confirmation" required autocomplete="new-password" />
        
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-sx-12 col-sm-6 col-md-3 col-xl-3">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Country</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select the country.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select name="country" id="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1"  data-hide-search="true">
                                                    <option value="">Select Country</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-sx-12 col-sm-6 col-md-3 col-xl-3">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">State</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select the state.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select name="state" id="state" aria-label="Select a State" data-control="select2" data-placeholder="Select a state..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1"  data-hide-search="true">
                                                    <option value="">Select State</option>
                                                </select>
        
                                                <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-sx-12 col-sm-6 col-md-3 col-xl-3">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">City</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select the city.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>        
                                                <select name="city" id="city" aria-label="Select a City" data-control="select2" data-placeholder="Select a city..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1"  data-hide-search="true">
                                                    <option value="">Select City</option>
                                                </select>
        
                                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-sx-12 col-sm-6 col-md-3 col-xl-3">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Pincode</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the pincode.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>        
                                                <x-text-input id="pincode" class="block mt-1 w-full"
                                                                type="text"
                                                                placeholder="Pincode"
                                                                name="pincode" required autocomplete="new-password" />
        
                                                <x-input-error :messages="$errors->get('pincode')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Address</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the address.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <textarea class="form-control form-control-solid" name="address" required></textarea>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">User Role</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select user role.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <select class="form-control mt-1" id="user_role" name="user_role">
                                            <option value="">Select User Role</option>
                                            @if(count($getAllRole) > 0)
                                                @foreach($getAllRole as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <h3 class="mb-5">Bank Details</h3>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Branch Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the branch name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="branch_name" class="block mt-1 w-full" type="text" name="branch_name" :value="old('branch_name')" placeholder="Branch Name" required />
                                                <x-input-error :messages="$errors->get('branch_name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Bank Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the bank name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" :value="old('bank_name')" placeholder="Bank Name" required />
                                                <x-input-error :messages="$errors->get('bank_name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Account Number</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the account number.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="account_number" class="block mt-1 w-full" type="text" name="account_number" :value="old('account_number')" placeholder="Account Number" required />
                                                <x-input-error :messages="$errors->get('account_number')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">IFSC Code</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the IFSC code.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="ifsc_code" class="block mt-1 w-full" type="text" name="ifsc_code" :value="old('ifsc_code')" placeholder="IFSC Code" required />
                                                <x-input-error :messages="$errors->get('ifsc_code')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">A/C Holder Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the account holder name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="ac_holder_name" class="block mt-1 w-full" type="text" name="ac_holder_name" :value="old('ac_holder_name')" placeholder="A/C Holder Name" required />
                                                <x-input-error :messages="$errors->get('ac_holder_name')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator mb-6"></div>
                                    <div class="d-flex justify-content-end">
                                        <a type="reset" href="{{ route('users.index') }}" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</a>
                                        <button type="submit" id="userSubmit" class="btn btn-primary">
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
            $( document ).ready(function() {
                $("#userForm").validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                        password: {
                            required: true,
                        },
                        password_confirmation: {
                            required: true,
                            equalTo: "#password" // This ensures that confirm_password matches the value of new_password
                        },
                        country: {
                            required: true,
                        },
                        state: {
                            required: true,
                        },
                        city: {
                            required: true,
                        },
                        pincode: {
                            required: true,
                        },
                        address: {
                            required: true,
                        },
                        user_role: {
                            required: true,
                        },
                        branch_name: {
                            required: true,
                        },
                        bank_name: {
                            required: true,
                        },
                        account_number: {
                            required: true,
                        },
                        ifsc_code: {
                            required: true,
                        },
                        ac_holder_name: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Name is required!",
                        },
                        email : {
                            required: 'Email is required!',
                            email: "Please enter valid email address."
                        },
                        password: {
                            required: "Password is required!",
                        },
                        password_confirmation: {
                            required: 'Confirm password is required!',
                            equalTo: 'Passwords do not match!' // Custom message for non-matching passwords
                        },
                        country: {
                            required: "Country is required!",
                        },
                        state: {
                            required: "State is required!",
                        },
                        city: {
                            required: "City is required!",
                        },
                        pincode: {
                            required: "Pincode is required!",
                        },
                        address: {
                            required: "Address is required!",
                        },
                        user_role: {
                            required: "User role is required!",
                        },
                        branch_name: {
                            required: "Branch name is required!",
                        },
                        bank_name: {
                            required: "Bank name is required!",
                        },
                        account_number: {
                            required: "Account number is required!",
                        },
                        ifsc_code: {
                            required: "IFSC code is required!",
                        },
                        ac_holder_name: {
                            required: "Account holder name is required!",
                        },
                    },
                    submitHandler: function(form) {
                        form.submit();

                        submitButton = document.getElementById('userSubmit');
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                    }
                });

                getAllCountry();

                $('#country, #state, #city, #user_role').select2();

                $('#country').on('change', function() {
                    var countryId = $(this).val();
                    if(countryId) {
                        $.ajax({
                            url: '/get/states/' + countryId,
                            type: 'GET',
                            success: function(response) {
                                var state = "";
                                if(response.status)
                                {
                                    $('#state').empty();
                                    $.each(response.data, function(index, item) {
                                        // Access properties of each object
                                        state += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                                    });

                                    $('#state').append(state);
                                }
                            }
                        });
                    } else {
                        $('#state').empty();
                    }
                });

                $('#state').on('change', function() {
                    var stateId = $(this).val();
                    if(stateId) {
                        $.ajax({
                            url: '/get/cities/' + stateId,
                            type: 'GET',
                            success: function(response) {
                                var city = "";
                                if(response.status)
                                {
                                    $('#city').empty();
                                    // Loop through the array using $.each()
                                    $.each(response.data, function(index, item) {
                                        // Access properties of each object
                                        city += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                                    });

                                    $('#city').append(city);
                                }
                            }
                        });
                    } else {
                        $('#city').empty();
                    }
                });
            });

            function getAllCountry() {
                $.ajax({
                    type:'get',
                    headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                    url:'{{ route("country.list") }}',
                    data: {  },
                    success:function(response)
                    {
                        var country = "";
                        if(response.status)
                        {
                            // Loop through the array using $.each()
                            $.each(response.data, function(index, item) {
                                // Access properties of each object
                                country += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                            });

                            $('#country').append(country);
                        }
                    }
                });
            }
        </script>
    @endsection
</x-tenant-app-layout>
