var rowDigitization = 0;

$(document).ready( function () {

    if($('.datatable').length >0)
        $('.datatable').DataTable({
            "language": {
                "sProcessing":    "",
                "sLengthMenu":    $('#sLengthMenu').val(),
                "sZeroRecords":   $('#sZeroRecords').val(),
                "sEmptyTable":    $('#sEmptyTable').val(),
                "sInfo":          $('#sInfo').val(),
                "sInfoEmpty":     $('#sInfoEmpty').val(),
                "sInfoFiltered":  $('#sInfoFiltered').val(),
                "sInfoPostFix":   "",
                "sSearch":        $('#sSearch').val(),
                "sUrl":           "",
                "sInfoThousands":  ",",
                "sLoadingRecords": $('#sLoadingRecords').val(),
                "oPaginate": {
                    "sFirst":     $('#sFirst').val(),
                    "sLast":      $('#sLast').val(),
                    "sNext":      $('#sNext').val(),
                    "sPrevious":  $('#sPrevious').val(),
                },
                "oAria": {
                    "sSortAscending":  " ",
                    "sSortDescending": " "
                }
            }
        });
});

