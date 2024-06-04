$( document ).ready(function() 
{
    $('#state_id', '#city_id').select2();

    $("#event_date").flatpickr({
        dateFormat: "d-m-Y",
        minDate: "today"
    });
    
    $("#event_time").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i", // Format for displaying the time
        time_24hr: true, // Use 24-hour format
        allowInput: true, // Allow manual input
    });
    

    $("#eventForm").validate({
        rules: {
            event_title: {
                required: true,
                remote: {
                    url: routes.event_name_check,
                    type: 'get',
                    async: false,
                    dataType:'json',
                    data: {
                        event_id: function() {
                            // Return the ID value you want to pass
                            return $('#event_id').val();
                        },
                        event_title: function() {
                            return $('#event_title').val();
                        }
                    }
                }
            },
            sort_description: {
                required: true,
            },
            event_location: {
                required: true,
            },
            state_id: {
                required: true,
            },
            city_id: {
                required: true,
            },
            event_date: {
                required: true,
            },
            event_time: {
                required: true,
            }
        },
        messages: {
            event_title: {
                required: "Event title is required!",
                remote: "Event title already exist!"
            },
            sort_description: {
                required: 'Sort description is required!',
            },
            event_location: {
                required: 'Event location is required!',
            },
            state_id: {
                required: 'State is required!',
            },
            city_id: {
                required: 'City is required!',
            },
            event_date: {
                required: 'Event date is required!',
            },
            event_time: {
                required: 'Event time is required!',
            }
        },
        submitHandler: function(form) {
            form.submit();

            submitButton = document.getElementById('eventSubmit');
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
        }
    });

    eventList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageEventList(url);
    });

    $('#state_id').on('change', function() {
        var stateId = $(this).val();
        if(stateId) {
            $.ajax({
                url: routes.city_list + '/' + stateId,
                type: 'GET',
                success: function(response) {
                    var city = "";
                    if(response.status)
                    {
                        $('#city_id').empty();
                        // Loop through the array using $.each()
                        $.each(response.data, function(index, item) {
                            // Access properties of each object
                            city += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                        });

                        $('#city_id').append(city);
                    }
                }
            });
        } else {
            $('#city_id').empty();
        }
    });

    stateList();
});

function stateList() {
    $.ajax({
        url: routes.state_list,
        type: 'GET',
        success: function(response) {
            var state = "";
            if(response.status)
            {
                $('#state_id').empty();
                $.each(response.data, function(index, item) {
                    // Access properties of each object
                    state += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                });

                $('#state_id').append(state);
                $('#state_id').trigger('change');
            }
        }
    });
}

function eventList()
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.event_list,
        data: { search: search },
        success:function(data)
        {
            $('.eventDataList').html(data);
        }
    });
}

function getPerPageEventList(get_pagination_url) 
{
    var search = $('#search').val();
    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { search: search },
        success:function(data)
        {
            $('.eventDataList').html(data);
        }
    });
}

$('body').on('keyup', '#search', function (e) {
    eventList();
});

$('body').on('click', '#clear-button', function(e) {
    $('#search').val('');
    eventList();
});

$('body').on('click', '.add_event, .close_modal', function(e) {
    $('.modal_title').text('Add Event');
    $('#state_id-error').text('');
    $('#city_id-error').text('');
    $('#event_id').val('');
    $('#eventForm')[0].reset();
    $('.image-input-placeholder').css('background-image', 'url({{ asset_url("app/media/svg/files/blank-image.svg") }})');
});

function editEvent(eventObject, eventId)
{
    var eventObject = JSON.parse(eventObject);

    $('#eventForm')[0].reset();
    $('#state_id-error').text('');
    $('#city_id-error').text('');
    $('#kt_modal_create_event').modal('show');
    $('#event_id').val(eventId);
    

    setTimeout(function() {
        $('#state_id').val(eventObject.state_id);
        $('#state_id').trigger('change');
    }, 500);
    
    setTimeout(function() {
        $('#city_id').val(eventObject.city_id);
        $('#city_id').trigger('change');
    }, 1000);

    
    $('.modal_title').text('Edit Event');

    $('#event_title').val(eventObject.event_title);
    $('#sort_description').val(eventObject.sort_description);
    $('#description').val(eventObject.description);
    $('#event_location').val(eventObject.event_location);
    $('#event_date').val(eventObject.event_date.split('-').reverse().join('-'));
    $('#event_time').val(eventObject.event_time);

    var image = eventObject.event_image ? eventObject.event_image : 'url("{{ asset_url("app/media/svg/files/blank-image.svg") }}")';
    setTimeout(function() {
        $('.image-input-placeholder').css('background-image', 'url('+image+')');
    }, 1000);
}

function deleteEvent(event_id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete this Event.",
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
                url: routes.event_delete,
                data: { event_id: event_id },
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
                            eventList();
                        }
                    });
                }
            });
        }
    });
}