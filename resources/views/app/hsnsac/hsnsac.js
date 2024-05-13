$( document ).ready(function() 
{
    $("#hsnsacForm").validate({
        rules: {
            hsnsac_name: {
                required: true,
                remote: {
                    url: routes.hsnsac_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        hsnsac_id: function() {
                            // Return the ID value you want to pass
                            return $('#hsnsac_id').val();
                        },
                        hsnsac_name: function() {
                            return $('#hsnsac_name').val();
                        }
                    }
                }
            },
            hsnsac_value: {
                required: true,
            }
        },
        messages: {
            hsnsac_name: {
                required: "HSN/SAC name is required!",
                remote: "HSN/SAC name already exist!"
            },
            hsnsac_value: {
                required: "HSN/SAC value is required!",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    hsnsacList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageHsnsacList(url);
    });
});

function hsnsacList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.hsnsac_list,
        data: { search: search },
        success:function(data)
        {
            $('.hsnsacDataList').html(data);
        }
    });
}

function getPerPageHsnsacList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.hsnsacDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    hsnsacList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    hsnsacList();
});

$('body').on('click', '.add_hsnsac, .close_modal', function(e) {
    $('.modal_title').text('Add HSN/SAC');
    $('#hsnsac_name-error').text('');
    $('#hsnsac_id').val('');
    $('#hsnsacForm')[0].reset();
    $('#inputContainer').html('');
});

function editHsnsac(cateName, cateValue, cateId)
{
    $('#inputContainer').html('');
    $('#hsnsacForm')[0].reset();
    $('#hsnsac_name-error').text('');
    $('#kt_modal_create_hsnsac').modal('show');
    $('#hsnsac_name').val(cateName);
    $('#hsnsac_value').val(cateValue);
    $('#hsnsac_id').val(cateId);
    $('.modal_title').text('Edit HSN/SAC');
}

function deleteHsnsac(hsnsac_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this HSN/SAC.",
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
                url: routes.hsnsac_delete,
                data: { hsnsac_id: hsnsac_id },
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
                            hsnsacList();
                        }
                    });
                }
            });
        }
    });
}