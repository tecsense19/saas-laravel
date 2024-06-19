<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Permissions List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Role and Permissions</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Permissions</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_permission" data-bs-toggle="modal" data-bs-target="#kt_modal_add_permission">Create</a>
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_bulk_permission" data-bs-toggle="modal" data-bs-target="#kt_modal_add_bulk_permission">Crude Permission Create</a>
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
                                <input type="text" data-kt-subscription-table-filter="search" name="search" id="search" class="form-control form-control-solid w-250px ps-12 me-2" placeholder="Search Permissions" />
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
        <div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal_title">Add Permission</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="POST" class="form" action="{{ url('permissions/store') }}" id="permissionForm" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="permission_id" id="permission_id" value="" />
                            <div class="pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Title</label>
                                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" placeholder="Title" required />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                    <div class="text-muted fs-7">A title is required and recommended to be unique.</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6" bis_skin_checked="1"></div>
                            <div class="d-flex justify-content-end">
                                <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="permissionSubmit" class="btn btn-primary">
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
        <div class="modal fade" id="kt_modal_add_bulk_permission" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal_title">Add Bulk Permission</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="POST" class="form" action="{{ url('permissions/store/bulk') }}" id="permissionForm" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="permission_id" id="permission_id" value="" />
                            <div class="pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Title</label>
                                    <x-text-input id="bulk_title" class="block mt-1 w-full" type="text" name="bulk_title" :value="old('bulk_title')" placeholder="Title" required />
                                    <x-input-error :messages="$errors->get('bulk_title')" class="mt-2" />
                                    <div class="text-muted fs-7">A title is required and recommended to be unique.</div>
                                </div>
                            </div>
                            <div class="pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Example</label>
                                    <div class="text-muted fs-7">
                                        <span class="text-decoration-underline example_1">_________</span>Create </br>
                                        <span class="text-decoration-underline example_2">_________</span>List </br>
                                        <span class="text-decoration-underline example_3">_________</span>Edit </br>
                                        <span class="text-decoration-underline example_4">_________</span>Delete </br>
                                        <span class="text-decoration-underline example_5">_________</span>View </br>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6" bis_skin_checked="1"></div>
                            <div class="d-flex justify-content-end">
                                <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="permissionSubmit" class="btn btn-primary">
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
                permissions_list: "{{ url('permissions/list') }}",
                permissions_delete: "{{ url('permissions/delete') }}",
                permissions_check_title: "{{ url('permissions/check/title') }}"
            };
        </script>
        <script src="{{ url('js', ['folder' => 'app/permissions', 'filename' => 'permissions']) }}"></script>
    @endsection
</x-tenant-app-layout>
