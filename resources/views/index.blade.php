@extends('layout.master')
@section('page-css')
    <link href="{{asset('public/assets/metronic/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/metronic/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Dashboard</h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <span class="kt-subheader__desc">#XRS-45670</span>
            <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                Add New
            </a>
            <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                    <span><i class="flaticon2-search-1"></i></span>
                </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="#" class="btn kt-subheader__btn-secondary">Today</a>
                <a href="#" class="btn kt-subheader__btn-secondary">Month</a>
                <a href="#" class="btn kt-subheader__btn-secondary">Year</a>
                <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                    <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                    <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                    <i class="flaticon2-calendar-1"></i>
                </a>
                <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
                            </g>
                        </svg>

                        <!--<i class="flaticon2-plus"></i>-->
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                        <!--begin::Nav-->
                        <ul class="kt-nav">
                            <li class="kt-nav__head">
                                Add anything or jump to:
                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                    <span class="kt-nav__link-text">Order</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                    <span class="kt-nav__link-text">Ticket</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-link"></i>
                                    <span class="kt-nav__link-text">Goal</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                    <span class="kt-nav__link-text">Support Case</span>
                                    <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__foot">
                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>

                        <!--end::Nav-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

        <!--Begin::Dashboard 3-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-4">

                <!--begin:: Widgets/Trends-->
                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                    <div class="kt-portlet__head kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Trends
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                <span class="kt-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                <span class="kt-nav__link-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                <span class="kt-nav__link-text">Members</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                        <div class="kt-widget4 kt-widget4--sticky">
                            <div class="kt-widget4__chart">
                                <canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
                            </div>
                            <div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                        <img src="{{asset('public/assets/metronic/media/client-logos/logo3.png')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__title">
                                            Phyton
                                        </a>
                                        <span class="kt-widget4__sub">
                                            A Programming Language
                                        </span>
                                    </div>
                                    <span class="kt-widget4__ext">
                                        <span class="kt-widget4__number kt-font-danger">+$17</span>
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                        <img src="{{asset('public/assets/metronic/media/client-logos/logo1.png')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__title">
                                            FlyThemes
                                        </a>
                                        <span class="kt-widget4__sub">
                                            A Let's Fly Fast Again Language
                                        </span>
                                    </div>
                                    <span class="kt-widget4__ext">
                                        <span class="kt-widget4__number kt-font-danger">+$300</span>
                                    </span>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__img kt-widget4__img--logo">
                                        <img src="{{asset('public/assets/metronic/media/client-logos/logo2.png')}}" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__title">
                                            AirApp
                                        </a>
                                        <span class="kt-widget4__sub">
                                            Awesome App For Project Management
                                        </span>
                                    </div>
                                    <span class="kt-widget4__ext">
                                        <span class="kt-widget4__number kt-font-danger">+$6700</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Trends-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Sales Stats-->
                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                    <div class="kt-portlet__head kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Sales Stats
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Finance</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                <span class="kt-nav__link-text">Statistics</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                <span class="kt-nav__link-text">Events</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">HR</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                <span class="kt-nav__link-text">Notifications</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                                <span class="kt-nav__link-text">Files</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::Widget 6-->
                        <div class="kt-widget15">
                            <div class="kt-widget15__chart">
                                <canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
                            </div>
                            <div class="kt-widget15__items kt-margin-t-40">
                                <div class="row">
                                    <div class="col">
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                63%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Sales Grow
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress kt-widget15__chart-progress--sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                54%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Orders Grow
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress kt-progress--sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                41%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Profit Grow
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress kt-progress--sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                79%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Member Grow
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress kt-progress--sm">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="kt-widget15__desc">
                                            * lorem ipsum dolor sit amet consectetuer sediat elit
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Widget 6-->
                    </div>
                </div>

                <!--end:: Widgets/Sales Stats-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Top Locations-->
                <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Top Locations
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Finance</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                <span class="kt-nav__link-text">Statistics</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                <span class="kt-nav__link-text">Events</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">HR</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                <span class="kt-nav__link-text">Notifications</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                                <span class="kt-nav__link-text">Files</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget15">
                            <div class="kt-widget15__map">
                                <div id="kt_chart_latest_trends_map" style="height:320px;"></div>
                            </div>
                            <div class="kt-widget15__items kt-margin-t-30">
                                <div class="row">
                                    <div class="col">

                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                63%
                                            </span>
                                            <span class="kt-widget15__text">
                                                London
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <!--end::widget item-->
                                    </div>
                                    <div class="col">

                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                54%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Glasgow
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <!--end::widget item-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                41%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Dublin
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <!--end::widget item-->
                                    </div>
                                    <div class="col">

                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__stats">
                                                79%
                                            </span>
                                            <span class="kt-widget15__text">
                                                Edinburgh
                                            </span>
                                            <div class="kt-space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <!--end::widget item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Top Locations-->
            </div>
        </div>

        <!--End::Section-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Exclusive Datatable Plugin
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

                                    <!--begin::Nav-->
                                    <ul class="kt-nav">
                                        <li class="kt-nav__head">
                                            Export Options
                                            <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="kt-nav__separator"></li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                <span class="kt-nav__link-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                <span class="kt-nav__link-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-link"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                <span class="kt-nav__link-text">Support</span>
                                                <span class="kt-nav__link-badge">
                                                    <span class="kt-badge kt-badge--success">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__separator"></li>
                                        <li class="kt-nav__foot">
                                            <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                            <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>

                                    <!--end::Nav-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit">

                        <!--begin: Datatable -->
                        <div class="kt-datatable" id="kt_datatable_latest_orders"></div>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

        <!--End::Section-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-4">

                <!--begin:: Widgets/Finance Summary-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Finance Summary
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
                                Latest
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-link"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                                                <span class="kt-badge kt-badge--success">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget12">
                            <div class="kt-widget12__content">
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Annual Companies Taxes EMS</span>
                                        <span class="kt-widget12__value">$500,000</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Next Tax Review Date</span>
                                        <span class="kt-widget12__value">July 24,2017</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Total Annual Profit Before Tax</span>
                                        <span class="kt-widget12__value">$3,800,000</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Type Of Market Share</span>
                                        <span class="kt-widget12__value">Grossery</span>
                                    </div>
                                </div>
                                <div class="kt-widget12__item">
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Avarage Product Price</span>
                                        <span class="kt-widget12__value">$60,70</span>
                                    </div>
                                    <div class="kt-widget12__info">
                                        <span class="kt-widget12__desc">Satisfication Rate</span>
                                        <span class="kt-widget12__progress">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="kt-widget12__stat">
                                                63%
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Finance Summary-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Audit Log-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Latest Log
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content" role="tab">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
                                        Week
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">
                                        Month
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget4_tab11_content">
                                <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                    <div class="kt-list-timeline">
                                        <div class="kt-list-timeline__items">
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">12 new users registered</span>
                                                <span class="kt-list-timeline__time">Just now</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                                <span class="kt-list-timeline__time">14 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                                <span class="kt-list-timeline__text">Production server down</span>
                                                <span class="kt-list-timeline__time">3 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">Production server up</span>
                                                <span class="kt-list-timeline__time">5 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                                <span class="kt-list-timeline__time">7 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">12 new users registered</span>
                                                <span class="kt-list-timeline__time">Just now</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                                <span class="kt-list-timeline__time">14 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                                <span class="kt-list-timeline__text">Production server down</span>
                                                <span class="kt-list-timeline__time">3 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">Production server up</span>
                                                <span class="kt-list-timeline__time">5 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                                <span class="kt-list-timeline__time">7 hrs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget4_tab12_content">
                                <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                    <div class="kt-list-timeline">
                                        <div class="kt-list-timeline__items">
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">12 new users registered</span>
                                                <span class="kt-list-timeline__time">Just now</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                                <span class="kt-list-timeline__time">14 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                                <span class="kt-list-timeline__text">Production server down</span>
                                                <span class="kt-list-timeline__time">3 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">Production server up</span>
                                                <span class="kt-list-timeline__time">5 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                                <span class="kt-list-timeline__time">7 hrs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget4_tab13_content">
                                <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                    <div class="kt-list-timeline">
                                        <div class="kt-list-timeline__items">
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                                <span class="kt-list-timeline__time">7 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">12 new users registered</span>
                                                <span class="kt-list-timeline__time">Just now</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>
                                                <span class="kt-list-timeline__time">14 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                                <span class="kt-list-timeline__text">New invoice received</span>
                                                <span class="kt-list-timeline__time">20 mins</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                                <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>
                                                <span class="kt-list-timeline__time">1 hr</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                                <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                                <span class="kt-list-timeline__time">2 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                                <span class="kt-list-timeline__text">Production server down</span>
                                                <span class="kt-list-timeline__time">3 hrs</span>
                                            </div>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                                <span class="kt-list-timeline__text">Production server up</span>
                                                <span class="kt-list-timeline__time">5 hrs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Audit Log-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Blog-->
                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/product4.jpg)">
                            <h3 class="kt-widget19__title kt-font-light">
                                Introducing New Feature
                            </h3>
                            <div class="kt-widget19__shadow"></div>
                            <div class="kt-widget19__labels">
                                <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget19__wrapper">
                            <div class="kt-widget19__content">
                                <div class="kt-widget19__userpic">
                                    <img src="{{asset('public/assets/metronic/media//users/user1.jpg')}}" alt="">
                                </div>
                                <div class="kt-widget19__info">
                                    <a href="#" class="kt-widget19__username">
                                        Anna Krox
                                    </a>
                                    <span class="kt-widget19__time">
                                        UX/UI Designer, Google
                                    </span>
                                </div>
                                <div class="kt-widget19__stats">
                                    <span class="kt-widget19__number kt-font-brand">
                                        18
                                    </span>
                                    <a href="#" class="kt-widget19__comment">
                                        Comments
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget19__text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                            </div>
                        </div>
                        <div class="kt-widget19__action">
                            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Blog-->
            </div>
        </div>

        <!--End::Section-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-4">

                <!--begin:: Widgets/Download Files-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Download Files
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                                Latest
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-link"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                                                <span class="kt-badge kt-badge--success">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::k-widget4-->
                        <div class="kt-widget4">
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/doc.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Metronic Documentation
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/jpg.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Project Launch Event
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/pdf.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Full Developer Manual For 4.7
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/javascript.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Make JS Great Again
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/zip.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Download Ziped version OF 5.0
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget4__item">
                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                    <img src="{{asset('public/assets/metronic/media/files/pdf.svg')}}" alt="">
                                </div>
                                <a href="#" class="kt-widget4__title">
                                    Finance Report 2016/2017
                                </a>
                                <div class="kt-widget4__tools">
                                    <a href="#" class="btn btn-clean btn-icon btn-sm">
                                        <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--end::Widget 9-->
                    </div>
                </div>

                <!--end:: Widgets/Download Files-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/New Users-->
                <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                New Users
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
                                        Month
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget4_tab1_content">
                                <div class="kt-widget4">
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_4.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Anna Strong
                                            </a>
                                            <p class="kt-widget4__text">
                                                Visual Designer,Google Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_14.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Milano Esco
                                            </a>
                                            <p class="kt-widget4__text">
                                                Product Designer, Apple Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_11.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Nick Bold
                                            </a>
                                            <p class="kt-widget4__text">
                                                Web Developer, Facebook Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_1.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Wiltor Delton
                                            </a>
                                            <p class="kt-widget4__text">
                                                Project Manager, Amazon Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_5.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Nick Stone
                                            </a>
                                            <p class="kt-widget4__text">
                                                Visual Designer, Github Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget4_tab2_content">
                                <div class="kt-widget4">
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_2.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Kristika Bold
                                            </a>
                                            <p class="kt-widget4__text">
                                                Product Designer,Apple Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_13.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Ron Silk
                                            </a>
                                            <p class="kt-widget4__text">
                                                Release Manager, Loop Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_9.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Nick Bold
                                            </a>
                                            <p class="kt-widget4__text">
                                                Web Developer, Facebook Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_2.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Wiltor Delton
                                            </a>
                                            <p class="kt-widget4__text">
                                                Project Manager, Amazon Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                    </div>
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--pic">
                                            <img src="{{asset('public/assets/metronic/media/users/100_8.jpg')}}" alt="">
                                        </div>
                                        <div class="kt-widget4__info">
                                            <a href="#" class="kt-widget4__username">
                                                Nick Bold
                                            </a>
                                            <p class="kt-widget4__text">
                                                Web Developer, Facebook Inc
                                            </p>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-label-info">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/New Users-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Last Updates-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Latest Updates
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                                Today
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-link"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
                                                <span class="kt-badge kt-badge--success">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin::widget 12-->
                        <div class="kt-widget4">
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon-pie-chart-1 kt-font-info"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Metronic v6 has been arrived!
                                </a>
                                <span class="kt-widget4__number kt-font-info">+500</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon-safe-shield-protection  kt-font-success"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Metronic community meet-up 2019 in Rome.
                                </a>
                                <span class="kt-widget4__number kt-font-success">+1260</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon2-line-chart kt-font-danger"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Metronic Angular 7 version will be landing soon...
                                </a>
                                <span class="kt-widget4__number kt-font-danger">+1080</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon2-pie-chart-1 kt-font-primary"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    ale! Purchase Metronic at 70% off for limited time
                                </a>
                                <span class="kt-widget4__number kt-font-primary">70% Off!</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon2-rocket kt-font-brand"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Metronic VueJS version is in progress. Stay tuned!
                                </a>
                                <span class="kt-widget4__number kt-font-brand">+134</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon2-notification kt-font-warning"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Black Friday! Purchase Metronic at ever lowest 90% off for limited time
                                </a>
                                <span class="kt-widget4__number kt-font-warning">70% Off!</span>
                            </div>
                            <div class="kt-widget4__item">
                                <span class="kt-widget4__icon">
                                    <i class="flaticon2-file kt-font-success"></i>
                                </span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    Metronic React version is in progress.
                                </a>
                                <span class="kt-widget4__number kt-font-success">+13%</span>
                            </div>
                        </div>

                        <!--end::Widget 12-->
                    </div>
                </div>

                <!--end:: Widgets/Last Updates-->
            </div>
        </div>

        <!--End::Section-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-8">

                <!--begin:: Widgets/Best Sellers-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Best Sellers
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                                        Latest
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                                        Month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                                        All time
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product27.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Great Logo Designn
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Keenthemes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">19,200</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1046</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product22.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Branding Mockup
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic bootstrap themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">24,583</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">3809</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product15.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Awesome Mobile App
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.Lorem Ipsum Amet
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">210,054</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1103</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget5_tab2_content">
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product10.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Branding Mockup
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic bootstrap themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">24,583</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">3809</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product11.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Awesome Mobile App
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.Lorem Ipsum Amet
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">210,054</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1103</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product6.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Great Logo Designn
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Keenthemes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">19,200</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1046</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget5_tab3_content">
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product11.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Awesome Mobile App
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.Lorem Ipsum Amet
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">210,054</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1103</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product6.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Great Logo Designn
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic admin themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Keenthemes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">19,200</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">1046</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="{{asset('public/assets/metronic/media//products/product10.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                    Branding Mockup
                                                </a>
                                                <p class="kt-widget5__desc">
                                                    Metronic bootstrap themes.
                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Author:</span>
                                                    <span class="kt-font-info">Fly themes</span>
                                                    <span>Released:</span>
                                                    <span class="kt-font-info">23.08.17</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">24,583</span>
                                                <span class="kt-widget5__sales">sales</span>
                                            </div>
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number">3809</span>
                                                <span class="kt-widget5__votes">votes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Best Sellers-->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Company Summary-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Company Summary
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
                                Export
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Finance</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">HR</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget13">
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc">
                                    Company Name
                                </span>
                                <span class="kt-widget13__text kt-widget13__text--bold">
                                    Loop Inc.
                                </span>
                            </div>
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc kt-align-right">
                                    Annual Revenue:
                                </span>
                                <span class="kt-widget13__text kt-widget13__text--bold">
                                    $520,000
                                </span>
                            </div>
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc">
                                    Business Description:
                                </span>
                                <span class="kt-widget13__text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </span>
                            </div>
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc">
                                    Employee Amount:
                                </span>
                                <span class="kt-widget13__text kt-widget13__text--bold">
                                    1,300
                                </span>
                            </div>
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc">
                                    Emal:
                                </span>
                                <span class="kt-widget13__text">
                                    supporet@keenthemes.com
                                </span>
                            </div>
                            <div class="kt-widget13__item">
                                <span class="kt-widget13__desc">
                                    Phone:
                                </span>
                                <span class="kt-widget13__text  kt-font-brand kt-widget13__text--bold">
                                    (0) 123 456 78 90
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Company Summary-->
            </div>
        </div>

        <!--End::Section-->

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-8">

                <!--begin:: Widgets/User Progress -->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                User Progress
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">
                                        Week
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget31_tab1_content">
                                <div class="kt-widget31">
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_4.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Anna Strong
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Visual Designer,Google Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>63%</span>
                                                    <span>London</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_14.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Milano Esco
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Product Designer, Apple Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>33%</span>
                                                    <span>Paris</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic kt-widget4__pic--pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_11.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Nick Bold
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Web Developer, Facebook Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>13%</span>
                                                    <span>London</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic kt-widget4__pic--pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_1.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Wiltor Delton
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Project Manager, Amazon Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <div class="kt-widget31__stats">
                                                    <span>93%</span>
                                                    <span>New York</span>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_6.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Sam Stone
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Project Manager, Kilpo Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <div class="kt-widget31__stats">
                                                    <span>50%</span>
                                                    <span>New York</span>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget31_tab2_content">
                                <div class="kt-widget31">
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic kt-widget4__pic--pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_11.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Nick Bold
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Web Developer, Facebook Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>13%</span>
                                                    <span>London</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic kt-widget4__pic--pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_1.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Wiltor Delton
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Project Manager, Amazon Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <div class="kt-widget31__stats">
                                                    <span>93%</span>
                                                    <span>New York</span>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_14.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Milano Esco
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Product Designer, Apple Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>33%</span>
                                                    <span>Paris</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_6.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Sam Stone
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Project Manager, Kilpo Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <div class="kt-widget31__stats">
                                                    <span>50%</span>
                                                    <span>New York</span>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget31__item">
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__pic">
                                                <img src="{{asset('public/assets/metronic/media/users/100_4.jpg')}}" alt="">
                                            </div>
                                            <div class="kt-widget31__info">
                                                <a href="#" class="kt-widget31__username">
                                                    Anna Strong
                                                </a>
                                                <p class="kt-widget31__text">
                                                    Visual Designer,Google Inc
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget31__content">
                                            <div class="kt-widget31__progress">
                                                <a href="#" class="kt-widget31__stats">
                                                    <span>63%</span>
                                                    <span>London</span>
                                                </a>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/User Progress -->
            </div>
            <div class="col-xl-4">

                <!--begin:: Widgets/Sales States-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Sales Stats
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                <span class="kt-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                <span class="kt-nav__link-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                <span class="kt-nav__link-text">Members</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget6">
                            <div class="kt-widget6__head">
                                <div class="kt-widget6__item">
                                    <span>Sceduled</span>
                                    <span>Count</span>
                                    <span>Amount</span>
                                </div>
                            </div>
                            <div class="kt-widget6__body">
                                <div class="kt-widget6__item">
                                    <span>16/13/17</span>
                                    <span>67</span>
                                    <span class="kt-font-success kt-font-bold">$14,740</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>02/28/17</span>
                                    <span>120</span>
                                    <span class="kt-font-brand kt-font-bold">$11,002</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>03/06/17</span>
                                    <span>32</span>
                                    <span class="kt-font-warning kt-font-bold">$10,900</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>10/21/17</span>
                                    <span>130</span>
                                    <span class="kt-font-danger kt-font-bold">$14,740</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>01/02/17</span>
                                    <span>5</span>
                                    <span class="kt-font-info kt-font-bold">$18,540</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>03/06/17</span>
                                    <span>32</span>
                                    <span class="kt-font-danger kt-font-bold">$10,900</span>
                                </div>
                                <div class="kt-widget6__item">
                                    <span>12/31/17</span>
                                    <span>201</span>
                                    <span class="kt-font-success kt-font-bold">$25,609</span>
                                </div>
                            </div>
                            <div class="kt-widget6__foot">
                                <div class="kt-widget6__action kt-align-right">
                                    <a href="#" class="btn btn-label-brand btn-sm btn-bold">Export...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Sales States-->
            </div>
        </div>

        <!--End::Section-->

        <!--End::Dashboard 3-->
    </div>

    <!-- end:: Content -->

    <!-- end:: Content -->
</div>
@endsection

@section('page-js')
    <!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		 <script src="{{asset('public/assets/metronic/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>


		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->

		 <script src="{{asset('public/assets/metronic/vendors/custom/js/vendors/bootstrap-notify.init.js')}}" type="text/javascript"></script>
		 <script src="{{asset('public/assets/metronic/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
		 <script src="{{asset('public/assets/metronic/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
		 <script src="{{asset('public/assets/metronic/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>


		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		 <script src="{{asset('public/assets/metronic/js/demo3/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		 {{-- <script src="{{asset('public/assets/metronic/js/demo3/pages/dashboard.js')}}" type="text/javascript"></script> --}}

		<!--end::Page Scripts -->
@endsection


