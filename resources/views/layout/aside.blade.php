<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            <a href="{{url('index')}}">
                <img alt="Logo" id='top_logo' src="{{asset('storage/app/public/photos/'.$setting->logo_url)}}" />
            </a>
        </div>
    </div>

    <!-- end:: Aside -->

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
            <ul class="kt-menu__nav ">

                @if(Auth::user()->permission == 1)
                <li class="kt-menu__item   kt-menu__item--submenu @if(isset($active) && ($active == 1 || $active ==2 || $active ==3)) kt-menu__item--active @endif " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-layers-1"></i><span class="kt-menu__link-text">Cards</span></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Cards</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('card/index')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">New Card</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/card/list')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Card List</span></a></li>

                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/card/history')}}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Card History</span></a></li>

                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->member == 1)

                <li class="kt-menu__item   kt-menu__item--submenu @if(isset($active) && $active == 6) kt-menu__item--active @endif " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{url('/messages')}}" class="kt-menu__link"><i class="kt-menu__link-icon flaticon-email"></i><span class="kt-menu__link-text">Message</span></a>
                </li>

                <li class="kt-menu__item   kt-menu__item--submenu @if(isset($active) && $active == 4) kt-menu__item--active @endif " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{url('/users')}}" class="kt-menu__link"><i class="kt-menu__link-icon fa fa-user"></i><span class="kt-menu__link-text">Users</span></a>
                </li>



                <li class="kt-menu__item  @if(isset($active) && $active == 5) kt-menu__item--active @endif " aria-haspopup="true"><a href="{{url('setting')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-settings"></i><span class="kt-menu__link-text">Setting</span></a></li>
                @endif

                <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('/logout')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-logout"></i><span class="kt-menu__link-text">Logs</span></a></li>
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->
