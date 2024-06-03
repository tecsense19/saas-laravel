$( document ).ready(function() 
{
    redeemList();

    $("#redeemDataImportForm").validate({
        rules: {
            file: {
                required: true,
            }
        },
        messages: {
            file: {
                required: "File is required!",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageRedeemList(url);
    });
});

function redeemList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.redeem_request_list,
        data: { search: search },
        success:function(data)
        {
            $('.redeemDataList').html(data);
        }
    });
}

function getPerPageRedeemList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.redeemDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    redeemList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    redeemList();
});
