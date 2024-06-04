$( document ).ready(function() 
{
    $('#month_val', '#year_val').select2();

    eventReportList();

    $('body').on('click', '.pagination a', function(e) 
    {
        e.preventDefault();

        var url = $(this).attr('href');
        getPerPageEventReportList(url);
    });

    $('#month_val').on('change', function() {
        eventReportList();
    });

    $('#year_val').on('change', function() {
        eventReportList();
    });

    $('.exportEvent').on('click', function() {
        var month_val = $('#month_val').val();
        var year_val = $('#year_val').val();

        submitButton = document.getElementById('exportEvent');
        submitButton.setAttribute('data-kt-indicator', 'on');
        submitButton.disabled = true;

        $.ajax({
            type:'post',
            headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
            url: routes.event_report_export,
            data: { month_val: month_val, year_val: year_val },
            xhrFields: {
                responseType: 'blob' // Important for file download
            },
            success: function(data, status, xhr) {
                submitButton = document.getElementById('exportEvent');
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
});

function eventReportList()
{
    var month_val = $('#month_val').val();
    var year_val = $('#year_val').val();

    $.ajax({
        type:'post',
        headers: {'X-CSRF-TOKEN': jQuery('input[name=_token]').val()},
        url: routes.event_report_list,
        data: { month_val: month_val, year_val: year_val },
        success:function(data)
        {
            $('.videoDataList').html(data);
        }
    });
}

function getPerPageEventReportList(get_pagination_url) 
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
            $('.videoDataList').html(data);
        }
    });
}

$('body').on('click', '#clear-button', function(e) {
    $('#month_val').val('');
    $('#year_val').val('');
    $('#month_val').trigger('change');
    $('#year_val').trigger('change');
});
