<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Language String</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Language Master</li>
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
                        <div class="col-md-4 col-12 pt-0">
                            <div class="mb-5 fv-row">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="">App Master Language</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select Master Language.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <select name="app_master_lang" id="app_master_lang" aria-label="Select a App Language" data-control="select2" data-placeholder="Select App Language..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1 w-full select2"  data-hide-search="true" style="width: 100%;" data-allow-clear="true" multiple="multiple">
                                    <option value="">Select App Language</option>
                                    @php
                                        $selectedLang = json_decode($getSelectedLang->lang_value);
                                    @endphp
                                    @foreach($getAllLang as $lang)
                                        @php
                                            $filteredArray = array_filter($selectedLang, function ($object) use ($lang) {
                                                return $object->value === $lang->code;
                                            });
                                            if (!empty($filteredArray)) {
                                        @endphp
                                            <option value="{{ $lang->code }}" selected>{{ $lang->name }}</option>
                                        @php
                                            } else {
                                        @endphp
                                            <option value="{{ $lang->code }}">{{ $lang->name }}</option>
                                        @php
                                            }
                                        @endphp
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <form method="POST" class="form" action="{{ url('language/search') }}" id="eventForm" enctype='multipart/form-data'>
                        @csrf
                            <div class="row">
                                @if(isset($getSelectedLang) > 0)
                                    @foreach(json_decode($getSelectedLang->lang_value) as $lang)
                                        <div class="col-md-4 col-12 pt-0">
                                            <div class="mb-5 fv-row">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="">{{ $lang->label }}</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter text.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <input type="text" data-kt-subscription-table-filter="search" name="lang[{{ $lang->value }}]" id="{{ $lang->value }}" class="form-control form-control-solid ps-12 me-2" placeholder="Search {{ $lang->label }}" />
                                                <x-input-error :messages="$errors->get('month_val')" class="mt-2" />
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="col-md-4 col-12 pt-6">
                                    <button type="button" class="btn btn-danger mt-6" id="clear-button">Clear</button>
                                    <button type="submit" id="langSearch" class="btn btn-primary mt-6">
                                        <span class="indicator-label">Search</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </div>
                        </form>
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
                    <div class="card-body pt-0 table-responsive languageDataList">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <!-- In your Blade template file -->
        <script>
            var routes = {
                language_list: "{{ url('language/list') }}",
                master_lang_save: "{{ url('language/master/store') }}"
            };
        </script>
        <script src="{{ url('js', ['folder' => 'app/language', 'filename' => 'language']) }}"></script>
    @endsection
</x-tenant-app-layout>
