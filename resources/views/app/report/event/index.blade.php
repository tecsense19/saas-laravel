<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Event Reports</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Report</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @include('flash-message')
                <div class="card">
                    <div class="card-header border-0 pt-6 d-block">
                        <!-- <div class="card-title"> -->
                            <div class="row">
                                <div class="col-md-4 col-12 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="">Month</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the month.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <select name="month_val" id="month_val" aria-label="Select a Month" data-control="select2" data-placeholder="Select a month..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1 w-full select2"  data-hide-search="false" style="width: 100%;">
                                            <option value="">Select Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('month_val')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="">Year</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the year.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>        
                                        <select name="year_val" id="year_val" aria-label="Select a Year" data-control="select2" data-placeholder="Select a year..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1 w-full"  data-hide-search="false" style="width: 100%;">
                                            <option value="">Select Year</option>
                                            @for ($year = $getYear; $year <= date('Y'); $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                        <x-input-error :messages="$errors->get('year_val')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 pt-6">
                                    <button type="button" class="btn btn-danger mt-7" id="clear-button">Clear</button>
                                    <button type="button" id="exportEvent" class="btn btn-primary exportEvent mt-7">
                                        <span class="indicator-label">Export</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </div>
                        <!-- </div> -->
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 table-responsive videoDataList">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <!-- In your Blade template file -->
        <script>
            var routes = {
                event_report_list: "{{ url('event/report/list') }}",
                event_report_export: "{{ url('event/report/export') }}",
                state_list: "{{ url('get/states') }}",
                city_list: "{{ url('get/cities') }}",
            };
        </script>
        <script src="{{ url('js', ['folder' => 'app/report/event', 'filename' => 'eventreport']) }}"></script>
    @endsection
</x-tenant-app-layout>
