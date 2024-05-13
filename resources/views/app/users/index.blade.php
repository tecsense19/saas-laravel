<x-tenant-app-layout>
<div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Users List</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Users</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ route('users.create') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
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
                                <input type="text" data-kt-subscription-table-filter="search" name="search" id="search" class="form-control form-control-solid w-250px ps-12 me-2" placeholder="Search Users" />
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
                    <div class="card-body pt-0 table-responsive userDataList">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script type="text/javascript">
            $( document ).ready(function() 
            {
                usersList();

                $('body').on('click', '.pagination a', function(e) 
                {
                    e.preventDefault();

                    var url = $(this).attr('href');
                    getPerPageUsersList(url);
                });
            });

            function usersList()
            {
                var search = $('#search').val();
                $.ajax({
                    type:'post',
                    headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                    url:'{{ route("users.list") }}',
                    data: { search: search },
                    success:function(data)
                    {
                        $('.userDataList').html(data);
                    }
                });
            }

            function getPerPageUsersList(get_pagination_url) 
            {
                var search = $('#search').val();
                $.ajax({
                    type:'post',
                    headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                    url:get_pagination_url,
                    data: { search: search },
                    success:function(data)
                    {
                        $('.userDataList').html(data);
                    }
                });
            }

            $('body').on('keyup', '#search', function (e) 
            {
                usersList();
            });

            $('body').on('click', '#clear-button', function(e) {
                $('#search').val('');
                usersList();
            });
            
            function deleteUser(user_id)
            {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this user.",
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
                            url:'{{ route("users.delete") }}',
                            data: { user_id: user_id },
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
                                        usersList();
                                    }
                                });
                            }
                        });
                    }
                });
            }
        </script>
    @endsection
</x-tenant-app-layout>
