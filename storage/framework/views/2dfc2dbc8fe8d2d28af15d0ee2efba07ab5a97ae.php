
<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  <?php if(isset($active) && $active == 1): ?> kt-menu__item--active <?php endif; ?> " aria-haspopup="true"><a href="<?php echo e(url('/card/index')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">New Card</span></a></li>
                <li class="kt-menu__item   <?php if(isset($active) && $active ==  2): ?> kt-menu__item--active <?php endif; ?> " aria-haspopup="true"><a href="<?php echo e(url('/card/list')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">Card List</span></a></li>
                <li class="kt-menu__item  <?php if(isset($active) && $active ==  3): ?> kt-menu__item--active <?php endif; ?> " aria-haspopup="true"><a href="<?php echo e(url('/card/history')); ?>" class="kt-menu__link "><span class="kt-menu__link-text">Card History</span></a></li>


            </ul>
        </div>
    </div>

    <!-- end: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">


        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                    <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
                    <img class="kt-hidden" alt="Pic" src="<?php echo e(asset('public/assets/metronic/media/users/300_25.jpg')); ?>" />

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><?php echo e(strtoupper(substr(Auth::user()->name,0,1))); ?></span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo e(asset('public/assets/metronic/media/bg/bg-1.jpg')); ?>)">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="<?php echo e(asset('public/assets/metronic/media/users/300_25.jpg')); ?>" />

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><?php echo e(strtoupper(substr(Auth::user()->name,0,1))); ?></span>
                    </div>
                    <div class="kt-user-card__name">
                        <?php echo e(Auth::user()->name); ?><br>
                        <?php echo e(Auth::user()->email); ?>



                    </div>
                    
                </div>

                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <a href="<?php echo e(url('/account')); ?>" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Profile
                            </div>
                            <div class="kt-notification__item-time">
                                Account settings and more
                            </div>
                        </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                        <a href="<?php echo e(url('logout')); ?>"  class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                        <!-- <a href="<?php echo e(url('delAccount')); ?>"  class="btn btn-clean btn-sm btn-bold">Delete account</a> -->
                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>

        <!--end: User Bar -->
    </div>

    <!-- end:: Header Topbar -->
</div>

<!-- end:: Header -->

<!-- begin :: loading spinner -->
<div id="main-loading">
    <div class="load_ctn" >
        <div class="m-loader m-loader--primary" style="width: 30px;display: block;"></div>
    </div>
</div>
<!-- end :: loading spinner -->

<?php /**PATH /home/remiu49263hb/public_html/resources/views/layout/page-header.blade.php ENDPATH**/ ?>