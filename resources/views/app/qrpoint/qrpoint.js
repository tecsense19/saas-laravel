$( document ).ready(function() 
{
    $('#qr_status').select2();

    $("#qrPointForm").validate({
        rules: {
            qr_amount: {
                required: true,
                remote: {
                    url: routes.qrpoint_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        qr_id: function() {
                            // Return the ID value you want to pass
                            return $('#qr_id').val();
                        },
                        qr_amount: function() {
                            return $('#qr_amount').val();
                        }
                    }
                }
            },
            qr_status: {
                required: true,
            }
        },
        messages: {
            qr_amount: {
                required: "QR Point is required!",
                remote: "QR Point already exist!"
            },
            qr_status: {
                required: "QR Status is required!",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    qrPointList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageQrPointList(url);
    });
});

function qrPointList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.qrpoint_list,
        data: { search: search },
        success:function(data)
        {
            $('.qrPointDataList').html(data);
        }
    });
}

function getPerPageQrPointList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.qrPointDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    qrPointList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    qrPointList();
});

$('body').on('click', '.add_qrpoint, .close_modal', function(e) {
    $('.modal_title').text('Add QR Point');
    $('#qr_amount-error').text('');
    $('#qr_status-error').text('');
    $('#qr_id').val('');
    $('#qrPointForm')[0].reset();
    $('#inputContainer').html('');
});

function editQRPoint(qrAmount, qrStatus, qrId)
{
    $('#inputContainer').html('');
    $('#qrPointForm')[0].reset();
    $('#qr_amount-error').text('');
    $('#qr_status-error').text('');
    $('#kt_modal_create_qrpoint').modal('show');
    $('#qr_id').val(qrId);
    $('#qr_amount').val(qrAmount);
    $('#qr_status').val(qrStatus).trigger('change');
    $('.modal_title').text('Edit QR Point');
}

function deleteQRPoint(qr_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this QR Point.",
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
                url: routes.qrpoint_delete,
                data: { qr_id: qr_id },
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
                            qrPointList();
                        }
                    });
                }
            });
        }
    });
}