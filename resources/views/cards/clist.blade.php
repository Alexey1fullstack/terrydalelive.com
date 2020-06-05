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
                            <th title="Field #0">#</th>
                            <th title="Field #2">Icon</th>
                            <th title="Field #1">Updated Time</th>                            
                            <th title="Field #3">Category</th>
                            <th title="Field #4">Type</th>
                            <th title="Field #5">City and State</th>
                            <th title="Field #6">Asking Price</th>
                            <th title="Field #7">EST.LTV</th>
                            <th title="Field #8">CoC Return</th>
                            <th title="Field #9">CAP Rate</th>
                            <th title="Field #10">Description</th>
                            <th title="Field #11">Status</th>
                            <th title="Field #12">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($cards))
                            @foreach($cards as $row)                               
                                <tr>
                                <td>{{$row->id+1000}}</td>
                                <td class="icon-td"><img class="mr-5" data-card-img="{{$row->card_img}}" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" width="30px;"></td>
                                    <td >{{date('m/d/Y H:i:s',strtotime($row->updated_at))}}</td>
                                    <td data-category ="{{$row->category}}">
                                        @if($row->category == '1')
                                            Refi Quote
                                        @elseif($row->category == '2')
                                            Purchase Quote
                                        @elseif($row->category == '3')
                                            Active on Market
                                        @endif
                                    </td>
                                    <td data-type ="{{$row->type}}">{{$row->get_assettype->icon_name}}</td>
                                    <td>{{$row->value1}}</td>
                                    <td>{{$row->value2}}</td>
                                    <td>{{$row->value3}}</td>
                                    <td>{{$row->value4}}</td>
                                    <td>{{$row->value5}}</td>
                                    <td>{{$row->description}}</td>
                                    <td data-status ="{{$row->status}}" >
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-brand dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                @if($row->status == 0)
                                                    Open
                                                @elseif($row->status == 1)
                                                    Close
                                                @elseif($row->status == 2)
                                                    No Deal
                                                @endif
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item change-status" data-status='0' data-cardid="{{$row->id}}" >Open</a>
                                                <a class="dropdown-item change-status" data-status='1' data-cardid="{{$row->id}}"  >Close</a>
                                                <a class="dropdown-item change-status" data-status='2' data-cardid="{{$row->id}}"  >No Deal</a>
                                            </div>
                                        </div>
                                        {{-- @if($row->status == 0)
                                            <span data-cardid="{{$row->id}}"  class="change_status kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill ">Open</span>
                                        @elseif($row->status == 1)
                                            <span data-cardid="{{$row->id}}"  class="change_status kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill ">Close</span>
                                        @endif --}}
                                    </td>

                                    <td class="text-left">
                                        <a data-card-id = {{$row->id}} class="card_edit  btn btn-sm btn-clean btn-icon btn-icon-md " title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
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
                            <th title="Field #0">#</th>
                            <th title="Field #2">Icon</th>
                            <th title="Field #1">Created Time</th>                            
                            <th title="Field #3">Category</th>
                            <th title="Field #4">Type</th>
                            <th title="Field #5">City and State</th>
                            <th title="Field #6">Asking Price</th>
                            <th title="Field #7">EST.LTV</th>
                            <th title="Field #8">CoC Return</th>
                            <th title="Field #9">CAP Rate</th>
                            <th title="Field #10">Description</th>
                            <th title="Field #11">Status</th>
                            <th title="Field #12">Action</th>
                        </tr>

                    </tfoot>
                </table>

                <!--end: Datatable -->
            </div>
       </div>
    </div>
</div>
<!-- end:: Content -->

<!--begin::new card Modal-->
<div class="modal fade" id="new_card_form" tabindex="-1" role="dialog"  aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >New Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method='post'>
                @csrf
                    <div class="row">
                        <div class="col-md-12">      
                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class='form-group'>
                                        <label class="main-title">Assets type:</label>
                                        <div class='input-group'>
                                            <select class='form-control' id='new_type' name = "type" Placeholder = "Enter assets type" required>
                                                <option ></option>
                                                @foreach($assettype as $type)
                                                    <option value='{{$type->id}}'>{{$type->icon_name}}</option>
                                                @endforeach                                    
                                            </select>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class='form-group'>
                                        <label class="main-title">Category:</label>
                                        <div class='input-group'>
                                            <select class='form-control' id='new_category' name = "category"  required>
                                                <option ></option>
                                                <option value='1'>Refi Quote</option>
                                                <option value='2'>Purchase Quote</option>
                                                <option value='3'>Active on Market</option>                                  
                                            </select>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">City and State:</label>
                                    <input type="text" class="form-control" name="value1" placeholder="Enter City and State">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                            </div>

                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">Asking Price:</label>
                                    <input type="text" class="form-control" name="value2" id="value12" placeholder="Enter Asking Pirce">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter EST.LTV</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">EST.LTV:</label>
                                    <input type="text" class="form-control" name="value3" id="value13" placeholder="Enter EST.LTV">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Cash on Cash Return</span> -->
                                </div>
                            </div>

                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">Cash on Cash Return:</label>
                                    <input type="text" class="form-control" name="value4" id="value14" placeholder="Enter Cash on Cash Return">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Underwritten IRR</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">CAP Rate:</label>
                                    <input type="text" class="form-control" name="value5" id="value15" placeholder="Enter CAP Rate">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter value5</span> -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">Description:</label>
                                    <input type="text" maxlength="15" class="form-control" name="description" id="new_description" placeholder="Enter Description">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="new_card_btn" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--end:new card Modal-->


<!--begin::update card Modal-->
<div class="modal fade" id="update_card_form" tabindex="-1" role="dialog"  aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Edit Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method='post'>

                @csrf
                    <input type="hidden" id="card_id" name="card_id" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div  class="form-group">
                                        <label class="main-title">Assets type:</label>
                                        <div class='input-group'>
                                            <select class='form-control' id='update_type' name = "type" Placeholder = "Enter assets type" required>
                                                <option > </option>
                                                @foreach($assettype as $type)
                                                    <option value='{{$type->id}}'>{{$type->icon_name}}</option>
                                                @endforeach
                                            
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!-- <span class="form-text text-muted">Please enter assets type</span> -->
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class='form-group'>
                                        <label class="main-title">Category:</label>
                                        <div class='input-group'>
                                            <select class='form-control' id='update_category' name = "category"  required>
                                                <option ></option>
                                                <option value='1'>Refi Quote</option>
                                                <option value='2'>Purchase Quote</option>
                                                <option value='3'>Active on Market</option>                                  
                                            </select>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div  class="form-group">
                                        <label class="main-title">City and State:</label>
                                        <input type="text" class="form-control" name="value1" id="value1" placeholder="Enter City and State">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                            </div>

                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div  class="form-group">
                                    <label class="main-title">Asking Price:</label>
                                    <input type="text" class="form-control" name="value2" id="value2" placeholder="Enter Asking Pirce">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter EST.LTV</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div  class="form-group">
                                        <label class="main-title">EST.LTV:</label>
                                        <input type="text" class="form-control" name="value3" id="value3" placeholder="Enter EST.LTV">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Cash on Cash Return</span> -->
                                </div>
                            </div>

                            <div class=" row divide">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">Cash on Cash Return:</label>
                                    <input type="text" class="form-control" name="value4" id="value4" placeholder="Enter Cash on Cash Return">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Underwritten IRR</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">CAP Rate:</label>
                                    <input type="text" class="form-control" name="value5" id="value5" placeholder="Enter CAP Rate">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter value5</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                    <label class="main-title">Description:</label>
                                    <input type="text" maxlength="15" class="form-control" name="description" id="description" placeholder="Enter Description">
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group closed-block ">
                                    
                                    </div>
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="update_card_btn" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--end:update card Modal-->


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


        "user strict";
        var create_project = function(){

            var create_p= $('#create_project');            

            var update_card = function()
        {
            $('#update_card_btn').click(function(){
                var _this = $(this);
                var client_modal = $('#update_card_form');
                var form = _this.closest('form');
                var inputs = $('input');
                var btn = $('#update_card_btn');
                form.validate({
                    rules: {
                            type: {
                                required:true,
                            },
                            category: {
                                required:true,
                            },
                            value1:{
                                required:true,

                            },
                            value2:{
                             
                                required:true,
                            },
                            value3:{
                        
                                required: true,
                                
                            },
                            value4:{
                        
                                required: true,
                                
                            },
                        }
                })

                if(!form.valid()){
                    return;
                }
                _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                form.ajaxSubmit({
                url: "{{url('/card/update')}}",
                success: function(response, status, xhr, $form) {
                    // similate 2s delay
                    if(response.success){
                        swal.fire("The Card has been updated!", "Please make sure it.","success");
                        _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        client_modal.modal('hide');
                        form[0].reset();

                        setTimeout(function(){ location.reload(true); }, 1000);

                        //location.reload();
                    } else {
                        swal.fire("The client name existed with same name!","Please use another name.", "error");
                        _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        client_modal.modal('hide');
                        form[0].reset();

                        // showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                    }
                },
                error: function() {

                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        swal.fire("The client name existed with same name!","Please use another name.", "error");
                        //showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');


                }
            });


            })

        }

        var new_card = function()
            {
                $('#new_card_btn').click(function(){
                    var _this = $(this);
                    var client_modal = $('#new_card_form');
                    var form = _this.closest('form');
                    var inputs = $('input');
                    var btn = $('#new_card_btn');
                    form.validate({
                        rules: {
                            type: {
                                required:true,
                            },
                            category: {
                                required:true,
                            },
                            value1:{
                                required:true,

                            },
                            value2:{
                              
                                required:true,
                            },
                            value3:{
                             
                                required: true,
                                
                            },
                            value4:{
                              
                                required: true,
                            },
                        }
                    })

                    if(!form.valid()){
                        return;
                    }
                    _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                    form.ajaxSubmit({
                    url: "{{url('/card/updateonlist')}}",
                    success: function(response, status, xhr, $form) {
                        // similate 2s delay
                        if(response.success){
                            swal.fire("The New Card has been created!", "Please make sure it.","success");
                            _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            client_modal.modal('hide');
                            form[0].reset();

                            setTimeout(function(){ location.reload(true); }, 1000);

                            //location.reload();
                        } else {
                            swal.fire("The client name existed with same name!","Please use another name.", "error");
                            _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            client_modal.modal('hide');
                            form[0].reset();

                            // showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
                        }
                    },
                    error: function() {

                            btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            swal.fire("The client name existed with same name!","Please use another name.", "error");
                            //showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');


                    }
                });


                })

            }
            var select_card1 = function(){
                $('.card-icon1').click(function(){
                    var _this = $(this);
                    var cardid = _this.attr('data-cardid');
                    $('#card_img1').val(cardid);
                    $('.card-icon1').removeClass('card-select');
                    _this.addClass('card-select');


                });
            }

            var select_card2 = function(){
                $('.card-icon2').click(function(){
                    var _this = $(this);
                    var cardid = _this.attr('data-cardid');
                    $('#card_img2').val(cardid);
                    $('.card-icon2').removeClass('card-select');
                    _this.addClass('card-select');

                });
            }

            var change_status = function(){
                $(document).on('click','.change-status',function(){
                    var loading = $("#main-loading");
                    _this = $(this);
                    loading.fadeIn();
                    var list_btn = _this.parent().prev();
                    var cardid = _this.attr("data-cardid");
                    var status_title = _this.text();
                    var status = _this.attr("data-status");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}',

                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/card/status/') }}",
                        method: 'post',
                        data: {
                            cardid: cardid,
                            status: status,

                        },
                        success: function(result){
                            if(result.success){
                                loading.fadeOut();
                                list_btn.text(status_title);
                               
                            } else {
                                loading.fadeOut();
                                swal.fire("Network Error!", "Please make sure your network.","error");

                            }
                        },
                        error: function(){
                            loading.fadeOut();
                            swal.fire("Network Error!", "Please make sure your network.","error");
                        }

                    });

                });
            }



            var new_card_modal = function(){
                $('#new_card').click(function(){
                    _this = $(this);
                    $("#new_card_form").modal('show');
                    $('#type1').val('');
                    $('#value11').val('');
                    $('#value12').val('');
                    $('#value13').val('');
                    $('#value14').val('');
                    $('#value15').val('');
                    $('#new_description').val('');

                });
            }

            return {
                init: function(){
                    new_card_modal();
                    update_card();
                    new_card();
                    change_status();
                    select_card1();
                    select_card2();
                  }
            };

        }();
        jQuery(document).ready(function(){
            create_project.init();
        });

        function changeStatus(status, cardId){
            
            console.log(status + cardId);
        }


        $('.card_edit').click(function(){
            _this = $(this);
            let card_id = _this.attr('data-card-id');
            let card_img = _this.closest('tr').find('td').eq(1).children().attr('data-card-img');
            let type = _this.closest('tr').find('td').eq(4).attr('data-type');
            let category = _this.closest('tr').find('td').eq(3).attr('data-category');
            var closed = _this.closest('tr').find('td').eq(2).text();
                 closed = closed.substr(6,4)+'-'+ closed.substr(0,2) +'-'+closed.substr(3,2);
            let status = _this.closest('tr').find('td').eq(11).attr('data-status');
            
            let value1 = _this.closest('tr').find('td').eq(5).text();
            let value2= _this.closest('tr').find('td').eq(6).text();
            let value3 = _this.closest('tr').find('td').eq(7).text();
            let value4 = _this.closest('tr').find('td').eq(8).text();
            let value5 = _this.closest('tr').find('td').eq(9).text();
            let description = _this.closest('tr').find('td').eq(10).text();
            $('#update_type').select2().select2('val', type);
            $('#update_category').select2().select2('val', category);
            $(".card-img-g").removeClass('card-select');
            $('#card_img2').val(card_img);
            $('#card_id').val(card_id);
            $('#value1').val(value1);
            $('#value2').val(value2);
            $('#value3').val(value3);
            $('#value4').val(value4);
            $('#value5').val(value5);
            if(status ==1){
                $('.closed-block').empty();
                $('.closed-block').append("<label class='main-title'>Closed At:</label><input type='date' maxlength='15' class='form-control' name='closed' id='closed' placeholder='Select Date'>");
                $('#closed').val(closed);
            } else {
                $('.closed-block').empty();
            }            
            $('#description').val(description);
            $('#update_card_form').find('.card-icon2').eq(card_img/1-1).addClass('card-select');
            $("#update_card_form").modal('show');
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


