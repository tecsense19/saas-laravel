<x-front-layout>
    <section id="services" class="py-10 py-lg-20">
        <div class="container">
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <div class="card-body pt-5">
                    <form method="POST" class="form" action="{{ route('customer.store') }}" id="companyForm" enctype='multipart/form-data'>
                    @csrf
                        <div class="w-100">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Name On Card</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                </i>
                                </span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                            </div>
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-8 fv-row">
                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                    <div class="row fv-row">
                                        <div class="col-6">
                                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                <option></option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">CVV</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    </i>
                                    </span>
                                    </label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <i class="ki-duotone ki-credit-cart fs-2hx">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
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
                    </from>
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
</x-front-layout>