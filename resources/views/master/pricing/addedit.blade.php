@php
    $profilePic = Auth::user()->profile_pic ? Auth::user()->profile_pic : asset_url('app/media/avatars/300-1.jpg');
    $headerText = isset($getPlan) ? 'Edit Pricing' : 'Create New Pricing';
    $plan_id = isset($getPlan) ? $getPlan->id : '';
    $plan_title = isset($getPlan) ? $getPlan->plan_title : old('plan_title');
    $plan_description = isset($getPlan) ? $getPlan->plan_description : old('plan_description');
    $plan_currency = isset($getPlan) ? $getPlan->plan_currency :   old('plan_currency');
    $plan_month_price = isset($getPlan) ? $getPlan->plan_month_price : old('plan_month_price');
    $plan_year_price = isset($getPlan) ? $getPlan->plan_year_price :   old('plan_year_price');
    $plan_month_text = isset($getPlan) ? $getPlan->plan_month_text :   old('plan_month_text');
    $plan_year_text = isset($getPlan) ? $getPlan->plan_year_text : old('plan_year_text');
    $plan_status = isset($getPlan) ? $getPlan->plan_status :   old('plan_status');
    $button_string = isset($getPlan) ? $getPlan->button_string :   old('button_string');
@endphp
<x-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $headerText }}</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Pricing</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @include('flash-message')
                <div class="card" id="kt_pricing">
                    <div class="card-body p-lg-17">
                        <div class="d-flex flex-column">
                            <form method="post" action="{{ route('pricing.store') }}" id="pricingForm" class="space-y-6 mb-5" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="plan_id" value="{{ $plan_id }}" />
                                <div class="row g-10">
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-4">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Title</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the title.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_title" class="block mt-1 w-full" type="text" name="plan_title" :value="$plan_title" placeholder="Plan Title" required />
                                                <x-input-error :messages="$errors->get('plan_title')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Currency</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_currency" class="block mt-1 w-full" type="text" name="plan_currency" :value="$plan_currency" placeholder="Plan Currency" required />
                                                <x-input-error :messages="$errors->get('plan_currency')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Month Price</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_month_price" class="block mt-1 w-full" type="text" name="plan_month_price" :value="$plan_month_price" placeholder="Plan Month Price" required />
                                                <x-input-error :messages="$errors->get('plan_month_price')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Year Price</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_year_price" class="block mt-1 w-full" type="text" name="plan_year_price" :value="$plan_year_price" placeholder="Plan Year Price" required />
                                                <x-input-error :messages="$errors->get('plan_year_price')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Month Text</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_month_text" class="block mt-1 w-full" type="text" name="plan_month_text" :value="$plan_month_text" placeholder="Plan Month Text" required />
                                                <x-input-error :messages="$errors->get('plan_month_text')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Year Text</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="plan_year_text" class="block mt-1 w-full" type="text" name="plan_year_text" :value="$plan_year_text" placeholder="Plan Year Text" required />
                                                <x-input-error :messages="$errors->get('plan_year_text')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Status</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select name="plan_status" id="plan_status" aria-label="Select a Status" data-control="select2" data-placeholder="Select a status..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1"  data-hide-search="true" required>
                                                    <option value="">Select Status</option>
                                                    <option value="1" @if($plan_status == '1') selected @endif>Active</option>
                                                    <option value="0" @if($plan_status == '0') selected @endif>InActive</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('plan_status')" class="mt-2" />
                                                <label id="plan_status-error" class="error" for="plan_status"></label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Button String</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="button_string" class="block mt-1 w-full" type="text" name="button_string" :value="$button_string" placeholder="Button String" required />
                                                <x-input-error :messages="$errors->get('button_string')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Plan Description</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the full name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <textarea id="plan_description" class="form-control form-control-lg form-control-solid block mt-1 w-full" type="text" name="plan_description" rows="5" placeholder="Plan Description" required>{{ $plan_description }}</textarea>
                                                <x-input-error :messages="$errors->get('plan_description')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_advanced">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <div data-repeater-list="kt_docs_repeater_advanced">
                                                    @if(isset($getPlan->getPlanOptions) && count($getPlan->getPlanOptions) > 0)
                                                        @foreach($getPlan->getPlanOptions as $opt)
                                                            <div data-repeater-item>
                                                                <div class="form-group row mb-5">
                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Option:</label>
                                                                        <input type="text" class="form-control" name="option" data-kt-repeater="text" placeholder="Option" value="{{ $opt->option }}" />
                                                                        <input type="hidden" class="form-control" name="option_id" data-kt-repeater="text" placeholder="Option" value="{{ $opt->id }}" />
                                                                    </div>
                                                                    <div class="col-md-3 form-check form-check-sm form-check-custom form-check-solid">
                                                                        <label class="form-label me-2 mb-0">Status:</label>
                                                                        <input class="form-check-input" type="checkbox" name="status" data-kt-repeater="checkbox" value="yes" @if($opt->status) checked @endif>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <a href="javascript:;" data-repeater-delete class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9">
                                                                            <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item>
                                                            <div class="form-group row mb-5">
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Option:</label>
                                                                    <input type="text" class="form-control" name="option" data-kt-repeater="text" placeholder="Option" />
                                                                    <input type="hidden" class="form-control" name="option_id" data-kt-repeater="text" placeholder="Option" />
                                                                </div>
                                                                <div class="col-md-3 form-check form-check-sm form-check-custom form-check-solid">
                                                                    <label class="form-label me-2 mb-0">Status:</label>
                                                                    <input class="form-check-input" type="checkbox" name="status" data-kt-repeater="checkbox" value="yes">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9">
                                                                        <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--end::Form group-->

                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <a href="javascript:;" data-repeater-create class="btn btn-flex btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    Add
                                                </a>
                                            </div>
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="separator"></div>
                                    <div class="d-flex justify-content-end">
                                        <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" id="pricingSubmit" class="btn btn-primary">
                                            <span class="indicator-label">Save Changes</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script type="text/javascript">

            $("#pricingForm").validate({
                rules: {
                    plan_title: {
                        required: true,
                    },
                    plan_description: {
                        required: true,
                    },
                    plan_currency: {
                        required: true,
                    },
                    plan_month_price: {
                        required: true,
                    },
                    plan_year_price: {
                        required: true,
                    },
                    plan_month_text: {
                        required: true,
                    },
                    plan_year_text: {
                        required: true,
                    },
                    plan_status: {
                        required: true,
                    },
                    button_string: {
                        required: true,
                    },
                },
                messages: {
                    plan_title: {
                        required: 'Plan title is required!',
                    },
                    plan_description: {
                        required: 'Plan description is required!',
                    },
                    plan_currency: {
                        required: 'Plan currency is required!',
                    },
                    plan_month_price: {
                        required: 'Plan month price is required!',
                    },
                    plan_year_price: {
                        required: 'Plan year price is required!',
                    },
                    plan_month_text: {
                        required: 'Plan month text is required!',
                    },
                    plan_year_text: {
                        required: 'Plan year text is required!',
                    },
                    plan_status: {
                        required: 'Plan status is required!',
                    },
                    button_string: {
                        required: 'Button string is required!',
                    },
                },
                submitHandler: function(form) {
                    form.submit();

                    submitButton = document.getElementById('categorySubmit');
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;
                }
            });

            $('body').on('change', '#plan_status', function(e) 
            {
                e.preventDefault();

                $('#plan_status-error').text('')
            });

            $('#kt_docs_repeater_advanced').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function () {
                    $(this).slideDown();

                    // Re-init select2
                    // $(this).find('[data-kt-repeater="select2"]').select2();

                    // Re-init flatpickr
                    // $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                    // Re-init tagify
                    new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
                },

                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function(){
                    // Init select2
                    // $('[data-kt-repeater="select2"]').select2();

                    // Init flatpickr
                    // $('[data-kt-repeater="datepicker"]').flatpickr();

                    // Init Tagify
                    new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
                }
            });
        </script>
    @endsection
</x-app-layout>