<x-tenant-app-layout>
    <style>
        .select2-search--dropdown.select2-search--hide {
            display: block;
        }
        .select2-container--open .select2-dropdown--above {
            border-bottom: 1px solid #aaa;
        }
    </style>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Events List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Event Management</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary add_event" data-bs-toggle="modal" data-bs-target="#kt_modal_create_event">Create</a>
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
                                <input type="text" data-kt-subscription-table-filter="search" name="search" id="search" class="form-control form-control-solid w-250px ps-12 me-2" placeholder="Search Events" />
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
                    <div class="card-body pt-0 table-responsive eventDataList">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="kt_modal_create_event" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal_title">Add Event</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <div class="modal-body py-lg-10 px-lg-10">
                        <form method="POST" class="form" action="{{ url('events/store') }}" id="eventForm" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="" />
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <div class="col-md-6 col-xl-12 pt-0">
                                    <label class="fs-6 fw-semibold mb-3">
                                        <span>Event Image</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <div class="mt-1">
                                        <style>.image-input-placeholder { background-image: url('{{ asset_url("app/media/svg/files/blank-image.svg") }}' ) } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset_url("app/media/svg/files/blank-image-dark.svg") }}'); }</style>
                                        <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
                                            <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            </i>
                                            <input type="file" name="event_image" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            </i>
                                            </span>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            </i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Event Title</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the event title.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="event_title" class="block mt-1 w-full" type="text" name="event_title" :value="old('event_title')" placeholder="Event Title" required />
                                        <x-input-error :messages="$errors->get('event_title')" class="mt-2" />
                                        <div class="text-muted fs-7">A event title is required and recommended to be unique.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Sort Description</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Evnter the sort description.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="sort_description" class="block mt-1 w-full" type="text" name="sort_description" :value="old('sort_description')" placeholder="Sort Description" required />
                                        <x-input-error :messages="$errors->get('sort_description')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-12 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span>Description</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the description.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <textarea id="description" class="form-control form-control-solid block mt-1 w-full" type="text" name="description" :value="old('description')" placeholder="Description"></textarea>
                                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-12 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Event Location</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter the event location.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="event_location" class="block mt-1 w-full" type="text" name="event_location" :value="old('event_location')" placeholder="Event Location" required />
                                        <x-input-error :messages="$errors->get('event_location')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">State</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the state.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <select name="state_id" id="state_id" aria-label="Select a State" data-control="select2" data-placeholder="Select a state..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1 w-full"  data-hide-search="true" style="width: 100%;">
                                            <option value="">Select State</option>
                                        </select>
                                        <label id="state_id-error" class="error" for="state_id">City is required!</label>
                                        <x-input-error :messages="$errors->get('state_id')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">City</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the city.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>        
                                        <select name="city_id" id="city_id" aria-label="Select a City" data-control="select2" data-placeholder="Select a city..." class="form-control form-select form-select-solid form-select-lg fw-semibold mt-1 w-full"  data-hide-search="true" style="width: 100%;">
                                            <option value="">Select City</option>
                                        </select>
                                        <label id="city_id-error" class="error" for="city_id">City is required!</label>
                                        <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Event Date</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the event date.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="event_date" class="block mt-1 w-full" type="text" name="event_date" :value="old('event_date')" placeholder="DD-MM-YYYY" required />
                                        <x-input-error :messages="$errors->get('event_date')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 pt-0">
                                    <div class="mb-5 fv-row">
                                        <label class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Event Time</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the event time.">
                                                <i class="ki-duotone ki-information fs-7">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <x-text-input id="event_time" class="block mt-1 w-full" type="text" name="event_time" :value="old('event_time')" placeholder="HH:II" required />
                                        <x-input-error :messages="$errors->get('event_time')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5 close_modal" type="reset" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="" class="btn btn-primary">
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
                event_list: "{{ url('events/list') }}",
                event_delete: "{{ url('events/delete') }}",
                event_name_check: "{{ url('check/event/name') }}",
                state_list: "{{ url('get/states') }}",
                city_list: "{{ url('get/cities') }}" 
            };
        </script>
        <script src="{{ url('js', ['folder' => 'app/event', 'filename' => 'event']) }}"></script>
    @endsection
</x-tenant-app-layout>
