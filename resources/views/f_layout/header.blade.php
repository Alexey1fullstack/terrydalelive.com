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

    .about-us-desc{
        font-size: 22px;
        display: block;
        margin-top: 15px;
        line-height: 21px;            
        color: white;
        line-height: 35px;
    }

    .about-us-description{
        font-size: 22px;
        display: block;
        margin-top: 15px;
        line-height: 21px;            
        color: black;
        line-height: 35px;
    }

    #schedule_call{
        padding: 10px 37px;
        color: #25a059 ;
        border-radius: 17px;
        font-size: 18px;
        background:white;
        margin-left: 20px;
    }

    .readmore-btn{
        padding: 13px 43px;
        color: #25a059 ;
        border-radius: 17px;
        font-size: 18px;
    }

    .readmore-btn:hover, .readmore-btn:active, .readmore-btn:focus{
        color: #0c582c !important;           
    }
    .readmore-btn:active,{
        
        box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
    }

     .hero {
        background-size: cover;
        min-height: 540px;
        padding-top: 10px;
    }

    @media screen and (min-width:1600px) {
        .about-us-desc{
            margin-bottom: 40px;
        }

    }

    


    @media (max-width: 768px){
        .modal-dialog {
            width: 548px !important;
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
            padding-bottom: 50px;
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

        .f-right {
            float: right;
        }
    }

    /* 
    ##Device = Low Resolution Tablets, Mobiles (Landscape)
    ##Screen = B/w 481px to 767px
    */

    @media (min-width: 481px) and (max-width: 767px) {
        .f-right {
            float: right;
        }
        
        .about-us-desc{
            font-size:20px;
            margin-top:15px;
        }

        #send_ticket .modal-dialog{
            width:500px !important;
        }
    }

    @media (max-width: 481px){
        


        .f-right {
            float: right;
        }
        .about-us-desc{
            font-size: 15px;
            margin-bottom: 30px;
            line-height: 24px;
        }

        

        .readmore-btn {
            padding: 4px 20px;
            color: #25a059;
            border-radius: 17px;
            font-size: 18px;
        }

        .hero {
            min-height: 550px;
            text-align: center;
        }

        .head-title{
            margin-top: 45px;
            font-size:25px;
        }

        .c-title {
            font-size: 50px;
            margin-top: 0px;
        }

        .s-title{
            font-size:25px;
        }

        .logo img{
            max-width: 142px;
            padding-top: 10px;
        }

        #send_ticket .modal-dialog{
            width:90% !important;
        }

        #myModal .modal-dialog{
            width:90% !important;
        }
    }

    .swal2-popup.swal2-modal.swal2-show{
        width: 430px;
        height: 220px;
        box-shadow: 2px 3px 11px 0px !important;
    }

    .swal2-title{
    font-size:2em !important;
    }

    .swal2-content{
    font-size:1.5em !important;
    }

    .swal2-confirm.swal2-styled{
    font-size:1.3em !important;
    }
</style>


<div class="hero">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="logo col-xs-5 col-xs-offset-1 col-md-offset-1 text-left">
                    <a href="{{url('/')}}"><img src="{{asset('public/assets/imgs/logo-dark.svg')}}" alt="" class="m-logo"></a>
                </div>
                <div class="f-right col-xs-5 text-center">

                    <nav class="menu" id="myTopnav">
                        <a href="javascript:void(0);" class="icon"  onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                        {{-- <a class="menu-items" href=""> Contact </a>
                        <a class="menu-items" href=""> Rates </a> --}}
                        <a class="menu-items" href="{{url("about")}}"> About Us </a>
                        <a  > <input id="schedule_call" class="btn menu-btn" value="Schedule a Call Today" type="button"></a>
                    </nav>
                </div>
                

            </div>
            
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8  float-right show-on-scroll text-center head-section">
                <div class='c-title'>
                    <div class="head-title">Welcome to Terrydale Live</div>
                </div>
                <span class="about-us-desc">
                    Proactive, Impactive - Terrydale Live is the definitive next step on our journey to tranform the way you do real estate.<br>
Our Interactive marketplace provides live updates on the most competitive commercial financing<br>
options & structures consolidated from our network...
                </span>
                <button class="btn readmore-btn">Read More</button>
                
            </div>
        </div>
    </div>
</div>
</section>