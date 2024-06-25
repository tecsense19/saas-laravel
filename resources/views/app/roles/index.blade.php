<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Roles List</h1>
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
                        <li class="breadcrumb-item text-muted">Roles</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_role" data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">Create</a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @include('flash-message')
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                    @if(@$getAllRole && count($getAllRole) > 0)
                        @foreach($getAllRole as $role)
                            <div class="col-md-4">
                                <div class="card card-flush h-md-100">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>{{ $role->name }}</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-1">
                                        <div class="fw-bold text-gray-600 mb-5">Total users with this role: {{ $role->users()->count() }}</div>
                                        <div class="d-flex flex-column text-gray-600">
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer flex-wrap pt-0">
                                        <a href="../../demo1/dist/apps/user-management/roles/view.html" class="btn btn-light btn-active-primary my-1 me-2">View</a>
                                        <button type="button" class="btn btn-light btn-active-light-primary my-1 edit_role me-2" data-id="{{ encrypt($role->id) }}" data-name="{{ $role->name }}" data-permission="{{ json_encode($role->permissions) }}">Edit</button>
                                        <a href="javascript:void(0)" onclick="deleteRole('{{ encrypt($role->id) }}')" class="btn btn-light btn-active-danger my-1 me-2">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fw-bold modal_title">Add a Role</h2>
                                <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <div class="modal-body py-lg-10 px-lg-10">
                                <form method="POST" class="form" action="{{ url('roles/store') }}" id="roleForm" enctype='multipart/form-data'>
                                    @csrf
                                    <input type="hidden" name="role_id" id="role_id" value="" />
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                                        <div class="fv-row mb-10">
                                            <label class="fs-5 fw-bold form-label mb-2">
                                            <span class="required">Role name</span>
                                            </label>
                                            <input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" id="role_name" />
                                        </div>
                                        <div class="fv-row">
                                            <label class="fs-5 fw-bold form-label mb-4">Role Permissions</label>
                                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-5 g-xl-9">
                                                <div class="col-md-3">
                                                    <div class="card card-flush h-md-100 bg-secondary">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h5>Administrator Access</h5>
                                                            </div>
                                                        </div>
                                                        <div class="card-body pt-1">
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid py-1 px-2">
                                                                <input class="form-check-input me-4 master-checkbox" type="checkbox" value="" name="check_all" id="kt_roles_select_all" />
                                                                <span class="kt_roles_select_all no-wrap">Select All</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($permissions->groupBy(function($item) {
                                                    return explode(' ', $item->name)[0] . ' management';
                                                }) as $module => $perms)
                                                    <div class="col-md-3">
                                                        <div class="card card-flush h-md-100 bg-secondary">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h5>{{ ucfirst($module) }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-1">
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid py-1 px-2" >
                                                                    <input class="form-check-input me-4 select-all-checkbox" type="checkbox" value="" name="select_all" id="" data-key="{{ $module }}" />
                                                                    <span class=" no-wrap">Select All</span>
                                                                </label>
                                                                @foreach($perms as $permission)
                                                                    @php
                                                                        $keywords = ['Create', 'List', 'Edit', 'Delete', 'View'];
                                                                        $displayName = str_ireplace('menu ', '', $permission->name); // Remove 'Menu'
                                                                        $foundKeyword = false;

                                                                        foreach ($keywords as $keyword) {
                                                                            if (stripos($permission->name, strtolower($keyword)) !== false) {
                                                                                $displayName = ucfirst(strtolower($keyword));
                                                                                $foundKeyword = true;
                                                                                break;
                                                                            }
                                                                        }

                                                                        if (!$foundKeyword) {
                                                                            $displayName = ucwords($displayName); // Capitalize the remaining parts
                                                                        }
                                                                    @endphp
                                                                    <label class="form-check form-check-sm form-check-custom form-check-solid py-1 px-2">
                                                                        <input class="form-check-input me-4 sub-checkbox" type="checkbox" value="{{ $permission->name }}" name="permissions[]" id="{{ $permission->name }}" data-key="{{ $module }}" />
                                                                        <span class="{{ $permission->name }} no-wrap">{{ $displayName }}</span>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center pt-15">
                                        <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary role-submit" data-kt-roles-modal-action="submit">
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
        <!-- In your Blade template file -->
        <script>
            var routes = {
                role_delete: "{{ url('roles/delete') }}",
                role_name_check: "{{ url('roles/check/name') }}",
                role_delete: "{{ url('roles/delete') }}"
            };
        </script>
        <script src="{{ route('js', ['folder' => 'app/roles', 'filename' => 'roles']) }}"></script>
    @endsection
</x-tenant-app-layout>
