$( document ).ready(function() 
{
    $('#app_master_lang').select2();

    languageDataList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageLanguageDataList(url);
    });

    $('#app_master_lang').on('change', function() {
        var app_master_lang = $('#app_master_lang').val();
        $.ajax({
            type:'post',
            headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
            url: routes.master_lang_save,
            data: { app_master_lang: app_master_lang },
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
                        languageDataList();
                        window.location.reload();
                    }
                });
            }
        });
    });
});

function languageDataList()
{
    var month_val = $('#month_val').val();
    var year_val = $('#year_val').val();

    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.language_list,
        data: { month_val: month_val, year_val: year_val },
        success:function(data)
        {
            $('.languageDataList').html(data);
        }
    });
}

function getPerPageLanguageDataList(get_pagination_url) 
{
    var month_val = $('#month_val').val();
    var year_val = $('#year_val').val();

    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { month_val: month_val, year_val: year_val },
        success:function(data)
        {
            $('.languageDataList').html(data);
        }
    });
}

$('body').on('click', '#clear-button', function(e) {
    $('#month_val').val('');
    $('#year_val').val('');
    $('#month_val').trigger('change');
    $('#year_val').trigger('change');
});
