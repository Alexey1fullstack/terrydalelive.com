
<?php $__env->startSection('main-content'); ?>
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

            <!--begin::Aside-->
            <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url('<?php echo e(asset('public/assets/metronic/media/bg/bg-4.jpg')); ?>');">
                <div class="kt-grid__item">
                    <a href="<?php echo e(url('/')); ?>" class="kt-login__logo">
                        <img src="<?php echo e(asset('storage/app/public/photos/'.$setting->logo_url)); ?>" width="70px">
                    </a>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                    <div class="kt-grid__item kt-grid__item--middle">
                        <h3 class="kt-login__title">Welcome to <?php echo e($setting->site_name); ?>!</h3>

                    </div>
                </div>
                <div class="kt-grid__item">
                    <div class="kt-login__info">
                        <div class="kt-login__copyright">
                            &copy <?php echo e(date('Y')); ?> <?php echo e($setting->site_domain); ?>

                        </div>
                        
                    </div>
                </div>
            </div>

            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper" style="background-image: url('<?php echo e(asset('public/assets/metronic/media/bg/bg-3.jpg')); ?>');">

                <!--begin::Head-->
                <div class="kt-login__head">
                    <span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;
                    <a href="<?php echo e(url('signup')); ?>" class="kt-link kt-login__signup-link">Sign Up!</a>
                </div>

                <!--end::Head-->

                <!--begin::Body-->
                <div class="kt-login__body">

                    <!--begin::Signin-->
                    <div class="kt-login__form">
                        <div class="kt-login__title">
                            <h3>Sign In</h3>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form" action="<?php echo e(url('/login')); ?>" method='post' novalidate="novalidate">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="email" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>

                            <!--begin::Action-->
                            <div class="kt-login__actions">
                                <!-- <a href="#" class="kt-link kt-login__link-forgot">
                                    Forgot Password ?
                                </a> -->
                                <button id="kt_login_signin_submit" type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
                            </div>

                            <!--end::Action-->
                        </form>

                        <!--end::Form-->

                        <!--begin::Divider-->
                        

                        <!--end::Divider-->

                        <!--begin::Options-->
                        

                        <!--end::Options-->
                    </div>

                    <!--end::Signin-->
                </div>

                <!--end::Body-->
            </div>

            <!--end::Content-->
        </div>
    </div>
</div>

<!-- end:: Page -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>
<script src="<?php echo e(asset('public/assets/metronic/js/demo1/pages/login/login-general.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/remiu49263hb/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>