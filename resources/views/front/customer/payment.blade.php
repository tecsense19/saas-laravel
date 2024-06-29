<x-front-layout>
    <section id="services" class="py-10 py-lg-20">
        <div class="container">
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <div class="card-body">
                    <form method="POST" class="form" action="{{ route('payment.store') }}" id="companyForm" enctype='multipart/form-data'>
                    @csrf
                        <div class="row d-flex flex-wrap">
                            <div class="col-12 col-lg-6">
                                <h4 class="mb-5">Billing Details</h4>
                                <div class="separator mb-6"></div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Full Name</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's full name.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" placeholder="Full Name" required />
                                    <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
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
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Address</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's address.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="Address" required />
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                </div>
                                <div class="row d-flex flex-wrap">
                                    <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">City</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the city.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" placeholder="City" required />
                                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">State</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the state.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" placeholder="State" required />
                                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row col-md-4">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Pincode</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the pincode.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="pincode" class="block mt-1 w-full" type="text" name="pincode" :value="old('pincode')" placeholder="Pincode" required />
                                        <x-input-error :messages="$errors->get('pincode')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="mb-5">Payment Details</h4>
                                <div class="separator mb-6"></div>
                                <div class="row d-flex flex-wrap mb-7 mt-12 fv-row">
                                    <div class="col-6"><b>Selected Plan:</b></div>
                                    <div class="col-6 text-end">1</div>
                                    <div class="col-6"><b>Plan Type:</b></div>
                                    <div class="col-6 text-end">Monthly</div>
                                    <div class="col-6"><b>Plan Price:</b></div>
                                    <div class="col-6 text-end">99</div>
                                </div>
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
                                    <input type="text" class="form-control form-control-lg form-control-solid block mt-1 w-full mt-1" placeholder="" name="card_name" value="Max Doe" />
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-lg form-control-solid block mt-1 w-full mt-1" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                            <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                            <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                            <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-md-8 mb-7 fv-row">
                                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                        <div class="row fv-row">
                                            <div class="col-6">
                                                <select name="card_expiry_month" class="form-select form-select-solid form-control form-control-lg form-control-solid block mt-1 w-full mt-1" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                    <option value="">Select Month</option>
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
                                                <select name="card_expiry_year" class="form-select form-select-solid form-control form-control-lg form-control-solid block mt-1 w-full mt-1" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                    <option value="">Select Year</option>
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
                                            <input type="text" class="form-control form-control-lg form-control-solid block mt-1 w-full mt-1" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                <i class="ki-duotone ki-credit-cart fs-2hx">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator mb-6"></div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="companyFormSubmit" class="btn btn-primary">
                                    <span class="indicator-label">Pay</span>
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
                    full_name: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    city: {
                        required: true,
                    },
                    state: {
                        required: true
                    },
                    pincode: {
                        required: true
                    },
                    card_name: {
                        required: true
                    },
                    card_number: {
                        required: true
                    },
                    card_expiry_month: {
                        required: true
                    },
                    card_expiry_year: {
                        required: true
                    },
                    card_cvv: {
                        required: true
                    }
                },
                messages: {
                    full_name: {
                        required: 'Full name is required!'
                    },
                    email: {
                        required: 'Email is required!',
                        email: 'Please enter a valid email address.'
                    },
                    address: {
                        required: 'Address is required!'
                    },
                    city: {
                        required: 'City is required!',
                    },
                    state: {
                        required: 'State is required!'
                    },
                    pincode: {
                        required: 'Pincode is required!'
                    },
                    card_name: {
                        required: 'Card Name is required!'
                    },
                    card_number: {
                        required: 'Card number is required!'
                    },
                    card_expiry_month: {
                        required: 'Card expiration month is required!'
                    },
                    card_expiry_year: {
                        required: 'Card expiration year is required!'
                    },
                    card_cvv: {
                        required: 'Card CVV is required!'
                    },
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