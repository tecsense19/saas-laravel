@php
    $profilePic = Auth::user()->profile_pic ? Auth::user()->profile_pic : asset_url('app/media/avatars/300-1.jpg');
@endphp
<x-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Pricing List</h1>
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
                    <a href="{{ route('pricing.create') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @include('flash-message')
                <div class="card" id="kt_pricing">
                    <div class="card-body p-lg-10">
                        <div class="d-flex flex-column">
                            <!-- <div class="mb-13 text-center"> -->
                                <!-- <h1 class="fs-2hx fw-bold">Pricing List</h1> -->
                                <!-- <div class="text-gray-400 fw-semibold fs-5">If you need more info about our pricing, please check
                                    <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                                </div> -->
                            <!-- </div> -->
                            <div class="nav-group nav-group-outline mx-auto mb-5" data-kt-buttons="true">
                                <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
                                <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
                            </div>
                            <div class="row g-10">
                                @if(isset($getAllPlan) && count($getAllPlan) > 0)
                                    @foreach($getAllPlan as $plan)
                                        <div class="col-xl-4">
                                            <div class="d-flex h-100 align-items-center">
                                                <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                    <div class="mb-7 text-center">
                                                        <h1 class="text-dark mb-5 fw-bolder">{{ $plan->plan_title }}</h1>
                                                        <div class="text-gray-400 fw-semibold mb-5">{{ $plan->plan_description }}</div>
                                                        <div class="text-center">
                                                            <span class="mb-2 text-primary">{{ $plan->plan_currency }}</span>
                                                            <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="{{ $plan->plan_month_price }}" data-kt-plan-price-annual="{{ $plan->plan_year_price }}">{{ $plan->plan_month_price }}</span>
                                                            <span class="fs-7 fw-semibold opacity-50">/
                                                            <span data-kt-element="period" data-kt-text-month="{{ $plan->plan_month_text }}" data-kt-text-year="{{ $plan->plan_year_text }}">{{ $plan->plan_month_text }}</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 mb-10">
                                                        @if(isset($plan->getPlanOptions) && count($plan->getPlanOptions) > 0)
                                                            @foreach($plan->getPlanOptions as $opt)
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">{{ $opt->option }}</span>
                                                                    <i class="{{ $opt->status ? 'ki-duotone ki-check-circle fs-1 text-success' : 'ki-duotone ki-cross-circle fs-1' }}">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    </i>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="d-flex flex-wrap">
                                                        <a href="{{ route('pricing.edit', ['id' => encrypt($plan->id)]) }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                                        <a href="#" class="btn btn-sm btn-primary m-1">{{ $plan->button_string }}</a>
                                                        <a href="#" onclick="deletePricing('{{ encrypt($plan->id) }}')" class="btn btn-sm btn-danger m-1">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script type="text/javascript">

            "use strict";

            var KTPricingGeneral = function () {
                var t, // variable to store the element with ID "kt_pricing"
                    n, // variable to store the button for "Monthly" plan
                    e, // variable to store the button for "Annual" plan
                    a = function (n) {
                        // Function to update pricing based on the selected plan
                        [].slice.call(t.querySelectorAll("[data-kt-plan-price-month]")).map(function (t) {
                            var e = t.getAttribute("data-kt-plan-price-month"),
                                a = t.getAttribute("data-kt-plan-price-annual");
                            "month" === n ? t.innerHTML = e : "annual" === n && (t.innerHTML = a)
                        });

                        [].slice.call(t.querySelectorAll("[data-kt-element='period']")).map(function (el) {
                            var monthText = el.getAttribute("data-kt-text-month"),
                                yearText = el.getAttribute("data-kt-text-year");
                            el.innerHTML = "month" === n ? monthText : yearText;
                        });
                    };

                return {
                    init: function () {
                        // Initialization function
                        t = document.querySelector("#kt_pricing"), // Get the element with ID "kt_pricing"
                        n = t.querySelector('[data-kt-plan="month"]'), // Get the button for "Monthly" plan
                        e = t.querySelector('[data-kt-plan="annual"]'), // Get the button for "Annual" plan
                        n.addEventListener("click", function (t) {
                            t.preventDefault(), // Prevent default link behavior
                            n.classList.add("active"), // Add "active" class to "Monthly" button
                            e.classList.remove("active"), // Remove "active" class from "Annual" button
                            a("month") // Update pricing to show monthly prices
                        }),
                        e.addEventListener("click", function (t) {
                            t.preventDefault(), // Prevent default link behavior
                            n.classList.remove("active"), // Remove "active" class from "Monthly" button
                            e.classList.add("active"), // Add "active" class to "Annual" button
                            a("annual") // Update pricing to show annual prices
                        })
                    }
                }
            }();

            // Initialize when DOM content is loaded
            KTUtil.onDOMContentLoaded(function () {
                KTPricingGeneral.init();
            });

            function deletePricing(plan_id)
            {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this Plan.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    confirmButtonColor: '#fe7d22',
                    cancelButtonText: 'No',
                    cancelButtonColor: '#d33',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type:'post',
                            headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                            url: '{{ route("pricing.delete") }}',
                            data: { plan_id: plan_id },
                            success:function(response)
                            {
                                Swal.fire({
                                    title: response.status ? 'Success' : 'Error',
                                    text: response.message,
                                    icon: response.status ? 'success' : 'error',
                                    confirmButtonColor: response.status ? '#fe7d22' : '#d33',
                                    confirmButtonText: 'OK',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                });
                            }
                        });
                    }
                });
            }
        </script>
    @endsection
</x-app-layout>