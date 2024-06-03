$( document ).ready(function() 
{    
    $("#catalogueForm").validate({
        rules: {
            catalogue_title: {
                required: true,
                remote: {
                    url: routes.catalogue_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        catalogue_id: function() {
                            // Return the ID value you want to pass
                            return $('#catalogue_id').val();
                        },
                        catalogue_title: function() {
                            return $('#catalogue_title').val();
                        }
                    }
                }
            },
            selected_file: {
                required: true
            }
        },
        messages: {
            catalogue_title: {
                required: "Catalogue title is required!",
                remote: "Title already exist!"
            },
            selected_file: {
                required: "File is required!"
            }
        },
        submitHandler: function(form) {
            form.submit();
            // Show loading indication
            submitButton = document.getElementById('catalogueSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;

            // Remove loading indication
            // submitButton = document.getElementById('qrCodeSubmit');
            // submitButton.removeAttribute('data-kt-indicator');
            // submitButton.disabled = false;
        }
    });

    catalogueList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageCatalogueList(url);
    });
});

function catalogueList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.catalogue_list,
        data: { search: search },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageCatalogueList(get_pagination_url) 
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
    catalogueList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    catalogueList();
});

$('body').on('click', '.add_catalogue, .close_modal', function(e) {
    $('.modal_title').text('Create Catalogue');
    $('#catalogue_id').val('');
    $('#catalogueForm')[0].reset();
    $('.displayOldFile').html('');
});

function editCatalogue(ids, data)
{
    $('#catalogueForm')[0].reset();
    // $('#variant_name-error').text('');
    $('#kt_modal_catalogue').modal('show');
    $('#catalogue_id').val(ids);
    $('.modal_title').text('Edit Catalogue');

    // Parse the JSON data
    var data = $.parseJSON(data);
    
    $('#catalogue_title').val(data.catalogue_title);
    if(data.file_path)
    {
        $('.displayOldFile').html('<iframe src="'+data.file_path+'" style="max-width:200px"></iframe>');
    }
}

function deleteCatalogue(catalogue_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this catalogue.",
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
                url: routes.catalogue_delete,
                data: { catalogue_id: catalogue_id },
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
                            catalogueList();
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
