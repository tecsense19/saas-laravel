$( document ).ready(function() 
{
    productList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageProductList(url);
    });
});

function productList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.product_list,
        data: { search: search },
        success:function(data)
        {
            $('.productDataList').html(data);
        }
    });
}

function getPerPageProductList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url:get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.productDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) 
{
    productList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    productList();
});

function deleteProduct(product_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this product.",
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
                url: routes.product_delete,
                data: { product_id: product_id },
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
                            productList();
                        }
                    });
                }
            });
        }
    });
}