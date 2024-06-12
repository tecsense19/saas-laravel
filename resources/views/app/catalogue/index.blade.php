<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Our Catalogue List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Our Catalogue</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_catalogue" data-bs-toggle="modal" data-bs-target="#kt_modal_catalogue">Create</a>
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
                                <input type="text" data-kt-subscription-table-filter="search" name="search" id="search" class="form-control form-control-solid w-250px ps-12 me-2" placeholder="Search Videos" />
                                <button type="button" class="btn btn-danger" id="clear-button">Clear</button>
                            </div>
                        </div>
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
        <div class="modal fade" id="kt_modal_catalogue" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal_title">Create Catalogue</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="POST" class="form" action="{{ url('catalogue/store') }}" id="catalogueForm" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="catalogue_id" id="catalogue_id" value="" />
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Catalogue Title</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter Catalogue Title.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="catalogue_title" class="block mt-1 w-full" type="text" name="catalogue_title" :value="old('catalogue_title')" placeholder="Catalogue Title" required />
                                        <x-input-error :messages="$errors->get('file')" class="mt-2" />
                                        <div class="text-muted fs-7">A catalogue title is required and recommended to be unique.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Select File</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Please select a file.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="selected_file" class="block mt-1 w-full" type="file" name="selected_file" :value="old('selected_file')" placeholder="" required accept=".pdf" />
                                        <x-input-error :messages="$errors->get('selected_file')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                </div>
                                <div class="col-md-6 pt-0 displayOldFile">
                                    
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="catalogueSubmit" class="btn btn-primary">
                                    <span class="indicator-label">Save Changes</span>
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
    @section('script')
        <!-- In your Blade template file -->
        <script>
            var routes = {
                catalogue_list: "{{ url('catalogue/list') }}",
                catalogue_delete: "{{ url('catalogue/delete') }}",
                catalogue_name_check: "{{ url('catalogue/check/title') }}"
            };
        </script>
        <script src="{{ url('js', ['folder' => 'app/catalogue', 'filename' => 'catalogue']) }}"></script>
    @endsection
</x-tenant-app-layout>
