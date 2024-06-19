$( document ).ready(function() 
{
    $("#roleForm").validate({
        rules: {
            role_name: {
                required: true,
                remote: {
                    url: routes.role_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        role_id: function() {
                            // Return the ID value you want to pass
                            return $('#role_id').val();
                        },
                        role_name: function() {
                            return $('#role_name').val();
                        }
                    }
                }
            }
        },
        messages: {
            role_name: {
                required: "Role name is required!",
                remote: "Role name already exist!"
            }
        },
        submitHandler: function(form) {
            form.submit();

            submitButton = document.getElementById('permissionSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
        }
    });
    
    // Handle "Select All" checkbox change event
    $('body').on('change', '.master-checkbox', function(e) {
        $('.sub-checkbox').prop('checked', $(this).prop('checked'));
        $('.select-all-checkbox').prop('checked', $(this).prop('checked'));
    });

    // Handle individual checkbox change event
    $('body').on('change', '.sub-checkbox', function(e) {
        checkBoxCheck();

        var dataKey = $(this).data('key');
        var allCheckboxes = $('.sub-checkbox[data-key="' + dataKey + '"]');
        var selectAllCheckbox = $('.select-all-checkbox[data-key="' + dataKey + '"]');

        // Check if all checkboxes are checked
        var allChecked = allCheckboxes.length === allCheckboxes.filter(':checked').length;
        selectAllCheckbox.prop('checked', allChecked);
    });

    $('.select-all-checkbox').change(function() {
        var dataKey = $(this).data('key');
        var checkboxes = $('.sub-checkbox[data-key="' + dataKey + '"]');
        checkboxes.prop('checked', $(this).prop('checked'));

        checkBoxCheck();
    });

    
    $('body').on('click', '.add_role, .close_modal', function(e) {
        $('.modal_title').text('Add a Role');
        $('#role_id').val('');
        $('#roleForm')[0].reset();
        $('#role_name-error').text('');
    });
    
    $('body').on('click', '.edit_role', function(e) {
        $('.modal_title').text('Edit a Role');
        $('#role_id').val('');
        $('#roleForm')[0].reset();
        $('#role_name-error').text('');
        $('#kt_modal_add_role').modal('show');

        $('#role_name').val($(this).data('name'));
        $('#role_id').val($(this).data('id'));

        var permissions = $(this).data('permission');

        var permissionNames = $.map(permissions, function(permission) {
            return permission.name;
        });

        $('.sub-checkbox').each(function() {
            var checkboxValue = $(this).val();
    
            // Check if the checkbox value exists in selectedPermissions array
            if (permissionNames.includes(checkboxValue)) {
                $(this).prop('checked', true);
            }

            var dataKey = $(this).data('key');
            var allCheckboxes = $('.sub-checkbox[data-key="' + dataKey + '"]');
            var selectAllCheckbox = $('.select-all-checkbox[data-key="' + dataKey + '"]');

            // Check if all checkboxes are checked
            var allChecked = allCheckboxes.length === allCheckboxes.filter(':checked').length;
            selectAllCheckbox.prop('checked', allChecked);
        });

        checkBoxCheck();
    });

    checkBoxCheck();
});

function checkBoxCheck()
{
    var allChecked = true;
    $('.sub-checkbox').each(function() {
        if (!$(this).prop('checked')) {
            allChecked = false;
        }
    });
    $('.master-checkbox').prop('checked', allChecked);
}

function deleteRole(role_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this role.",
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
            // Show loading popup
            Swal.fire({
                title: 'Please wait',
                html: 'Loading...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            $.ajax({
                type:'post',
                headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
                url: routes.role_delete,
                data: { role_id: role_id },
                success:function(response)
                {
                    Swal.close();
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
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred while processing your request.',
                        icon: 'error',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                }
            });
        }
    });
}
