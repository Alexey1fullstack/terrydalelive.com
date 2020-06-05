@extends('layout.master')

@section('custom-css')

@endsection

@section('main-content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Cards </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc">New Card</span>

    </div>

</div>

<!-- end:: Content Head -->
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            New Card
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" id="create_project" action="{{url('/card/create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="card-img" name="card_img" value="1">

                    <div class="kt-portlet__body">
                      
                        <div class=" row divide">
                            <div class="col-lg-3 col-md-3 col-sm-6 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">Assets type:</label>
                                    <div class='input-group'>
                                        <select class='form-control' id='update_type' name = "type" Placeholder = "Enter assets type" required>
                                             <option ></option>
                                            @foreach($assettype as $type)
                                                <option value='{{$type->id}}'>{{$type->icon_name}}</option>
                                            @endforeach
                                    
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">Category:</label>
                                    <div class='input-group'>
                                        <select class='form-control' id='category' name = "category" required>
                                            <option ></option>
                                            <option value='1'>Refi Quote</option>
                                            <option value='2'>Purchase Quote</option>
                                            <option value='3'>Active on Market</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">

                                <div class='form-group'>
                                    <label class="main-title">City and State:</label>
                                    <input type="text" class="form-control" name="value1" placeholder="Enter City and State">
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                            </div>
                        </div>

                        <div class=" row divide">
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">Asking Price:</label>
                                    <input type="text" class="form-control" name="value2" placeholder="Enter Asking Pirce">
                                    <!-- <span class="form-text text-muted">Please enter EST.LTV</span> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">EST.LTV:</label>
                                    <input type="text" class="form-control" name="value3" placeholder="Enter EST.LTV">
                                    <!-- <span class="form-text text-muted">Please enter Cash on Cash Return</span> -->
                                </div>
                            </div>
                        </div>

                        <div class=" row divide">
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">Cash on Cash Return:</label>
                                    <input type="text" class="form-control" name="value4" placeholder="Enter Cash on Cash Return">
                                    <!-- <span class="form-text text-muted">Please enter Underwritten IRR</span> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                                <div class='form-group'>
                                    <label class="main-title">CAP Rate:</label>
                                    <input type="text" class="form-control" name="value5" placeholder="Enter CAP Rate">
                                    <!-- <span class="form-text text-muted">Please enter value5</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="row divide">
                            <div class="col-lg-12 col-md-12 col-sm-12 pb-3">

                                <div class='form-group'>
                                    <label class="main-title">Description:</label>
                                    <input type="text" class="form-control" maxlength="15" name="description" placeholder="Enter Description">
                                    <!-- <span class="form-text text-muted">Please enter Asking price</span> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-6 kt-align-right">
                                    <button type="reset" class="btn btn-primary" id="submit-project">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->


        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection

@section('page-js')


    <!--begin::Page Vendors(used by this page) -->

    <script>
        "user strict";
        var create_project = function(){

            var create_p= $('#create_project');

            var submit_new_project = function(){
                $('#submit-project').click(function(e){
                    console.log('sdfsd');
                    e.preventDefault();
                    var btn = $(this);
                    var form = btn.closest('form');
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

                    if (!form.valid()) {
                        return;
                    }

                    form.submit();


                });
            }

           

            return {
                init: function(){
                    submit_new_project();
            
                  }
            };

        }();
        jQuery(document).ready(function(){
            create_project.init();

        });
        $('#update_type').select2({
            placeholder: "Select a asset type",
            minimumResultsForSearch: Infinity
        });

        $('#category').select2({
            placeholder: "Select a category",
            minimumResultsForSearch: Infinity
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


    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
        <script src="{{asset('public/assets/metronic/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/metronic/js/demo1/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>
        {{-- <script src="{{asset('public/assets/metronic/js/demo3/pages/dashboard.js')}}" type="text/javascript"></script> --}}

    <!--end::Page Scripts -->
@endsection


