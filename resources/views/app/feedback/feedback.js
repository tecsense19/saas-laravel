$( document ).ready(function() 
{
    feedbackList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageFeedbackList(url);
    });
});

function feedbackList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.feedback_list,
        data: { search: search },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageFeedbackList(get_pagination_url) 
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
    feedbackList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    feedbackList();
});

function deleteFeedBack(feedback_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this feedback.",
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
                url: routes.feedback_delete,
                data: { feedback_id: feedback_id },
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
                            feedbackList();
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
