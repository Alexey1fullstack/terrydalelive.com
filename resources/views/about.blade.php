@extends('f_layout.main')

@section('custom-css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/assets/frontend/owl/owl.carousel.min.css')}}">
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

        #loading_time{
            display: none;
        }
        @media (min-width: 768px){
            .modal-dialog {
                width: 548px !important;
            }
            .about-us-desc{
                font-size:22px;
                margin-top:15px;
            }
        }

        @media (min-width: 1025px) and (max-width: 1280px) {
            .about-us-desc{
                font-size:20px;
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
    
    <div class="float-in show-on-scroll row" style="margin-top: 49px;">
        <div class="s-title col-md-8 col-md-offset-2" style="padding-bottom: 20px;">
        About Us
        </div>
    <div class="col-md-10 col-sm-10 col-md-offset-1"  style="padding-bottom: 50px;">
        <span class="about-us-desc">
            Proactive, impactive, and now, interactive – Terrydale Live is the definitive next step on our journey to transform the way you do real estate. Our interactive marketplace provides live updates on the most competitive commercial financing options and structures consolidated from our network of private investors, real estate brokers, syndicators, REITS, institutional investors seeking terms and options on opportunities across asset classes, and other partners. See the information we’ve used to keep our fingers to the pulse of the market and close top level deals for clients across the U.S. Terrydale Live keeps you one step ahead of peers and competitors with an exclusive look at newly quoted opportunities for acquisitions and refinances before, during, and after they’ve hit the shelves.
    A primary tenet of Terrydale Capital and its related services is the privacy and anonymity we offer our verified sources. Consequently, there will be cases where very limited information will accompany a transaction. For active transactions on which we have the authority to provide additional details, our ‘learn more’ feature can be used to connect you with a decision-maker (broker or owner) that will carry out the due diligence necessary to get you in front of a deal that may not have hit the market.
    We are in the process of creating a private deal room for preferred investors that will have even more access to select opportunities with continuous updates. Stay tuned!
        </span>
    </div>
    </div>
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
                            $("#slide1").find('.opened-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.opened-card').each(function(index){
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

                            $(document).find('.closed-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('.closed-slide .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });
                            let value22 = currencyFormat(element.value2);
                            dynamic_open_slide(element,value22);
                        });
                        $('#loading_time').val(result.loading_time);


                    }else if(result.changed == 'inactive'){

                        let results = result.cards;
                        results.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);
                            $("#slide1").find('.opened-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.opened-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide2 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            let value22 = currencyFormat(element.value2);
                            dynamic_close_slide(element,value22);
                        });
                        $('#loading_time').val(result.loading_time);
                    } else if(result.changed == "nodeal"){
                        // Begin : removing cards by no deal
                        let results2 = result.cards;
                        results2.forEach((element) => {
                            element.card_img = getImageurl(element.type);
                            element.card_type = getCardtype(element.type);
                            $("#slide1").find('.opened-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide1 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            $("#slide2").find('.opened-card').each(function(index){
                                if($(this).attr('id') == 'item'+element.id){
                                    $('#slide2 .owl-carousel').owlCarousel( 'remove', index);
                                }
                            });

                            let value22 = currencyFormat(element.value2);
                            dynamic_close_slide(element, value22);
                            
                        });
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
            return "Refi Quote";
        } else if(category_id == 2){
            return "Purchase Quote";
        } else {
            return "Active On Market";
        }
        
    }

    function get_value1(category_id){
        if(category_id == 1){
            return "Asking Price";
        } else if(category_id == 2){
            return "Asking Price";
        } else {
            return "Loann Amount";
        }
        
    }

    function get_value2(category_id){
        if(category_id == 1){
            return "CoC Return";
        } else if(category_id == 2){
            return "CoC Return";
        } else {
            return "Interest Rate";
        }
        
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
        $('#slide1 .owl-carousel').owlCarousel().trigger('add.owl.carousel', [jQuery("<div class='col-md-12'><div class='card opened-card'  ><div class='box-header'><img class='card-icon' src='{{asset('/public/assets/imgs/')}}/"+element.card_img+"' alt='ddd' width='50px'><span class='card-name card-type' >"+element.card_type+"</span></div><div class='card-box'  data-card-state='"+element.value1+"' card-type='"+element.card_type+"'><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Location:</span></div><div class='col-xs-6 text-center  text-center'><span class='card-name card-value1'>"+element.value1+"</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>"+get_value1(element.category)+":</span></div><div class='col-xs-6 text-center'><span class='card-name card-value2'>"+element.value2+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>EST. LTV:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value3'>"+element.value3+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>"+get_value2(element.category)+":</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value4'>"+element.value4+"%</span></div></div> <div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>CAP Rate:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value5'>"+element.value5+"%</span></div></div></div><div class='t-center'><button   class='btn initial-btn modal_submit'>Contact Us</button></div><div class='reference-number'><div class='col-xs-12 text-center'><span class=''>"+get_category(element.category)+" #"+reference+"</span></div></div></div></div>"),0]).trigger('refresh.owl.carousel');
    };

    function dynamic_close_slide(element, value22){
    var  reference= element.id+1000;
    reference= reference.toString();

        $('.closed-slide .owl-carousel').owlCarousel().trigger('add.owl.carousel', [jQuery("<div class='col-md-12'><div class='card opened-card'  ><div class='box-header'><img class='card-icon' src='{{asset('/public/assets/imgs/')}}/"+element.card_img+"' alt='ddd' width='50px'><span class='card-name card-type' >"+element.card_type+"</span></div><div class='card-box'  data-card-state='"+element.value1+"' card-type='"+element.card_type+"'><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Location:</span></div><div class='col-xs-6 text-center  text-center'><span class='card-name card-value1'>"+element.value1+"</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Purchase Price:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value2'>"+element.value2+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>EST. LTV:</span></div><div class='col-xs-6 text-center'><span class='card-name card-value3'>"+element.value3+"%</span></div></div><div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Interest Rate:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value4'>"+element.value4+"%</span></div></div> <div class='card-list'><div class='col-xs-6 text-center'><span class='pre-key'>Other:</span></div><div class='col-xs-6 text-center'><span class='card-name   card-value5'>"+element.description+"%</span></div></div></div><div class='t-center'><button   class='btn initial-btn modal_submit'>Contact Us</button></div><div class='reference-number'><div class='col-xs-12 text-center'><span class=''>Closed on"+dateFormat(element.update_at)+"</span></div></div></div></div>"),0]).trigger('refresh.owl.carousel');

    }

    $('#schedule_call').on('click',function(){
        event.preventDefault();
        $("html, body").animate({ scrollTop: $(".schedule").position().top }, "slow");
        return false;
    })
</script>
@endsection