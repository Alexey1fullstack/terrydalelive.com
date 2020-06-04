

<?php $__env->startSection('custom-css'); ?>
<link href="<?php echo e(asset('public/custom-css/file_upload.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Account Setting </h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>

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
   <!-- begin:: Content -->
   <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>

        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

            <!--begin:: Widgets/Applications/User/Profile1-->
            <div class="kt-portlet kt-portlet--height-fluid-">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        </h3>
                    </div>

                </div>
                <div class="kt-portlet__body kt-portlet__body--fit-y">

                    <!--begin::Widget -->
                    <div class="kt-widget kt-widget--user-profile-1">
                        <div class="kt-widget__head">
                            <div class="kt-widget__media">
                                <?php if(isset($user->photo) && !is_null($user->photo)): ?>
                                    <img  alt="Pic" src="<?php echo e(asset('public/assets/metronic/media/users/'.$user->photo)); ?>" />
                                <?php else: ?>
                                    <img  alt="Pic" src="<?php echo e(asset('public/assets/metronic/media/users/default.jpg')); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__section">
                                    <a href="#" class="kt-widget__username">
                                        <?php echo e($user->name); ?>

                                        <i class="flaticon2-correct kt-font-success"></i>
                                    </a>
                                    <span class="kt-widget__subtitle">
                                        <?php if($user->member == 0): ?>
                                            General user
                                        <?php elseif($user->membe ==1): ?>
                                            Manager
                                        <?php endif; ?>

                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__content">
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Email:</span>
                                    <a class="kt-widget__data"><?php echo e($user->email); ?></a>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Phone:</span>
                                    <a  class="kt-widget__data"><?php echo e($user->phone_num); ?></a>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Address:</span>
                                    <span class="kt-widget__data"><?php echo e($user->location); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--end::Widget -->
                </div>
            </div>

            <!--end:: Widgets/Applications/User/Profile1-->
        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Account Information <small>change your account settings</small></h3>
                            </div>

                        </div>
                        <form class="kt-form kt-form--label-right" id="profile_update_form" action="<?php echo e(url('/account')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div >
                                                    <input class="form-control" name="name" placeholder="Name" type="text" value="<?php echo e($user->name); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input type="text" class="form-control" value="<?php echo e($user->email); ?>" placeholder="Email" aria-describedby="basic-addon1" name="email">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <input type="text" name="phone_num" class="form-control" value="<?php echo e($user->phone_num); ?>" placeholder="Phone number" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <textarea class="form-control" name="location" id="location" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 160px;"><?php echo e($user->location); ?></textarea>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" id="profile_update_btn" class="btn btn-success">Submit</button>&nbsp;
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End:: App Content-->
        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">User security<small>change your password</small></h3>
                            </div>

                        </div>
                        <form class="kt-form kt-form--label-right" id="password_update_form" action="<?php echo e(url('/password/update')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div >
                                                    <input class="form-control" id='current_password' name="current_password" placeholder="current_password" type="password" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div >
                                                    <input class="form-control" id="new_password" name="new_password" placeholder="new_password" type="password" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Confirm New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div >
                                                    <input class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm_password" type="password" >
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" id="password_update_btn" class="btn btn-success">Submit</button>&nbsp;
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>

    <!--End::App-->
</div>

<!-- end:: Content -->
</div>


<!-- end:: Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script>
        "user strict";
        var create_project = function(){


            var update_profile = function(){
                $('#profile_update_btn').click(function(e){
                    e.preventDefault();
                    var btn = $(this);
                    var form = btn.closest('form');
                    form.validate({
                        rules: {
                            name: {
                                required:true,
                            },
                            email:{
                                required:true,
                            },
                            phone_num:{

                                required:true,
                            },
                            location:{
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

            var update_password = function(){
                $('#password_update_btn').click(function(e){
                    e.preventDefault();
                    if($('#new_password').val() != $('#confirm_password').val()){
                        swal.fire("Please confirm your new password again.", "Please confirm it.","error");
                        return ;
                    }
                    var btn = $(this);
                    var form = btn.closest('form');
                    form.validate({
                        rules: {
                            current_password: {
                                required:true,
                            },
                            new_password:{
                                required:true,
                            },
                            confirm_password:{

                                required:true,
                            },
                        }
                    })

                    if (!form.valid()) {
                        return;
                    }

                    form.submit();


                });
            }


            //public function
            return {
                init: function(){

                    update_profile();
                    update_password();

                }
            };
        }();


        jQuery(document).ready(function(){
            create_project.init();
        });

    </script>


    <?php if(session()->has('error')): ?>
        <script>
            swal.fire("<?php echo e(session()->get('error')); ?>", "Please confirm it.","error");
        </script>
    <?php endif; ?>

    <?php if(session()->has('success')): ?>
        <script>
            swal.fire("<?php echo e(session()->get('success')); ?>", "Please confirm it.","success");
        </script>
    <?php endif; ?>

    <?php if(isset($errors)): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            swal.fire("<?php echo e(session()->get('error')); ?>", "Please confirm it.","error");
        </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <!--begin::Page Scripts(used by this page) -->
        <script src="<?php echo e(asset('public/assets/metronic/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('public/assets/metronic/js/demo1/pages/components/extended/sweetalert2.js')); ?>" type="text/javascript"></script>


    <!--end::Page Scripts -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remiu49263hb/public_html/resources/views/profile.blade.php ENDPATH**/ ?>