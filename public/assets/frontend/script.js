$(document).ready(function () {

    $('#slide1').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');        
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.find('.card-value5').eq(0).text();
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));
        $('#myModal').modal('show');

    });

    $('#slide2').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.find('.card-value5').eq(0).text();
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));

        $('#myModal').modal('show');

    });
    
    $('#refi_slide').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.find('.card-value5').eq(0).text();
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));
        $('#myModal').modal('show');

    });
    
    $('#purchase_slide').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.find('.card-value5').eq(0).text();
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));

        $('#myModal').modal('show');

    });
    
    $('#active_slide').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.find('.card-value5').eq(0).text();
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));

        $('#myModal').modal('show');

    });

    $('.closed-slide').on('click',".card-box",function () {
        _this = $(this);
        $('.card').removeClass('active-card');
        _this.closest('.card').addClass('active-card');
        let state = _this.attr('data-card-state');
        let type = _this.attr('card-type');
        let card_icon = _this.find('.card-icon').eq(0).attr('src');
        let value2 = _this.find('.card-value2').eq(0).text();
        let value3 = _this.find('.card-value3').eq(0).text();
        let value4 = _this.find('.card-value4').eq(0).text();
        let value5 = _this.attr('data-card-value5');
        _modal = $('#myModal');
        $('#modal_card_icon').attr('src', card_icon);
        $('#modal_card_type').text(type);
        $('#modal_card_state').text(state);
        $('#modal_card_value5').text(value5);
        $('#modal_card_value2').text(value2);
        $('#modal_card_value3').text(value3);
        $('#modal_card_value4').text(value4);
        $('#cardid').val(_this.attr('id'));
        $('#myModal').modal('show');

    });

    $('#slide1 .owl-carousel').owlCarousel({
       
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            },
            1600: {
                items: 4,
                nav: true,
                
                dots: true
            }
        },
         
    });

    $('#slide2 .owl-carousel').owlCarousel({
       
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
            
            },
            1600: {
                items: 4,
                nav: true,
             
                dots: true
            }
        }
    });
    
    $('#refi_slide .owl-carousel').owlCarousel({
        
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
              
            },
            1600: {
                items: 4,
                nav: true,
                
                dots: true
            }
        },
         
    });

$('#purchase_slide .owl-carousel').owlCarousel({
       
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
               
            },
            1600: {
                items: 4,
                nav: true,
       
                dots: true
            }
        },
         
    });

$('#active_slide .owl-carousel').owlCarousel({
      
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
          
            },
            1600: {
                items: 4,
                nav: true,
         
                dots: true
            }
        },
         
    });


    $('#deal-section .owl-carousel').owlCarousel({
        
        margin: 10,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
               
            },
            1600: {
                items: 3,
                nav: true,
            
                dots: true
            }
        },
    });

    // $('#slide-section').owlCarousel({

    // })

    $('#slide-section .btn').click(function () {

        /*Mr WHP! Todo*/
    });





});



function myFunction() {

    var x = document.getElementById("myTopnav");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
}


// Page animation

// Detect request animation frame
var scroll = window.requestAnimationFrame ||
    // IE Fallback
    function (callback) {
        window.setTimeout(callback, 1000 / 60)
    };
var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {

    Array.prototype.forEach.call(elementsToShow, function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('is-visible');
        } else {
            element.classList.remove('is-visible');
        }
    });

    scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0 &&
            rect.bottom >= 0) ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
};

//page animation end
