$( document ).ready(function() 
{
    $("#categoryForm").validate({
        rules: {
            category_name: {
                required: true,
                remote: {
                    url: routes.category_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        category_id: function() {
                            // Return the ID value you want to pass
                            return $('#category_id').val();
                        },
                        category_name: function() {
                            return $('#category_name').val();
                        }
                    }
                }
            }
        },
        messages: {
            category_name: {
                required: "Category name is required!",
                remote: "Category name already exist!"
            }
        },
        submitHandler: function(form) {
            form.submit();

            submitButton = document.getElementById('categorySubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
        }
    });

    categoryList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageCategoryList(url);
    });
});

function categoryList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.category_list,
        data: { search: search },
        success:function(data)
        {
            $('.categoryDataList').html(data);
        }
    });
}

function getPerPageCategoryList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url:get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.categoryDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) 
{
    categoryList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    categoryList();
});

$('body').on('click', '.add_category, .close_modal', function(e) {
    $('.modal_title').text('Add Category');
    $('#category_name-error').text('');
    $('#category_id').val('');
    $('#categoryForm')[0].reset();
});

function editCategory(cateName, cateId)
{
    $('#categoryForm')[0].reset();
    $('#category_name-error').text('');
    $('#kt_modal_create_category').modal('show');
    $('#category_id').val(cateId);
    $('#category_name').val(cateName);
    $('.modal_title').text('Edit Category');
}

function deleteCategory(category_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this category.",
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
                url: routes.category_delete,
                data: { category_id: category_id },
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
                            categoryList();
                        }
                    });
                }
            });
        }
    });
}