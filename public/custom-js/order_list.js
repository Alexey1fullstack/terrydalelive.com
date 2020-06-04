
    $(document).ready(function() {
        var table1 = $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            initComplete: function () {
                this.api().columns([0,2,3]).every( function () {
                    var column = this;
                    var select = $('<select><option value="">Show all</option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );

                    column.data().unique().sort().each( function ( d, j ) {
                        var val = $('<div/>').html(d).text();
                        select.append( '<option value="' + val + '">' + val + '</option>' );
                        // select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            },
            drawCallback: function () {
                var api = this.api();

                    console.log(api.column(7).data().sum());


            }

        } );


        $('#example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            initComplete: function () {
            this.api().columns([0,2,3]).every( function () {
                var column = this;
                var select = $('<select><option value="">Show all</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    var val = $('<div/>').html(d).text();
                    select.append( '<option value="' + val + '">' + val + '</option>' );
                    // select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
        } );


    } );
