<x-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Companies List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Companies</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <div class="m-0">
                        <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>Filter</a>
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d51202371f">
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <div class="separator border-gray-200"></div>
                            <div class="px-7 py-5">
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Status:</label>
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641d51202371f" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <div class="d-flex">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('tenants.create') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @include('flash-message')
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Companies" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>Filter</button>
                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="px-7 py-5" data-kt-subscription-table-filter="form">
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Month:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="month" data-hide-search="true">
                                                <option></option>
                                                <option value="jan">January</option>
                                                <option value="feb">February</option>
                                                <option value="mar">March</option>
                                                <option value="apr">April</option>
                                                <option value="may">May</option>
                                                <option value="jun">June</option>
                                                <option value="jul">July</option>
                                                <option value="aug">August</option>
                                                <option value="sep">September</option>
                                                <option value="oct">October</option>
                                                <option value="nov">November</option>
                                                <option value="dec">December</option>
                                            </select>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Status:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="status" data-hide-search="true">
                                                <option></option>
                                                <option value="Active">Active</option>
                                                <option value="Expiring">Expiring</option>
                                                <option value="Suspended">Suspended</option>
                                            </select>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Billing Method:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="billing" data-hide-search="true">
                                                <option></option>
                                                <option value="Auto-debit">Auto-debit</option>
                                                <option value="Manual - Credit Card">Manual - Credit Card</option>
                                                <option value="Manual - Cash">Manual - Cash</option>
                                                <option value="Manual - Paypal">Manual - Paypal</option>
                                            </select>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">Product:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-subscription-table-filter="product" data-hide-search="true">
                                                <option></option>
                                                <option value="Basic">Basic</option>
                                                <option value="Basic Bundle">Basic Bundle</option>
                                                <option value="Teams">Teams</option>
                                                <option value="Teams Bundle">Teams Bundle</option>
                                                <option value="Enterprise">Enterprise</option>
                                                <option value=" Enterprise Bundle">Enterprise Bundle</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="reset">Reset</button>
                                            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="filter">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_subscriptions_export_modal">
                                <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>Export</button>
                                <!-- <a href="../../demo1/dist/apps/subscriptions/add.html" class="btn btn-primary">
                                <i class="ki-duotone ki-plus fs-2"></i>Add Subscription</a> -->
                            </div>
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 tenantDataList">
                        
                    </div>
                </div>
                <div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fw-bold">Export Subscriptions</h2>
                                <div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <form id="kt_subscriptions_export_form" class="form" action="#">
                                    <div class="fv-row mb-10">
                                        <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                                        <select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
                                            <option value="excell">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                                        <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                                    </div>
                                    <div class="row fv-row mb-15">
                                        <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                                        <div class="d-flex flex-column">
                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">All</span>
                                            </label>
                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">Visa</span>
                                            </label>
                                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
                                            </label>
                                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-semibold">American Express</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="reset" id="kt_subscriptions_export_cancel" class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
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
                tenantList();

                $('body').on('click', '.pagination a', function(e) 
                {
                    e.preventDefault();

                    var url = $(this).attr('href');
                    getPerPageTenantList(url);
                });
            });

            function tenantList()
            {
                var search = $('#search').val();
                $.ajax({
                    type:'post',
                    headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                    url:'{{ route("tenants.list") }}',
                    data: { search: search },
                    success:function(data)
                    {
                        $('.tenantDataList').html(data);
                    }
                });
            }

            function getPerPageTenantList(get_pagination_url) 
            {
                var search = $('#search').val();
                $.ajax({
                    type:'post',
                    headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                    url:get_pagination_url,
                    data: { search: search },
                    success:function(data)
                    {
                        $('.tenantDataList').html(data);
                    }
                });   
            }

            $('body').on('keyup', '#search', function (e) 
            {
                tenantList();
            });

            $('body').on('click', '#clear-button', function(e) {
                $('#search').val('');
                tenantList();
            });

            function deleteCompany(tenantId)
            {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this company including databases and subdomains.",
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
                            url:'{{ route("tenants.delete") }}',
                            data: { tenant_id: tenantId },
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
                                        tenantList();
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
