@extends('f_layout.main')

@section('custom-css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/assets/frontend/owl/owl.carousel.min.css')}}">
    {{-- <!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{asset('public/assets/metronic/css/demo1/style.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
    <!-- Custom CSS -->
    <link href="{{asset('public/assets/frontend/style.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .category-tab a [aria-expanded= 'true']{
            font-weight: bold;
        }

        .category-tab a [aria-expanded= 'false']{
            font-weight: bold;            
        }
        .category-tab a{
            color:black;
        }

        .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus{
            outline: 0px auto -webkit-focus-ring-color; 
        }
        
        .head-title{
            padding:18px;
        }

        #loading_time{
            display: none;
        }
        @media (min-width: 768px){
            .modal-dialog {
                width: 548px !important;
            }
            .about-us-desc{
                font-size: 22px;
                display: block;
                margin-top: 15px;
                line-height: 21px;
                padding-bottom: 150px;
                color: white;
            }

            .hero {
                min-height: 550px;
                text-align: center;
            }

            .c-title {
                font-size: 50px;
                margin-top: 50px;
            }
        }

        @media (min-width: 1025px) and (max-width: 1280px) {
            .about-us-desc{
                font-size:16px;
                margin-top:15px;
            }
        }

        /* 
        ##Device = Tablets, Ipads (portrait)
        ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) {
            .about-us-desc{
                font-size:20px;
                margin-top:15px;
            }
        }

        /* 
        ##Device = Tablets, Ipads (landscape)
        ##Screen = B/w 768px to 1024px
        */

        @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
            .about-us-desc{
                font-size:20px;
                margin-top:15px;
            }
        }

        /* 
        ##Device = Low Resolution Tablets, Mobiles (Landscape)
        ##Screen = B/w 481px to 767px
        */

        @media (min-width: 481px) and (max-width: 767px) {
            .about-us-desc{
                font-size:20px;
                margin-top:15px;
            }
        }

        @media (max-width: 481px){
            .about-us-desc{
                font-size:15px;
                margin-top:15px;
            }

            .head-section{
                min-height:800px;
            }

            .hero {
                min-height: 550px;
                text-align: center;
            }

            .head-title{
                font-size:30px;
            }

            .c-title {
                font-size: 50px;
                margin-top: 0px;
            }

            .s-title{
                font-size:25px;
            }

            .logo img{
                max-width:190px;
            }
        }
    </style>
    {{-- sweetalert CSS--}}
    <link href="{{asset('public/assets/metronic/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('custom-js')
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('public/assets/frontend/owl/owl.carousel.min.js')}}" type="text/javascript"></script>

    
    
@endsection

@section('main-content')

    {{-- <div class="row" style="margin-top: 20px;">
        <div class="s-title col-md-8 col-md-offset-2" style="padding-bottom: 10px;">
        About Us
        </div>
        <div class="col-md-10 col-sm-10 col-md-offset-1">
            <span class="about-us-desc">
            Proactive, impactive, and now, interactive – Terrydale Live is the definitive next step on our journey to transform the way you do real estate. Our interactive marketplace provides live updates on the most competitive commercial financing options and structures consolidated from our network of private investors, real estate brokers, syndicators, REITS, institutional investors seeking terms and options on opportunities across asset classes, and other partners. See the information we’ve used to keep our fingers to the pulse of the market and close top level deals for clients across the U.S. Terrydale Live keeps you one step ahead of peers and competitors with an exclusive look at newly quoted opportunities for acquisitions and refinances before, during, and after they’ve hit the shelves.
    A primary tenet of Terrydale Capital and its related services is the privacy and anonymity we offer our verified sources. Consequently, there will be cases where very limited information will accompany a transaction. For active transactions on which we have the authority to provide additional details, our ‘learn more’ feature can be used to connect you with a decision-maker (broker or owner) that will carry out the due diligence necessary to get you in front of a deal that may not have hit the market.
    We are in the process of creating a private deal room for preferred investors that will have even more access to select opportunities with continuous updates. Stay tuned!
            </span>
        </div>
    </div> --}}
    <section class='dynamic-widget float-in show-on-scroll'>
        <script LANGUAGE='JavaScript' type='text/javascript'
        SRC='https://www.thefinancials.com/ShowPanel.aspx?pid=TERRYDAL&amp;id=3611&amp;tilewidth=200&amp;bgcolor=FFFFFF&amp;fontcolor=000000&amp;bordercolor=222D37&amp;showvalueonrow2=true&amp;scrollSpeedFromZeroToTen=5&amp;showchange=true&amp;upchangecolor=025E11&amp;downchangecolor=990000&amp;nochangecolor=323232&amp;excludearrows=true&amp;adddividers=true&amp;bordercolor=FFFFFF&amp;nopreview=false&amp;showgraphsinnewwindow=true'>
        
        </script>
    <section class="has-modal" id="slide-section">
        <!--<div class="spacer50"></div>-->
        <div class="spacer50"></div>
        <div class="container">
            <div style=' text-align:center;' class='float-in show-on-scroll row'>
                <div class="s-title col-md-6 col-md-offset-3">
                Newly Quoted Deals
                </div>
            </div>
            <div>
                <div id="exTab2" class="container spacer30">	
                    <ul class="nav nav-tabs category-tab">
                        <li class="active ">
                            <a  href="#1" data-toggle="tab">All Cards</a>
                        </li>
                        <li><a href="#2" data-toggle="tab">Purchase Quote</a>
                        </li>
                        <li><a href="#3" data-toggle="tab">Refinance Quote</a>
                        </li>
                        <li><a href="#4" data-toggle="tab">Active on Market</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content ">
                        <div class="tab-pane active" id="1">
                            {{-- Begin : slide 1 --}}
                            <div class="ow-slide slideInUp animated  " id="slide1">
                                <div class="owl-carousel  float-in show-on-scroll">
                                    @if(!empty($cards1))
                                    @foreach ($cards1 as $row)

                                            <div class="col-md-12">
                                                <div class="card opened-card" >
                                                    <div class="box-header ">
                                                        
                                                        <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                                        <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                                    </div>
                                                    <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}" card-type="{{$row->get_assettype->icon_name}}">
                                                    
                                                        <div class="card-list ">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key location">
                                                                    Location:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center  text-center">
                                                                <span class="card-name location card-value1">{{$row->value1}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    @if($row->category ==1)
                                                                        Asking Price
                                                                    @elseif($row->category == 2) 
                                                                        Asking Price
                                                                    @elseif($row->category == 3) 
                                                                        Purchase Price
                                                                    @endif 
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name  card-value2">{{$row->value2}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    EST. LTV:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value3">{{$row->value3}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    @if($row->category ==1)
                                                                    CoC Return
                                                                    @elseif($row->category == 2) 
                                                                        CoC Return
                                                                    @elseif($row->category == 3) 
                                                                        Interest Rate
                                                                    @endif 
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value4">{{$row->value4}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    CAP Rate:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value5">{{$row->value5}}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="t-center">
                                                        <button   class="modal_submit btn initial-btn contact_us">Contact Us</button>
                                                    </div>
                                                    <div class="reference-number">
                                                        <div class="col-xs-12 text-center"><span>
                                                            @if($row->category ==1)
                                                                Refi Quote
                                                            @elseif($row->category == 2) 
                                                                Purchase Quote 
                                                            @elseif($row->category == 3) 
                                                                Active on Market 
                                                            @endif 
                                                            #{{$row->id+1000}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- End : slide 1 --}}
                            {{-- Begin : slide 2 --}}
                            <div class="ow-slide" id="slide2">

                                <div class="owl-carousel float-in show-on-scroll">
                                    @if(!empty($cards2))
                                    @foreach ($cards2 as $row)

                                        <div class="col-md-12">
                                            <div class="card opened-card">
                                                <div class="box-header ">
                                                    
                                                    <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                                    <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                                </div>
                                                <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}"  card-type="{{$row->get_assettype->icon_name}}">
                                                    
                                                    <div class="card-list">
                                                        <div class="col-xs-6 text-center">
                                                            <span class="pre-key location">
                                                                Location:
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-6 text-center  text-center">
                                                            <span class="card-name location card-value1">{{$row->value1}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-list">
                                                        <div class="col-xs-6 text-center">
                                                            <span class="pre-key">
                                                                Asking Price:
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-6 text-center">
                                                            <span class="card-name  card-value2">{{$row->value2}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-list">
                                                        <div class="col-xs-6 text-center">
                                                            <span class="pre-key">
                                                                EST. LTV:
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-6 text-center">
                                                            <span class="card-name   card-value3">{{$row->value3}}%</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-list">
                                                        <div class="col-xs-6 text-center">
                                                            <span class="pre-key">
                                                            CoC Return:
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-6 text-center">
                                                            <span class="card-name   card-value4">{{$row->value4}}%</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-list">
                                                        <div class="col-xs-6 text-center">
                                                            <span class="pre-key">
                                                                CAP Rate:
                                                            </span>
                                                        </div>
                                                        <div class="col-xs-6 text-center">
                                                            <span class="card-name   card-value5">{{$row->value5}}%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-center">
                                                    <button    class="btn initial-btn modal_submit">Contact Us</button>
                                                </div>
                                                <div class="reference-number">
                                                    <div class="col-xs-12 text-center">
                                                        <span>@if($row->category ==1)Refi Quote @elseif($row->category == 2) Purchase Quote @elseif($row->category == 3) Active on Market @endif #{{$row->id+1000}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- End : slide 2 --}}
                        </div>
                        <div class="tab-pane" id="2">
                            {{-- Begin : slide 1 --}}
                                <div class="ow-slide slideInUp animated  " id="purchase_slide">
                                    <div class="owl-carousel  float-in show-on-scroll">
                                        @if(!empty($active_cards))
                                        @foreach ($active_cards as $row)
                                            @if($row->category == 2)    
                                                <div class="col-md-12">
                                                    <div class="card opened-card">
                                                        <div class="box-header ">
                                                            <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                                            <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                                        </div>
                                                        <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}" card-type="{{$row->get_assettype->icon_name}}">
                                                        
                                                            <div class="card-list">
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="pre-key location">
                                                                        Location:
                                                                    </span>
                                                                </div>
                                                                <div class="col-xs-6 text-center  text-center">
                                                                    <span class="card-name  location card-value1">{{$row->value1}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-list">
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="pre-key">
                                                                        Loan Amount:
                                                                    </span>
                                                                </div>
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="card-name  card-value2">{{$row->value2}}</span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="card-list">
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="pre-key">
                                                                    Interest Rate:
                                                                    </span>
                                                                </div>
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="card-name   card-value4">{{$row->value4}}%</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-list">
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="pre-key">
                                                                        EST.LTV:
                                                                    </span>
                                                                </div>
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="card-name   card-value3">{{$row->value3}}%</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-list">
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="pre-key">
                                                                        Cap Rate:
                                                                    </span>
                                                                </div>
                                                                <div class="col-xs-6 text-center">
                                                                    <span class="card-name   card-value5">{{$row->value5}}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="t-center">
                                                            <button   class="modal_submit btn initial-btn contact_us">Contact Us</button>
                                                        </div>
                                                        
                                                        <div class="reference-number">
                                                            
                                                            <div class="col-xs-12 text-center"><span>@if($row->category ==1)Refi Quote @elseif($row->category == 2) Purchase Quote @elseif($row->category == 3) Active on Market @endif #{{$row->id+1000}} </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
    
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                {{-- End : slide 1 --}}
                            </div>
                        <div class="tab-pane" id="3">
                            {{-- Begin : slide 1 --}}
                            <div class="ow-slide slideInUp animated  " id="refi_slide">
                                <div class="owl-carousel  float-in show-on-scroll">
                                    @if(!empty($active_cards))
                                    @foreach ($active_cards as $row)
                                        @if($row->category == 1)

                                            <div class="col-md-12">
                                                <div class="card opened-card">
                                                    <div class="box-header ">
                                                        
                                                        <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                                        <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                                    </div>
                                                    <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}" card-type="{{$row->get_assettype->icon_name}}">
                                                    
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key location">
                                                                    Location:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center  text-center">
                                                                <span class="card-name  location card-value1">{{$row->value1}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    Loan Amount:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name  card-value2">{{$row->value2}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    Interest Rate:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value4">{{$row->value4}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    EST. LTV:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value3">{{$row->value3}}%</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    Amortization:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value5">{{$row->value5}}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="t-center">
                                                        <button   class="modal_submit btn initial-btn contact_us">Contact Us</button>
                                                    </div>
                                                    
                                                    <div class="reference-number">
                                                        
                                                        <div class="col-xs-12 text-center"><span>@if($row->category ==1)Refi Quote @elseif($row->category == 2) Purchase Quote @elseif($row->category == 3) Active on Market @endif #{{$row->id+1000}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- End : slide 1 --}}
                        </div>                        
                        <div class="tab-pane" id="4">
                        {{-- Begin : slide 1 --}}
                            <div class="ow-slide slideInUp animated  " id="active_slide">
                                <div class="owl-carousel  float-in show-on-scroll">
                                    @if(!empty($active_cards))
                                    @foreach ($active_cards as $row)
                                        @if($row->category == 3)

                                            <div class="col-md-12">
                                                <div class="card opened-card">
                                                    <div class="box-header ">
                                                        
                                                        <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                                        <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                                    </div>
                                                    <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}" card-type="{{$row->get_assettype->icon_name}}">
                                                    
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key location">
                                                                    Location:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center  text-center">
                                                                <span class="card-name  location card-value1">{{$row->value1}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    Loan Amount:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name  card-value2">{{$row->value2}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                Interest Rate:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value4">{{$row->value4}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    EST. LTV:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value3">{{$row->value3}}%</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="card-list">
                                                            <div class="col-xs-6 text-center">
                                                                <span class="pre-key">
                                                                    Cap Rate:
                                                                </span>
                                                            </div>
                                                            <div class="col-xs-6 text-center">
                                                                <span class="card-name   card-value5">{{$row->value5}}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="t-center">
                                                        <button   class="modal_submit btn initial-btn contact_us">Contact Us</button>
                                                    </div>
                                                    
                                                    <div class="reference-number">
                                                        
                                                        <div class="col-xs-12 text-center"><span>@if($row->category ==1)Refi Quote @elseif($row->category == 2) Purchase Quote @elseif($row->category == 3) Active on Market @endif #{{$row->id+1000}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- End : slide 1 --}}
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    @if(isset($cards3) && count($cards3) > 0)
    <section class="has-modal" id="deal-section">
        <div class="spacer50"></div>
        <div class="container">
            <div class="float-in show-on-scroll">
                <div class="s-title">Closed Deals</div>
                <div class="ow-slide closed-slide">
                    <div class="owl-carousel">
                        @foreach ($cards3 as $row)
                            <div class="col-md-12">
                                <div class="card closed-card" >
                                    <div class="box-header ">
                                        <img class="card-icon" src="{{asset('public/assets/imgs/'.$row->get_assettype->name).'.jpg'}}" alt="ddd" width="50px">
                                        <span class="card-name card-type">{{$row->get_assettype->icon_name}}</span>
                                    </div>
                                    <div class="card-box"  id="item{{$row->id}}" data-card-state = "{{$row->value1}}"  card-type="{{$row->get_assettype->icon_name}}">
                                        
                                        <div class="card-list">
                                            <div class="col-xs-6 text-center">
                                                <span class="pre-key location">
                                                    Location:
                                                </span>
                                            </div>
                                            <div class="col-xs-6 text-center   text-center">
                                                <span class="card-name  location card-value1">{{$row->value1}}</span>
                                            </div>
                                        </div>
                                        <div class="card-list">
                                            <div class="col-xs-6 text-center">
                                                <span class="pre-key">
                                                    Purchase Price:
                                                </span>
                                            </div>
                                            <div class="col-xs-6 text-center">
                                                <span class="card-name  card-value2">{{$row->value2}}</span>
                                            </div>
                                        </div>
                                        <div class="card-list">
                                            <div class="col-xs-6 text-center">
                                                <span class="pre-key">
                                                Interest Rate:
                                                </span>
                                            </div>
                                            <div class="col-xs-6 text-center">
                                                <span class="card-name   card-value4">{{$row->value4}}%</span>
                                            </div>
                                        </div>
                                        <div class="card-list">
                                            <div class="col-xs-6 text-center">
                                                <span class="pre-key">
                                                    EST. LTV:
                                                </span>
                                            </div>
                                            <div class="col-xs-6 text-center">
                                                <span class="card-name   card-value3">{{$row->value3}}%</span>
                                            </div>
                                        </div>
                                        <div class="card-list">
                                            <div class="col-xs-6 text-center">
                                                <span class="pre-key ">
                                                    Other:
                                                </span>
                                            </div>
                                            <div class="col-xs-6 text-center">
                                                <span class="card-name  card-value5">{{$row->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-center">
                                        <button    class="btn initial-btn modal_submit">Contact Us</button>
                                    </div>
                                    <div class="reference-number">
                                        <div class="col-xs-12 text-center">
                                            <span>
                                               Closed on {{ date('m/d/Y',strtotime($row->updated_at))}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer50"></div>
    </section>
    @endif
    <section class="schedule">
        <div class="spacer50"></div>
        <div class="container">
            <div class="float-in show-on-scroll">
                <div class="s-title">
                    Schedule A Call Today
                </div>
                <form method="POST" id="msg_form">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control mainLoginInput" type="text" name="user_name" id="user_name"
                                placeholder="&#61447; Your Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control mainLoginInput" type="text" name="user_email" id="user_email"
                                placeholder="&#x2709; Your Email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control mainLoginInput" type="text" name="user_phone" id="user_phone"
                                placeholder="&#xf095; Phone Number">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control mainLoginInput" name="user_message" id="user_message" cols="30"
                                rows="10" placeholder="&#xf044; Write your message"></textarea>
                        </div>
                    </div>
                    <div class="t-center">
                        <button type="submit"  class="send_msg btn btn-submit g-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="spacer50"></div>
    </section>
    <section >
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/terrydalelive/30min?primary_color=097509" style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
        <!-- Calendly inline widget end -->
    </section>
    <button data-paperform-id="32zwaona" data-popup-button="1"  id="paper_form"></button>
    <input type="text" id="loading_time" value="{{$loading_time}}">
@endsection
@section('modal')
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="m-close" data-dismiss="modal">
                    ×
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="box-header">
                            <img id="modal_card_icon" src="{{asset('public/assets/imgs/home.png')}}" alt="">
                            <span class="card-name" id="modal_card_type">

                            </span>
                        </div>
                        <div class="card-box">
                            
                            <div class="card-list">
                                <div class="col-xs-6 text-center">
                                    <span class="pre-key ">
                                        Location:
                                    </span>
                                </div>
                                <div class="col-xs-6 text-center text-center">
                                    <span class="card-name" id="modal_card_state">
                                    </span>
                                </div>
                            </div>

                            <div class="card-list">
                                <div class="col-xs-6 text-center">
                                    <span class="pre-key">
                                        Asking Price:
                                    </span>
                                </div>
                                <div class="col-xs-6 text-center text-center">
                                    <span class="card-name" id="modal_card_value2">
                                    </span>
                                </div>
                            </div>
                            <div class="card-list">
                                <div class="col-xs-6 text-center">
                                    <span class="pre-key">
                                        EST. LTV:
                                    </span>
                                </div>
                                <div class="col-xs-6 text-center text-center">
                                    <span class="card-name"  id="modal_card_value3">
                                        $100.00
                                    </span>
                                </div>
                            </div>
                            <div class="card-list">
                                <div class="col-xs-7">
                                    <span class="pre-key"  >
                                        Cash on Cash Return:
                                    </span>
                                </div>
                                <div class="col-xs-5">
                                    <span class="card-name"  id="modal_card_value4">
                                        $100.00
                                    </span>
                                </div>
                            </div>
                            <div class="card-list">
                                <div class="col-xs-6 text-center">
                                    <span class="pre-key"  >
                                        CAP Rate:
                                    </span>
                                </div>
                                <div class="col-xs-6 text-center text-center">
                                    <span class="card-name" id="modal_card_value5">
                                        $100.00
                                    </span>
                                </div>
                            </div>
                                                                    

                            <div class="t-center">
                                <button   class="modal_submit btn g-btn">Contact Us Now</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('footer-js')
<script>
    $(document).on('click','.modal_submit',function(){
        $('#myModal').modal('hide'); $('#paper_form').trigger('click');





       
    });

    
</script>
<script>(function() { var script = document.createElement('script'); script.src = "https://paperform.co/__embed";document.body.appendChild(script); })()</script>
<script src="{{asset('public/assets/frontend/script.js')}}"></script>

<script>
    setInterval(()=>{
        let loading_time = $('#loading_time').val();
        jQuery.ajax({
            url: "{{ url('/api/card/sync') }}",
            method: 'post',
            data: {
                loading_time: loading_time
            },
            success: function(result){
                if(result.flag){
                    if(result.changed == "all"){
                        //Begin : active items
                        let results = result.cards1;

                        results.forEach((element) => {

                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);

                            $(document).find('.closed-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('.closed-slide .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });
                            let value22 = currencyFormat(element.value2);
                            dynamic_open_slide(element, value22);

                        });
                        $('#loading_time').val(result.loading_time);

                        // End : active items

                        // Begin : inactive items
                        let results2 = result.cards2;
                        results2.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);
                            $("#slide1").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide2 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            let value22 = currencyFormat(element.value2);
                            dynamic_close_slide(element, value22);
                            
                        });
                        $('#loading_time').val(result.loading_time);

                        //End : inactive items



                    } else if(result.changed == 'active') {
                        let results = result.cards;

                        results.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);

                            $(document).find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('.closed-slide .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });
                            let value22 = currencyFormat(element.value2);
                            dynamic_open_slide(element,value22);
                        });
                        $('#loading_time').val(result.loading_time);
                        console.log('active');


                    }else if(result.changed == 'inactive'){

                        let results = result.cards;
                        results.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);
                            $("#slide1").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide2 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            let value22 = currencyFormat(element.value2);
                            dynamic_close_slide(element,value22);
                        });
                        console.log('inactive');
                        $('#loading_time').val(result.loading_time);
                    } else if(result.changed == "nodeal"){
                        // Begin : removing cards by no deal
                        let results = result.cards;
                        results.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);
                            $("#slide1").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide2 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $(".closed-slide").find('.card-box').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('.closed-slide .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $(".closed-slide").find('.card-box').each(function(index){
                                console.log($(this).attr('id'));
                            });
                        });
                        console.log('nodeal');
                        $('#loading_time').val(result.loading_time);
                        //End : removing cards by no deal
                    }

                } else {
                    console.log('no modiciation!');
                }
            },
            error: function(){
                console.log('No network!');
            }

        });
    }, 10000);

    function currencyFormat(num) {
    return '$' + parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }
    
    
    function get_category(category_id){
        if(category_id == 1){
            return "Refinance Quote";
        } else if(category_id == 2){
            return "Purchase Quote";
        } else {
            return "Active On Market";
        }
        
    }

    function get_value1(category_id){
        return "Loan Amount";
        
    }

    function get_value2(category_id){       
            return "Interest Rate";
    }

    function getImageurl(card_img){
        if(card_img ==1 ){
            card_img ="condo.jpg";

        } else if(card_img ==2){
            card_img ="factory.jpg";
        } else if(card_img == 3){
            card_img ="garage.jpg";
        } else if(card_img == 4){
            card_img ="hotel.jpg";
        }else if(card_img == 5){
            card_img ="new building.jpg";
        }else if(card_img == 6){
            card_img ="office.jpg";
        }else if(card_img == 7){
            card_img ="shop.jpg";
        }else if(card_img == 15){
            card_img ="warehouse.jpg";
        }
        return card_img;
    }

    function getCardtype(card_img){
        if(card_img ==1 ){
            card_img ="Multi-Family";

        } else if(card_img ==2){
            card_img ="Industrial";
        } else if(card_img == 3){
            card_img ="Garage";
        } else if(card_img == 4){
            card_img ="Hotel";
        }else if(card_img == 5){
            card_img ="Other";
        }else if(card_img == 6){
            card_img ="Office";
        }else if(card_img == 7){
            card_img ="Stripe Center";
        }else if(card_img == 15){
            card_img ="Self-Storage";
        }
        return card_img;
    }
    

    function dateFormat(dateObject) {
        var dateObject = "2020-05-15 11:43:42";
        var d = new Date(dateObject);
        var day = d.getDate();
        var month = d.getMonth() + 1;
        var year = d.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = day + "/" + month + "/" + year;

        return date;
    }; 
    

    function dynamic_open_slide(element, value22){
    var  reference= element.id+1000;
    reference= reference.toString();
        $('#slide1 .owl-carousel').owlCarousel().trigger('add.owl.carousel', [jQuery("<div class='col-md-12'><div class='card opened-card'  ><div class='box-header'><img class='card-icon' src='{{asset('/public/assets/imgs/')}}/"+element.card_img+"' alt='ddd' width='50px'><span class='card-name card-type' >"+element.card_type+"</span></div><div class='card-box'  data-card-state='"+element.value1+"' card-type='"+element.card_type+"'><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key location'>Location:</span></div><div class='col-xs-6 text-center  text-center'><span class='card-name card-value1 location'>"+element.value1+"</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key '>"+get_value1(element.category)+":</span></div><div class='col-xs-6 text-center'><span class='card-name card-value2'>"+element.value2+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>EST. LTV:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value3'>"+element.value3+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>"+get_value2(element.category)+":</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value4'>"+element.value4+"%</span></div></div> <div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>CAP Rate:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value5'>"+element.value5+"%</span></div></div></div><div class='t-center'><button   class='btn initial-btn modal_submit'>Contact Us</button></div><div class='reference-number'><div class='col-xs-12 text-center'><span class=''>"+get_category(element.category)+" #"+reference+"</span></div></div></div></div>"),0]).trigger('refresh.owl.carousel');
    };

    function dynamic_close_slide(element, value22){
    var  reference= element.id+1000;
    reference= reference.toString();

        $('.closed-slide .owl-carousel').owlCarousel().trigger('add.owl.carousel', [jQuery("<div class='col-md-12'><div class='card opened-card'  ><div class='box-header'><img class='card-icon' src='{{asset('/public/assets/imgs/')}}/"+element.card_img+"' alt='ddd' width='50px'><span class='card-name card-type' >"+element.card_type+"</span></div><div class='card-box'  data-card-state='"+element.value1+"' card-type='"+element.card_type+"'><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key location'>Location:</span></div><div class='col-xs-6 text-center  text-center'><span class='card-name card-value1 location'>"+element.value1+"</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Purchase Price:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value2'>"+element.value2+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>EST. LTV:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value3'>"+element.value3+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Interest Rate:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value4'>"+element.value4+"%</span></div></div> <div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Other:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value5'>"+element.description+"%</span></div></div></div><div class='t-center'><button   class='btn initial-btn modal_submit'>Contact Us</button></div><div class='reference-number'><div class='col-xs-12 text-center'><span class=''>Closed on"+dateFormat(element.update_at)+"</span></div></div></div></div>"),0]).trigger('refresh.owl.carousel');

    }

    $('#schedule_call').on('click',function(){
        event.preventDefault();
        $("html, body").animate({ scrollTop: $(".schedule").position().top+650 }, "slow");
        return false;
    })

</script>




<!--begin:: Global Optional Vendors -->

{{-- <script src="{{asset('public/assets/metronic/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js" type="text/javascript"></script> --}}
{{-- <script src="{{asset('public/assets/metronic/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script> --}}

<script src="{{asset('public/assets/metronic/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/assets/metronic/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<script>
    'use strict'
    var msg_functions = function(){
        var submit_msg = function(){
            $('.send_msg').click(function(){
                var _this = $(this);
                var form = _this.closest('form');
                var inputs = $('input');
                var btn = _this;
                form.validate({
                    rules: {
                            user_name: {
                                required:true,
                            },
                            user_email: {
                                required:true,
                            },
                            user_phone:{
                                required:true,

                            },
                            user_message:{
                             
                                required:true,
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

        return {
            init:function(){
                submit_msg();
            }
        }
    }();
    
    jQuery(document).ready(function(){
        msg_functions.init();
    });
</script>

@endsection