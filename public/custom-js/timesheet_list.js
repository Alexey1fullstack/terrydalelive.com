
$(document).ready(function() {
    $("#example").DataTable({
        aaSorting: [],
        responsive: true,

        columnDefs: [
        {
            responsivePriority: 1,
            targets: 0
        },
        {
            responsivePriority: 2,
            targets: -1
        }
        ]
    });

$(".dataTables_filter input")
    .attr("placeholder", "Search here...")
    .css({
    width: "300px",
    display: "inline-block"
    });

$('[data-toggle="tooltip"]').tooltip();
});


function deleted_record(record_id){

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You want to delete this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}',

                }
            });
            jQuery.ajax({
                url: "{{ url('/timesheet/destroy/') }}",
                method: 'post',
                data: {
                    record_id: record_id,

                },
                success: function(result){
                    var del_id = '#del'+record_id;
                    $(del_id).closest('tr').remove();

                    swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )


                }
            });


        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your  file is safe',
            'error'
            )
        }
    })

}
