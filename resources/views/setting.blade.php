@extends('layout.master')

@section('custom-css')
<link href="{{asset('public/custom-css/file_upload.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Site Setting </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        {{-- <span class="kt-subheader__desc">Site setting</span> --}}
    {{-- <a href="{{url('/new_ticket')}}" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
            Add New
        </a> --}}
        <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
            <input type="text" class="form-control" placeholder="Search order..." id="generalSearch" required>
            <span class="kt-input-icon__icon kt-input-icon__icon--right">
                <span><i class="flaticon2-search-1"></i></span>
            </span>
        </div>
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
                            {{-- New Ticket --}}
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->

                    @csrf
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="kt-portlet kt-portlet--height-fluid">
                                    <div class="kt-portlet__head kt-portlet__head--noborder">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                            </h3>
                                        </div>

                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fit-y">

                                        <!--begin::Widget -->
                                        <div class="kt-widget kt-widget--user-profile-4">
                                            <div class="kt-widget__head">
                                                <div class="kt-widget__media">
                                                    <img class="kt-widget__img kt-hidden-" src="{{asset('storage/app/public/photos/'.$setting->logo_url)}}" alt="image" style="max-width:200px;max-height:200px;">
                                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-hidden">
                                                        JB
                                                    </div>
                                                </div>
                                                <div class="kt-widget__content">
                                                    <div class="kt-widget__section">
                                                        <div  class="kt-widget__username">
                                                            <span>Site Name : </span>
                                                            <span>{{$setting->site_name}}</span>
                                                        </div>
                                                        <div  class="kt-widget__username">
                                                            <span>Site domain : </span>
                                                            <span>{{$setting->site_domain}}</span>
                                                        </div>
                                                        <div  class="kt-widget__username">
                                                            <span>Email:</span>
                                                            <span>{{$setting->site_email}}</span>
                                                        </div>
                                                        <div  class="kt-widget__username">
                                                            <span>Phone : </span>
                                                            <span>{{$setting->site_address1}}</span>
                                                        </div>
                                                        <div  class="kt-widget__username">
                                                            <span>Address1 : </span>
                                                            <span>{{$setting->site_address2}}</span>
                                                        </div>
                                                        <div  class="kt-widget__username">
                                                            <span>Address2 : </span>
                                                            <span>{{$setting->site_address3}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Widget -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <form class="kt-form kt-form--label-right" id="site_setting" action="{{url('setting/update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" row ">
                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Site Name :</label>
                                            <input type="text" class="form-control" name="site_name" placeholder="Enter site Name" value="{{$setting->site_name}}" required>

                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Site Domain :</label>
                                            <input type="text" class="form-control" name="site_domain" placeholder="Enter site domain" value="{{$setting->site_domain}}" required>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Email address :</label>
                                            <input type="text" class="form-control" name="site_email" placeholder="Enter Email Address" value="{{$setting->site_email}}" required>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Phone :</label>
                                            <input type="text" class="form-control" name="site_address1" placeholder="Enter  Address" value="{{$setting->site_address1}}" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Address 1 :</label>
                                            <input type="text" class="form-control" name="site_address2" placeholder="Enter  Address" value="{{$setting->site_address2}}" required>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                            <label class="main-title">Address 2 :</label>
                                            <input type="text" class="form-control" name="site_address3" placeholder="Enter  Address" value="{{$setting->site_address3}}" required>

                                        </div>
                                        <div class="col-lg-12 kt-align-right pb-3">
                                            <button  class="btn btn-primary" id="submit-project">Update</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12"></div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <form class="kt-form kt-form--label-right" id="site_setting" action="{{url('setting/logo')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" row ">


                                        <div class="col-md-12 col-sm-12">
                                            <label class="main-title">Logo image</label>

                                            <div class="form-group file-area fileupload-group" >
                                                <input type="file"  name="photo"  required>
                                                <p>Drag your logo here (jpg, jpeg, png, gif, svg).</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 kt-align-right pb-3">
                                            <button  class="btn btn-primary" id="submit-project">Update</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>




                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">

                        </div>
                    </div>

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



        "user strict";
        var create_project = function(){

            var create_p= $('#site_setting');
            var submit_new_project = function(){
                $('#submit-project').click(function(e){
                    console.log('sdfsd');
                    e.preventDefault();
                    var btn = $(this);
                    var form = btn.closest('form');
                    console.log(form);
                    form.validate({
                        rules: {
                            site_domain:{
                                required:true,
                            }
                            site_name: {
                                required:true,
                            },
                            site_email:{
                                required:true,
                            },
                            site_address1:{
                                number: true,
                                required:true,
                            },
                            site_address1:{
                                required: true,
                            },
                            site_address2:{
                                required: true,
                            },
                            fileupload: {
                                required: true,
                            }

                        }
                    })

                    if (!form.valid()) {
                        return;
                    }

                    form.submit();


                });
            }

            var file_change = function(){
                $('.fileupload-group input').change(function () {
                    $('.fileupload-group p').text("A file has been selected");
                });
            }

            //public function
            return {
                init: function(){

                    submit_new_project();
                    file_change();

                }
            };


        }();

        jQuery(document).ready(function(){
            create_project.init();
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

    @if(isset($errors))
        @foreach ($errors->all() as $error)
        <script>
            swal.fire("{{ session()->get('error') }}", "Please confirm it.","error");
        </script>
        @endforeach
    @endif

    <!--begin::Page Scripts(used by this page) -->
        <script src="{{asset('public/assets/metronic/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/metronic/js/demo1/pages/components/extended/sweetalert2.js')}}" type="text/javascript"></script>


    <!--end::Page Scripts -->
@endsection


