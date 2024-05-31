$( document ).ready(function() 
{
    redeemHistoryList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageRedeemHistoryList(url);
    });
});

function redeemHistoryList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.redeem_history_list,
        data: { search: search, user_id: routes.ids },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageRedeemHistoryList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search, user_id: routes.ids },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    redeemHistoryList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    redeemHistoryList();
});
