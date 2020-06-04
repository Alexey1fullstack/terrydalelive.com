@extends('layout.master')

@section('custom-css')
<link href="{{asset('public/custom-css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .icon-td{
        width:90px !important;
    }
    .permission, .member {
        cursor: pointer;
    }
    @media (min-width: 1281px) {
        #new_user_form{
            top:10%;
        }
    
    }

    /* 
    ##Device = Laptops, Desktops
    ##Screen = B/w 1025px to 1280px
    */

    @media (min-width: 1025px) and (max-width: 1280px) {
        #new_user_form{
            top:10%;
        }
    
    }



</style>

@endsection


@section('main-content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Users </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc">User List</span>
        <a id="new_user" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
            Add New User
        </a>
    </div>

</div>

<!-- end:: Content Head -->
<!-- begin:: Content -->
<div class="kt-portlet kt-portlet--mobile pr-4 pl-4">

    <div class="kt-portlet__body kt-portlet__body--fit">

       <div class='row' style='overflow-y:hidden;'>
            <div class='col-md-12 p-4'>
                 <!--begin: Datatable -->

                <table class="table" id="example" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">Name</th>
                            <th title="Field #2">Email</th>
                            <th title="Field #3">Phone Number</th>
                            <th title="Field #4">location</th>
                            <th title="Field #5">User Type</th>
                            <th title="Field #6">Permission</th>
                            <th title="Field #7">Registered Time</th>
                            <th title="Field #8">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($users))
                            @foreach($users as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone_num}}</td>
                                    <td>{{$row->location}}</td>
                                    <td>
                                        @if ($row->member == 1)
                                            <span data-uid="{{$row->id}}" class="member  kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill ">Admin</span>
                                        @else
                                            <span data-uid="{{$row->id}}"  class="member kt-badge  kt-badge--success kt-badge--inline kt-badge--pill ">User</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($row->permission == 1)
                                            <span  data-uid="{{$row->id}}" class="permission kt-badge  kt-badge--success kt-badge--inline kt-badge--pill ">Active</span>
                                        @else
                                            <span  data-uid="{{$row->id}}" class="permission kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill ">Unactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{date('m/d/Y h:m:s',strtotime($row->created_at))}}
                                    </td>
                                    <td class="text-left">

                                        <a onclick="deleted_record({{$row->id}})" id="{{'sel'.$row->id}}" class="btn btn-sm btn-clean btn-icon btn-icon-md delete_record" title="Delete">
                                            <i class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        @endif


                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Field #1">Name</th>
                            <th title="Field #2">Email</th>
                            <th title="Field #3">Phone Number</th>
                            <th title="Field #4">location</th>
                            <th title="Field #5">User Type</th>
                            <th title="Field #6">Permission</th>
                            <th title="Field #7">Registered Time</th>
                            <th title="Field #8">Action</th>

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
<div class="modal fade" id="new_user_form" tabindex="-1" role="dialog"  aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method='post'>
                @csrf
                    <div class="row">
                        <div class="col-md-12">   
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">User Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter User Name">
                                    </div>                                 
                                </div>                               
                            </div>
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                    </div>                                 
                                </div>                               
                            </div>
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">Location:</label>
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter Location">
                                    </div>                                 
                                </div>                               
                            </div>
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">Phone number:</label>
                                    <input type="text" class="form-control" name="phone_num" id="phone_num" placeholder="Enter Phone Number">
                                    </div>                                 
                                </div>                               
                            </div>
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                    </div>                                 
                                </div>                               
                            </div>
                            <div class=" row divide">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                    <label class="main-title">Confirm Password:</label>
                                    <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd" placeholder="Please confirm Password">
                                    </div>                                 
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="new_user_btn" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--end:new card Modal-->


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

            var change_member = function(){
                $(".member").click(function(){
                    var loading = $("#main-loading");
                    _this = $(this);
                    loading.fadeIn();

                    var uid = _this.attr("data-uid");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}',

                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/user/member/') }}",
                        method: 'post',
                        data: {
                            uid: uid,

                        },
                        success: function(result){
                            if(result.success){
                                loading.fadeOut();
                                if(result.status == 0){
                                    _this.removeClass('kt-badge--primary').addClass('kt-badge--success');
                                    _this.text('User');
                                } else {
                                    _this.removeClass('kt-badge--success').addClass('kt-badge--primary');
                                    _this.text('Admin');

                                }


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

            var change_permission = function(){
                $(".permission").click(function(){
                    var loading = $("#main-loading");
                    _this = $(this);
                    loading.fadeIn();

                    var uid = _this.attr("data-uid");
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}',

                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/user/permission/') }}",
                        method: 'post',
                        data: {
                            uid: uid,

                        },
                        success: function(result){
                            if(result.success){
                                loading.fadeOut();
                                if(result.status == 0){
                                    _this.removeClass('kt-badge--success').addClass('kt-badge--danger');
                                    _this.text('Unactive');
                                } else {
                                    _this.removeClass('kt-badge--danger').addClass('kt-badge--success');
                                    _this.text('Actove');

                                }


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
            
            var new_user = function(){
            	$('#new_user').click(function(){
            		$('#new_user_form').modal('show');
            	
            	});
            }

            var create_new_user = function()
            {
                $('#new_user_btn').click(function(){
                    var _this = $(this);
                    var client_modal = $('#new_user_form');
                    var form = _this.closest('form');
                    var inputs = $('input');
                    var btn = $('#new_user_btn');
                    var password = $('#password').val();
                    if(password !=$('#confirm_pwd').val()){
                        swal.fire("Please confirm your password!", "The confirm password is not matched.","error");
                        return;
                    } else if(password.length < 8){
                        swal.fire("Please confirm your password!", "The Password must be 8 characters.","error");
                        return;

                    }
                    
                    form.validate({
                        rules: {
                            name: {
                                required:true,
                            },
                            email: {
                                email:true,
                                required:true,
                            },                          
                            
                            password:{
                             
                                required: true,
                                
                            },
                            confirm_pwd:{
                              
                                required: true,
                            },
                        }
                    })

                    if(!form.valid()){
                        return;
                    }
                    _this.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                    form.ajaxSubmit({
                        url: "{{url('/user/new_user')}}",
                        success: function(response, status, xhr, $form) {
                            // similate 2s delay
                            if(response.success){
                                swal.fire("A New User has been created!", "Please make sure it.","success");
                                _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                client_modal.modal('hide');
                                form[0].reset();
                                setTimeout(function(){ location.reload(true); }, 1000);
                            } else {
                                swal.fire("The email is already registered!","Please use another email.", "error");
                                _this.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                form[0].reset();
                            }
                        },
                        error: function() {
                                btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                                swal.fire("Network Error!","Please check your network.", "error");
                        }
                    });
                })

            }



            return {
                init: function(){

                    change_member();
                    change_permission();
                    new_user();
                    create_new_user();
                  }
            };

        }();
        
        jQuery(document).ready(function(){
            create_project.init();
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
                text: "You want to delete this User!",
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
                        url: "{{ url('/user/delete') }}",
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
                                'the User has been deleted.',
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
                    'The User is safe',
                    'error'
                    )
                }
            })

        }



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


