
        $(document).ready(function() {
            $("#client").DataTable({
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

            $("#company").DataTable({
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
                width: "100px",
                display: "inline-block"
                });

            $('[data-toggle="tooltip"]').tooltip();
        });

        "use strict";
    // Class definition

    var KTDatatableHtmlTableDemo = function() {


        var new_client = function()
                {
                    $('#new-client-btn').click(function(){
                        var _this = $(this);
                        var client_modal = $('#new_client');
                        var form = _this.closest('form');
                        var inputs = $('#new_client input');
                        form.validate({
                            rules:{
                                new_client_name:{
                                    required:true,
                                },
                            }
                        })

                        if(!form.valid()){
                            return;
                        }
                        _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                        form.ajaxSubmit({
                        url: "{{url('/worker/create')}}",
                        success: function(response, status, xhr, $form) {
                            // similate 2s delay
                            if(response.success){
                                swal.fire("New Worker has been created!", "Please use new Worker.","success");
                                _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                client_modal.modal('hide');
                                form[0].reset();
                                setTimeout(function(){ location.reload(true); }, 1000);



                                //location.reload();
                            } else {
                                swal.fire("The Worker existed with same name!","Please use another name.", "error");
                                _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                client_modal.modal('hide');
                                form[0].reset();

                                // showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                            }
                        },
                        error: function() {

                                btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');


                        }
                    });


                    })

                }
        var update_worker = function()
        {
            $('#worker_update_btn').click(function(){
                var _this = $(this);
                var client_modal = $('#worker_update_form');
                var form = _this.closest('form');
                var inputs = $('input');
                var btn = $('#worker_update_btn');
                form.validate({
                    rules:{
                        name:{
                            required:true,
                        },
                        worker_id:{
                            required:true,
                        },
                    }
                })

                if(!form.valid()){
                    return;
                }
                _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                form.ajaxSubmit({
                url: "{{url('/worker/update')}}",
                success: function(response, status, xhr, $form) {
                    // similate 2s delay
                    if(response.success){
                        swal.fire("Worker name has been updated!", "Please make sure it.","success");
                        _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        client_modal.modal('hide');
                        form[0].reset();

                        setTimeout(function(){ location.reload(true); }, 1000);

                        //location.reload();
                    } else {
                        swal.fire("The worker name existed with same name!","Please use another name.", "error");
                        _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        client_modal.modal('hide');
                        form[0].reset();

                        // showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                    }
                },
                error: function() {

                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');


                }
            });


            })

        }


        return {
            // Public functions
            init: function() {

                new_client();
                update_worker();

            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableHtmlTableDemo.init();
    });

    function edit_worker(worker_id){

        $('#worker_id').val(worker_id);
        var id = '#delete_client'+worker_id;
        $('#worker_name').val($(id).parent().prev().prev().text());
        $('#worker_update_form').modal('show');
    }

    function delete_client(record_id){

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
                    url: "{{ url('/worker/delete') }}",
                    method: 'post',
                    data: {
                        record_id: record_id,

                    },
                    success: function(result){
                        swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'The Worker  has been deleted.',
                        'success'
                        )
                        var del_id = '#delete_client'+record_id;
                        $(del_id).closest('tr').remove();
                        setTimeout(function(){ location.reload(true); }, 1000);
                    }
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'This  Worker is safe',
                'error'
                )
            }
        })
    }
