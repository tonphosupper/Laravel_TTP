(function($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table').DataTable({
        lengthMenu: [
            [5, 3, 25, -1],
            [5, 3, 25, "All"]
        ],
    });

    $('#bootstrap-data-table-export').DataTable({
        lengthMenu: [
            [5, 3, 25, -1],
            [5, 3, 25, "All"]
        ],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

    $('#row-select').DataTable({
        initComplete: function() {
            this.api().columns().every(function() {
                var column = this;
                var select = $('<select class="form-control"><option =""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function() {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function(d, j) {
                    select.append('<option ="' + d + '">' + d + '</option>')
                });
            });
        }
    });

})(jQuery);