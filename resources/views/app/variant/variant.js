$( document ).ready(function() 
{
    // const routes = [];

    // $.ajax({
    //     url: '/routes',
    //     method: 'GET',
    //     success: function(data) {
    //         data.forEach(route => {
    //             routes.push(route.url);
    //             console.log(route.url);
    //         });
    //         // Log the routes after they have been pushed
    //         console.log(routes);
    //     },
    //     error: function(xhr, status, error) {
    //         console.error('Error fetching routes:', error);
    //     }
    // });

    $.validator.addMethod("checkVariantOption", function(value, element, id) {
        return this.optional(element) || checkVariantOption(value, id);
    }, "Variant name already exist!");

    $("#variantForm").validate({
        rules: {
            variant_name: {
                required: true,
                remote: {
                    url: routes.variant_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        variant_id: function() {
                            // Return the ID value you want to pass
                            return $('#variant_id').val();
                        },
                        variant_name: function() {
                            return $('#variant_name').val();
                        }
                    }
                }
            },
            'variant_option[]': {
                // checkVariantOption: true
            }
        },
        messages: {
            variant_name: {
                required: "Variant name is required!",
                remote: "Variant name already exist!"
            }
        },
        submitHandler: function(form) {
            form.submit();

            submitButton = document.getElementById('variantSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
        }
    });

    variantList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageVariantList(url);
    });

    // When the "Add another variation" button is clicked
    $('#addInputBtn').click(function(){
        // Create a new input field and remove button
        createInputField();
    });

    // Handle click event for remove button (using event delegation)
    $('#inputContainer').on('click', '.removeBtn', function(){
        // Remove the parent container div when the remove button is clicked
        $(this).closest('.append-input').remove();
    });
});

    // Function to perform remote validation for each variant_option value
function checkVariantOption(value, id) {
    var isValid = false;
    $.ajax({
        url: routes.variant_option_name_check, // Replace with your remote validation URL
        type: 'GET',
        async: false, // Ensure synchronous AJAX request
        dataType:'json',
        data: {
            variant_option: value,
            variant_id: id
        },
        success: function(response) {
            isValid = response;
        },
        error: function(xhr, status, error) {
            console.error('Error checking variant option:', error);
        }
    });
    return isValid;
}

function variantList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.variant_list,
        data: { search: search },
        success:function(data)
        {
            $('.variantDataList').html(data);
        }
    });
}

function getPerPageVariantList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.variantDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    variantList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    variantList();
});

$('body').on('click', '.add_variant, .close_modal', function(e) {
    $('.modal_title').text('Add Variant');
    $('#variant_name-error').text('');
    $('#variant_id').val('');
    $('#variantForm')[0].reset();
    $('#inputContainer').html('');
    createInputField();
});

// Counter for unique IDs
var counter = 1;

// Function to create a new input field and remove button
function createInputField(inputId = '', inputVal = '') {
    // Generate unique IDs for input elements
    var inputNameId = 'variant_name_' + counter;
    var inputIds = 'variant_id_' + counter;
    var removeBtnId = 'removeBtn_' + counter;
    var errorId = 'variant_name_'+counter+'-error';

    var divElement = $('<div>', {
        class: 'append-input col-md-6'
    });

    // Create a new input element
    var input = $('<input>', {
        id: inputNameId,
        class: 'form-control form-control-lg form-control-solid block w-full variant-option',
        type: 'text',
        name: 'variant_option[]',
        placeholder: 'Variant Option',
        value: inputVal
    });

    // Create a new input element
    var ids = $('<input>', {
        id: inputIds,
        class: 'form-control form-control-lg form-control-solid block w-full',
        type: 'hidden',
        name: 'variant_option_ids[]',
        value: inputId
    });

    // Create a new remove button
    var removeBtn = $('<button>', {
        type: 'button',
        class: 'btn btn-sm btn-danger removeBtn',
        id: removeBtnId,
        text: 'Remove'
    });

    // Create a new div to contain the input and remove button
    var containerDiv = $('<div>', {
        class: 'input-group mt-2 px-2'
    });

    var errorDiv = $('<label>', {
        id: errorId,
        class: 'error px-2',
        for: 'variant_name_'+counter
    });

    // Append the input and remove button to the container div
    if(inputId)
    {
        containerDiv.append(ids);
    }
    containerDiv.append(input);
    containerDiv.append(removeBtn);

    divElement.append(containerDiv);
    divElement.append(errorDiv);

    // Append the container div to the input container
    $('#inputContainer').append(divElement);

    // Increment the counter for unique IDs
    counter++;
}

function editVariant(cateName, cateId, options)
{
    $('#inputContainer').html('');
    $('#variantForm')[0].reset();
    $('#variant_name-error').text('');
    $('#kt_modal_create_variant').modal('show');
    $('#variant_id').val(cateId);
    $('#variant_name').val(cateName);
    $('.modal_title').text('Edit Variant');

    // Parse the JSON data
    var data = options ? $.parseJSON(options) : [];

    // Access the properties of the object
    $.each(data, function(index, item) {
        createInputField(item.id, item.name)
    });
}

function deleteVariant(variant_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this variant.",
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
                url: routes.variant_delete,
                data: { variant_id: variant_id },
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
                            variantList();
                        }
                    });
                }
            });
        }
    });
}