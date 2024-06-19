$( document ).ready(function() 
{
    $("#permissionForm").validate({
        rules: {
            title: {
                required: true,
                remote: {
                    url: routes.permissions_check_title,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        permission_id: function() {
                            // Return the ID value you want to pass
                            return $('#permission_id').val();
                        },
                        name: function() {
                            return $('#title').val();
                        }
                    }
                }
            }
        },
        messages: {
            title: {
                required: "Permission title is required!",
                remote: "Permission title already exist!"
            }
        },
        submitHandler: function(form) {
            form.submit();

            submitButton = document.getElementById('permissionSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
        }
    });

    permissionsList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPagePermissionsList(url);
    });
});

function permissionsList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.permissions_list,
        data: { search: search },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPagePermissionsList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    permissionsList();
});

$('body').on('keyup', '#bulk_title', function (e) {
    $('.example_1').text($(this).val() + ' ');
    $('.example_2').text($(this).val() + ' ');
    $('.example_3').text($(this).val() + ' ');
    $('.example_4').text($(this).val() + ' ');
    $('.example_5').text($(this).val() + ' ');
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    permissionsList();
});

function deleteFeedBack(permission_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this permission.",
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
                url: routes.permissions_delete,
                data: { permission_id: permission_id },
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
                            permissionsList();
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
