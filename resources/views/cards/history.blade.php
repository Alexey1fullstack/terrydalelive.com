@extends('layout.master')

@section('custom-css')
<link href="{{asset('public/custom-css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('main-content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Card </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc">Card History</span>
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
                            <th title="Field #0">Icon</th>
                            <th title="Field #1">Created Time</th>
                            <th title="Field #2">Type</th>
                            <th title="Field #3">City and State</th>
                            <th title="Field #4">Asking Price</th>
                            <th title="Field #5">EST.LTV</th>
                            <th title="Field #6">Cash on Cash Return</th>
                            <th title="Field #7">CAP Rate</th>
                            <th title="Field #8">Status</th>
                            <th title="Field #9">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($cards))
                            @foreach($cards as $row)
                                @php

                                    if($row['card_img'] ==1 ){
                                        $row['card_img'] ="dollor-home";

                                    } else if($row['card_img'] ==2){
                                        $row['card_img'] ="tower";
                                    } else if($row['card_img'] == 3){
                                        $row['card_img'] ="home";
                                    } else if($row['card_img'] == 4){
                                        $row['card_img'] ="appartment";
                                    }
                                @endphp
                                <tr>
                                    <td class="icon-td"><img class="mr-5 card-icon card-select" data-cardid="1" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" width="30px;"></td>
                                    <td >{{date('m/d/Y h:i:s',strtotime($row->created_at))}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->value1}}</td>
                                    <td>{{$row->value2}}</td>
                                    <td>{{$row->value3}}</td>
                                    <td>{{$row->value4}}</td>
                                    <td>{{$row->value5}}</td>
                                    <td>
                                        @if($row->status == 0)
                                            <span data-cardid="{{$row->id}}"  class="change_status kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill ">Open</span>
                                        @elseif($row->status == 1)
                                            <span data-cardid="{{$row->id}}"  class="change_status kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill ">Close</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{url('/card/'.$row->id.'/restore')}}" class="btn btn-sm btn-clean btn-icon btn-icon-md delete_record" title='Restore'>
                                            <i class="fa fa-trash-restore"></i>
                                        </a>
                                        <a  href="{{url('/card/'.$row->id.'/forever')}}" class="btn btn-sm btn-clean btn-icon btn-icon-md delete_record" title="Forever delete">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
       </div>
    </div>
</div>
<!--end::Modal-->

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
                        url: "{{ url('/card/destroy/') }}",
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

    </script>

@if(session()->has('error') )
    <script>
        swal.fire("{{ session()->get('error') }}", "{{ session()->get('alert') }}","error");
    </script>
    @endif

    @if(session()->has('success')  )
    <script>
        swal.fire("{{ session()->get('success') }}", "{{ session()->get('alert') }}","success");
    </script>
    @endif


@endsection


