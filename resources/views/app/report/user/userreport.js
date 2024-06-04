$( document ).ready(function() 
{
    $('#state_id', '#city_id').select2();

    userReportList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageUserReportList(url);
    });

    $('#state_id').on('change', function() {
        userReportList();
        var stateId = $(this).val();
        if(stateId) {
            $.ajax({
                url: routes.city_list + '/' + stateId,
                type: 'GET',
                success: function(response) {
                    var city = "<option value=''>Select City</option>";
                    if(response.status)
                    {
                        $('#city_id').empty();
                        // Loop through the array using $.each()
                        $.each(response.data, function(index, item) {
                            // Access properties of each object
                            city += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                        });

                        $('#city_id').append(city);
                        
                        $('#state_id', '#city_id').select2();
                    }
                }
            });
        } else {
            $('#city_id').empty();
        }
    });

    $('#city_id').on('change', function() {
        userReportList();
    });

    $('.exportUser').on('click', function() {
        var state_id = $('#state_id').val();
        var city_id = $('#city_id').val();

        submitButton = document.getElementById('exportUser');
        submitButton.setAttribute('data-kt-indicator', 'on');
        submitButton.disabled = true;

        $.ajax({
            type:'post',
            headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
            url: routes.user_report_export,
            data: { state_id: state_id, city_id: city_id },
            xhrFields: {
                responseType: 'blob' // Important for file download
            },
            success: function(data, status, xhr) {
                submitButton = document.getElementById('exportUser');
                submitButton.setAttribute('data-kt-indicator', 'off');
                submitButton.disabled = false;

                // Extract filename from Content-Disposition header
                var filename = "";
                var disposition = xhr.getResponseHeader('Content-Disposition');
                if (disposition && disposition.indexOf('attachment') !== -1) {
                    var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                    var matches = filenameRegex.exec(disposition);
                    if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                }

                // Create a new Blob object using the response data
                var blob = new Blob([data], { type: 'text/csv' });

                // Directly trigger the download
                var link = document.createElement('a');
                var url = window.URL.createObjectURL(blob);
                link.href = url;
                link.download = filename;
                link.click();
                window.URL.revokeObjectURL(url);
            },
        });
    });

    stateList();
});

function userReportList()
{
    var state_id = $('#state_id').val();
    var city_id = $('#city_id').val();

    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.user_report_list,
        data: { state_id: state_id, city_id: city_id },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageUserReportList(get_pagination_url) 
{
    var state_id = $('#state_id').val();
    var city_id = $('#city_id').val();

    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: get_pagination_url,
        data: { state_id: state_id, city_id: city_id },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

$('body').on('click', '#clear-button', function(e) {
    $('#state_id').val('');
    $('#city_id').val('');
    $('#state_id').trigger('change');
    $('#city_id').trigger('change');
});

function stateList() {
    $.ajax({
        url: routes.state_list,
        type: 'GET',
        success: function(response) {
            var state = "<option value=''>Select State</option>";;
            if(response.status)
            {
                $('#state_id').empty();
                $.each(response.data, function(index, item) {
                    // Access properties of each object
                    state += "<option value="+item.id+">"+ item.name.charAt(0).toUpperCase() + item.name.slice(1) +"</option>";
                });

                $('#state_id').append(state);
                $('#state_id').trigger('change');

                $('#state_id', '#city_id').select2();
            }
        }
    });
}
