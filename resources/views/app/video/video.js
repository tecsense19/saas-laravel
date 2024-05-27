$( document ).ready(function() 
{
    $('.link').hide();
    $('.file').hide();
    
    $("#videoGalleryForm").validate({
        rules: {
            title: {
                required: true,
                remote: {
                    url: routes.video_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        video_gallery_id: function() {
                            // Return the ID value you want to pass
                            return $('#video_gallery_id').val();
                        },
                        title: function() {
                            return $('#title').val();
                        }
                    }
                }
            },
            selected_type: {
                required: true
            },
            selected_link: {
                required: function() {
                    return $('input[name="selected_type"]:checked').val() === 'link';
                },
                url: true
            },
            selected_file: {
                required: function() {
                    return $('input[name="selected_type"]:checked').val() === 'file';
                }
            }
        },
        messages: {
            title: {
                required: "Title is required!",
                remote: "Title already exist!"
            },
            selected_type: {
                required: "Type is required!"
            },
            selected_link: {
                required: "Link is required!",
                url: "Please enter a valid URL"
            },
            selected_file: {
                required: "File is required!"
            }
        },
        submitHandler: function(form) {
            form.submit();
            // Show loading indication
            submitButton = document.getElementById('videoGallerySubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;

            // Remove loading indication
            // submitButton = document.getElementById('qrCodeSubmit');
            // submitButton.removeAttribute('data-kt-indicator');
            // submitButton.disabled = false;
        }
    });

    videoList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageVideoList(url);
    });

    $('.selected-radio').on('change', function(e) {
        e.preventDefault();  // Prevent the event from bubbling up to the body

        var type = $(this).val();
        if(type == 'link')
        {
            $('.link').show();
            $('#selected_link').attr('required', true);
            $('.file').hide();
            $('#selected_file').removeAttr('required');
        }
        else
        {
            $('.link').hide();
            $('#selected_link').removeAttr('required');
            $('.file').show();
            $('#selected_file').attr('required', true);
        }
    });
});

function videoList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.video_list,
        data: { search: search },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageVideoList(get_pagination_url) 
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
    videoList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    videoList();
});

$('body').on('click', '.add_video_gallery, .close_modal', function(e) {
    $('.modal_title').text('Add Video');
    $('#from_code-error').text('');
    $('#to_code-error').text('');
    $('#product_id-error').text('');
    $('#qr_code_id').val('');
    $('#videoGalleryForm')[0].reset();
    $('#inputContainer').html('');
    $("#to_code").removeAttr('min');
    $('#video_gallery_type').val('video');
});

function editVideo(ids, data)
{
    $('#inputContainer').html('');
    $('#videoGalleryForm')[0].reset();
    // $('#variant_name-error').text('');
    $('#kt_modal_create_video_gallery').modal('show');
    $('#video_gallery_id').val(ids);
    $('.modal_title').text('Edit Video');
    $('#video_gallery_type').val('video');

    // Parse the JSON data
    var data = $.parseJSON(data);
    
    $('#title').val(data.title);
    $('#short_description').val(data.short_description);
    $('#full_description').val(data.full_description);
    $('#video_gallery_type').val(data.video_gallery_type);
    $('#selected_type').val(data.file_type);
    if(data.file_type == 'link')
    {
        $('#link').prop('checked', true);
        $('#selected_link').val(data.file_url);
        $('#link').trigger('change');
    }
    else
    {
        $('#file').prop('checked', true);
        $('#file').trigger('change');
    }
}

function deleteVideo(video_gallery_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this video.",
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
                url: routes.video_delete,
                data: { video_gallery_id: video_gallery_id },
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
                            videoList();
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
