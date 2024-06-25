<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">HSN/SAC List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">HSN/SAC Management</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_hsnsac" data-bs-toggle="modal" data-bs-target="#kt_modal_create_hsnsac">Create</a>
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
                                <input type="text" data-kt-subscription-table-filter="search" name="search" id="search" class="form-control form-control-solid w-250px ps-12 me-2" placeholder="Search HSN/SAC" />
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
                    <div class="card-body pt-0 table-responsive hsnsacDataList">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="kt_modal_create_hsnsac" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal_title">Add HSN/SAC</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="POST" class="form" action="{{ url('hsnsac/store') }}" id="hsnsacForm" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="hsnsac_id" id="hsnsac_id" value="" />
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <div class="pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">HSN/SAC Name</label>
                                        <x-text-input id="hsnsac_name" class="block mt-1 w-full" type="text" name="hsnsac_name" :value="old('hsnsac_name')" placeholder="HSN/SAC Name" required />
                                        <x-input-error :messages="$errors->get('hsnsac_name')" class="mt-2" />
                                        <div class="text-muted fs-7">A HSN/SAC name is required and recommended to be unique.</div>
                                    </div>
                                </div>
                                <div class="pt-0">
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">HSN/SAC Value</label>
                                        <x-text-input id="hsnsac_value" class="block mt-1 w-full" type="text" name="hsnsac_value" :value="old('hsnsac_value')" placeholder="HSN/SAC Value" required />
                                        <x-input-error :messages="$errors->get('hsnsac_value')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="hsnsacSubmit" class="btn btn-primary">
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
                hsnsac_list: "{{ url('hsnsac/list') }}",
                hsnsac_delete: "{{ url('hsnsac/delete') }}",
                hsnsac_name_check: "{{ url('hsnsac/check/name') }}"
            };
        </script>
        <script src="{{ route('js', ['folder' => 'app/hsnsac', 'filename' => 'hsnsac']) }}"></script>
    @endsection
</x-tenant-app-layout>
