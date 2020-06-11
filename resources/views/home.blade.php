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
    <link href="{{asset('public/custom-css/loading.css')}}" rel="stylesheet" type="text/css" />
    
    {{-- sweetalert CSS--}}
    <link href="{{asset('public/assets/metronic/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />

    <style>
        .input-group-addons{
            margin: 0 auto;     
            background-color: #fff;
            position: relative;
            text-align: left;
            cursor: pointer;
            border-radius: none;
            backface-visibility: hidden;
            transition: all 0.15s;
            font-family: Lato, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            font-size: 17px;
            line-height: 32px;
            font-weight: 300;
            color: rgba(107,117,88,1);
            width:100%;
        }

        .input-group{
            width:100%; 
            padding-bottom:30px;
        }

        .form-controls{
            display: block;
            width:100%;
            background-color: transparent;            
            padding: 2px;
            padding-top: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
            padding-left: 2px;
            box-shadow: none;
            min-height: 20px;
            border: none;
            font-size:20px;
            color:rgb(132, 66, 6);
            border-bottom: 1px solid rgba(230,230,230,0.8);
        }

        .form-controls:focus{
            outline: none;
            border: none;
            border-bottom: 1px solid #bd6b05;
            color:rgba(191,140,93,1);
            
        }

        .information-input{
            color:rgb(132, 66, 6);
            
            font-size:20px;
        }

        .information-input:focus{
            color:rgba(191,140,93,1);
        }

        .submit_btn {
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent;
            border: 2px solid #166106;
            border-radius: 0.6em;
            color:#1f5603;
            cursor: pointer;
            display: -webkit-box;
            font-size: 39px;
            display: flex;
            align-self: center;
            font-size: 16px;
            font-weight: 400;
            line-height: 1;
            margin: 0px auto;
            padding: 0.9em 2em;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
        }
        .submit_btn:hover,.submit_btn:focus,.submit_btn:active  {
            color: white;
            outline: 0;
            box-shadow: 0 0 40px 40px #166106 inset
        }

        .first {
            -webkit-transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
        }

        .modal-subtitle{
            color:#225a10b3;
            font-size:17px;
        }

        .modal-maintitle{
            color:#2f5a01;
            font-size:26px;
        }

        .pt-20{
            padding-top:20px;
        }

        #send_ticket .modal-dialog{
            width:90%;
        }

    </style>
@endsection

@section('custom-js')
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('public/assets/frontend/owl/owl.carousel.min.js')}}" type="text/javascript"></script>

    
    
@endsection

@section('main-content')
    <!-- begin :: loading spinner -->
    <div id="main-loading">
        <div class="load_ctn" >
            <div class="m-loader m-loader--primary" style="width: 30px;display: block;"></div>
        </div>
    </div>
    <!-- end :: loading spinner -->

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

    <section  class='float-in show-on-scroll row'>
        
        <div style=' text-align:center;' class="row spacer50">
            <div class="s-title col-md-6 col-md-offset-3">
            Schedule a Meeting
            </div>
        </div>
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/terrydalelive/30min?primary_color=097509" style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
        <!-- Calendly inline widget end -->
    </section>
    {{-- <button data-paperform-id="32zwaona" data-popup-button="1"  id="paper_form"></button> --}}
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


    <div class="modal fade" id="send_ticket" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="min-height:500px;">
                <div class="m-close" data-dismiss="modal">
                    ×
                </div>
                <div class="modal-body">
                    <form id="msg_form">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img class="_imgloaded" src="https://img.paperform.co/fetch/w_600,f_webp/https://s3-ap-southeast-2.amazonaws.com/paperform/u-33002/1/2019-09-13/tfd35k3/imageedit_2_2049578219.png" style="width: 240px; transition: width 0.3s ease 0s;">
                                <h2 class="modal-maintitle">Interested in a Terrydale Live Opportunity?</h2>
                                <h4 class="modal-subtitle">Submit a few details below and we'll be in contact today!</h4>
                            </div>
                            
                            <div class="col-md-10 col-md-offset-1 pt-20">        
                                <div class="input-group">
                                    <span class="input-group-addons" >First Name*</span>
                                    <input type="text" class="form-controls" id="firstname" aria-describedby="basic-addon3" required>
                                </div>
                            </div>   
                            <div class="col-md-10 col-md-offset-1">        
                                <div class="input-group">
                                    <span class="input-group-addons" >Last Name*</span>
                                    <input type="text" class="form-controls" id="lastname" aria-describedby="basic-addon3" required>
                                </div>
                            </div>   
                            <div class="col-md-10 col-md-offset-1">    
                                <div class="input-group">
                                    <span class="input-group-addons" >Email*</span>
                                    <input type="email" class="form-controls" id="useremail" aria-describedby="basic-addon3" required>
                                </div>
                            </div>   
                            <div class="col-md-10 col-md-offset-1">    
                                <div class="input-group">
                                    <span class="input-group-addons">Contact*</span>
                                    <input type="text" class="form-controls" id="usercontact" aria-describedby="basic-addon3" required>
                                </div>
                            </div>    
                            <div class="col-md-10 col-md-offset-1">    
                                <div class="input-group">
                                    <span class="input-group-addons" >Additional Information*</span>
                                    <textarea type="text" cols="10" rows="3" class="form-controls information-input" id="information" aria-describedby="basic-addon3">
                                    </textarea>
                                </div>
                                <input type="hidden" id="cardid">
                            </div> 
                            <div class="col-md-10 col-md-offset-1">    
                                <button style="submit" class="submit_btn first">Submit</button>
                            </div> 

                            <div class="col-md-10 col-md-offset-1">
                                
                            </div>
                                
                        </div>   
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('footer-js')

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
        // event.preventDefault();
        // $("html, body").animate({ scrollTop: $(".schedule").position().top+650 }, "slow");
        // return false;
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

        var modal_submit = function(){
            $('.modal_submit').on('click', function(){
                var cardid  = $(this).parent().prev().attr('id');
                $('#cardid').val(cardid);
                $('#firstname').val("");
                $('#lastname').val('');
                $('#useremail').val('');
                $('#information').val('');
                $('#usercontact').val('');
                $('#send_ticket').modal('show');
            });
        }

        var submit_msg = function(){
            $('#msg_form').submit(function(event){
                $('#main-loading').fadeIn();
                event.preventDefault();
                var _this = $(this);
                var firstname = $('#firstname').val();
                var secondname = $('#lastname').val();
                var useremail = $('#useremail').val(); 
                var information = $('#information').val();
                var usercontact = $('#usercontact').val();
                var cardid = $('#cardid').val();
                var cardid = cardid.substr(4,cardid.length);
                jQuery.ajax({
                    url: "{{ url('/api/send_msg') }}",
                    method: 'post',
                    data: {
                        firstname: firstname,
                        secondname:secondname,
                        useremail: useremail,
                        information: information,
                        usercontact: usercontact,
                        cardid: cardid,
                        _token: "{{csrf_token()}}"
                    },
                    success: function(result){
                        
                        $('#main-loading').fadeOut();
                        swal.fire("The message has been submitted!", "we'll notice to your email soon.","success");
                        $('#send_ticket').modal('hide');

                    },
                    error: function(){
                        $('#main-loading').fadeOut();
                        swal.fire("Network Error!", "Please check your network.","error");
                    }
                });

            })
        }

        return {
            init:function(){
                submit_msg();
                modal_submit();
            }
        }
    }();
    
    jQuery(document).ready(function(){
        msg_functions.init();
        $('#main-loading').fadeOut();
    });
</script>

@endsection