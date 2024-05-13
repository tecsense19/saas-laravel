$( document ).ready(function() 
{
    $('#product_id').select2();

    $("#qrCodeForm").validate({
        rules: {
            product_id: {
                required: true,
            },
            from_code: {
                required: true,
            },
            to_code: {
                required: true,
            }
        },
        messages: {
            product_id: {
                required: "Product is required!",
            },
            from_code: {
                required: "From is required!",
            },
            to_code: {
                required: "To is required!",
            }
        },
        submitHandler: function(form) {
            form.submit();
            // Show loading indication
            submitButton = document.getElementById('qrCodeSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;

            // Remove loading indication
            // submitButton = document.getElementById('qrCodeSubmit');
            // submitButton.removeAttribute('data-kt-indicator');
            // submitButton.disabled = false;
        }
    });

    qrCodeList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageQrCodeList(url);
    });

    $('body').on('change', '#product_id', function(e) 
    {
        e.preventDefault();

        var selectedProId = $(this).val();

        $.ajax({
            type:'post',
            headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
            url: routes.check_last_id,
            data: { product_id: selectedProId },
            success:function(response)
            {
                $('#from_code').val(response.data);
                $('#to_code').val('');
                $("#from_code").prop('readonly', true);
                $('#to_code').prop('min', (response.data + 1));
            }
        });
    });
});

function qrCodeList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.qrcode_list,
        data: { search: search },
        success:function(data)
        {
            $('.qrCodeDataList').html(data);
        }
    });
}

function getPerPageQrCodeList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.qrCodeDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    qrCodeList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    qrCodeList();
});

$('body').on('click', '.add_qrcode, .close_modal', function(e) {
    $('.modal_title').text('Generate QR Code');
    $('#from_code-error').text('');
    $('#to_code-error').text('');
    $('#product_id-error').text('');
    $('#qr_code_id').val('');
    $('#qrCodeForm')[0].reset();
    $('#inputContainer').html('');
    $("#to_code").removeAttr('min');
});

function deleteQRCode(product_id, banch_code) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this QR Code Slot.",
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
                url: routes.qrcode_delete,
                data: { product_id: product_id, banch_code: banch_code },
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
                            qrCodeList();
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

function downloadQRCode(product_id, banch_code) {
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.qrcode_download,
        data: { product_id: product_id, banch_code: banch_code },
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
                    const downloadUrl = 'http://demo.localhost:8000/storage/app/' + response.data.zipFileName;
                    alert(downloadUrl)
                    const downloadLink = document.createElement('a');
                    downloadLink.href = downloadUrl;
                    downloadLink.download = response.data.zipFileName;
                    document.body.appendChild(downloadLink);

                    // Programmatically click the link to trigger the download
                    downloadLink.click();

                    // Clean up: remove the link from the document
                    document.body.removeChild(downloadLink);
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

function createZip(imageUrls) {
    var zip = new JSZip();
    var promises = [];

    function getFileNameFromUrl(url) {
        return url.substring(url.lastIndexOf('/') + 1);
    }

    imageUrls.forEach(function(imageUrl, index) {
        var fileName = getFileNameFromUrl(imageUrl);
        var promise = fetch(imageUrl)
            .then(response => response.blob())
            .then(blob => {
                zip.file(fileName, blob, { binary: true });
            })
            .catch(error => console.error('Failed to fetch image:', error));

        promises.push(promise);
    });

    Promise.all(promises).then(function() {
        zip.generateAsync({ type: 'blob' }).then(function(content) {
            saveAs(content, 'images.zip');
        });
    });
}
