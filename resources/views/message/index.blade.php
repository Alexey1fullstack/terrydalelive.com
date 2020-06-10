@extends('layout.master')

@section('custom-css')
<link href="{{asset('public/custom-css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .icon-td{
        width:90px !important;
    }
    .change_status,.card_delete, .card_edit {
        cursor: pointer;
    }
    #update_card_form, #new_card_form{
        top:10%;
    }
    .card-icon:hover, .card-icon:active{
        border-bottom:1px solid #49b900
    }
    .card-icon{
        border-bottom: 1px solid white;
    }
    .card-select {
        border: 1px solid #49b900;
    }
    .select2-selection.select2-selection--single{
        width:200px;
    }
    .select2-search.select2-search--dropdown{
        display:none;
    }
</style>
@endsection


@section('main-content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Card </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc">Card List</span>
        <a id="new_card" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
            Add New
        </a>
    </div>

</div>


<!-- end:: Content Head -->
<!-- begin:: Content -->
<div class="kt-portlet kt-portlet--mobile pr-4 pl-4">

    <div class="kt-portlet__body">

        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">

                </div>
                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                    <a href="#" class="btn btn-default kt-hidden">
                        <i class="la la-cart-plus"></i> New Order
                    </a>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                </div>
            </div>
        </div>

        <!--end: Search Form -->
    </div>

    <div class="kt-portlet__body kt-portlet__body--fit">

       <div class='row' style='overflow-y:hidden;'>
            <div class='col-md-12 p-4'>
                 <!--begin: Datatable -->

                <table class="table" id="example" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #0">Created Time</th>
                            <th title="Field #2">Full Name</th>
                            <th title="Field #1">Email</th>                            
                            <th title="Field #3">Phone Number</th>
                            <th title="Field #4">Message</th>
                            <th title="Field #5">Card ID</th>
                            <th title="Field #6"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($messages))
                            @foreach($messages as $row)                               
                                <tr>
                                    <td>{{date('m/d/Y H:i:s',strtotime($row->updated_at))}}</td>   
                                    <td>{{$row->fullname}}</td>   
                                    <td>{{$row->useremail}}</td>
                                    <td>{{$row->phonenumber}}</td>
                                    <td >{{$row->message}}</td>
                                    <td>{{$row->cardid+1000}}</td>
                                    <td class="text-left">                                        
                                        <a onclick="deleted_record({{$row->id}})" id="{{'sel'.$row->id}}" class="card_delete btn btn-sm btn-clean btn-icon btn-icon-md " title="Delete">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Field #0">Created Time</th>
                            <th title="Field #2">Full Name</th>
                            <th title="Field #1">Email</th>                            
                            <th title="Field #3">Phone Number</th>
                            <th title="Field #4">Message</th>
                            <th title="Field #5">Card ID</th>
                            <th title="Field #6"></th>
                        </tr>

                    </tfoot>
                </table>

                <!--end: Datatable -->
            </div>
       </div>
    </div>
</div>
<!-- end:: Content -->



@endsection

@section('page-js')


    <script src="{{asset('public/custom-js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/custom-js/datatables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script>

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
                        url: "{{ url('/message/destroy/') }}",
                        method: 'post',
                        data: {
                            record_id: record_id,

                        },
                        success: function(result){
                            if(result.success){
                                var del_id = '#del'+record_id;
                                $(del_id).closest('tr').remove();

                                swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'the card has been deleted.',
                                'success'
                                )
                                setTimeout(function(){ location.reload(true); }, 1000);
                            } else {
                                swalWithBootstrapButtons.fire(
                                'Fault!',
                                'Please check yoru newtwork',
                                'error'
                                )

                            }
                        }

                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'The card is safe',
                    'error'
                    )
                }
            })
        }
        
        $('#new_type').select2({
            placeholder: "Select an asset type",
            minimumResultsForSearch: -1,
        });

        $('#new_category').select2({
            placeholder: "Select a category",
            minimumResultsForSearch: -1,
        });
        
        $('#update_type').select2({
            placeholder: "Select an asset type",
            minimumResultsForSearch: -1,
        });

        $('#update_category').select2({
            placeholder: "Select a category",
            minimumResultsForSearch: -1,
        });

    </script>


    @if(session()->has('error'))
        <script>
            swal.fire("{{ session()->get('error') }}", "Please confirm it.","error");
        </script>
    @endif

    @if(session()->has('success'))
        <script>
            swal.fire("{{ session()->get('success') }}", "Please confirm it.","success");
        </script>
    @endif


@endsection


