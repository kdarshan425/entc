/*
  Theme Name: Edubin - LMS Education HTML Template
  Author: Humayun Ahmed
  Author URL: https://themeforest.net/user/pixelcurve
  Support: humayunahmed82@gmail.com
  Description: Creative  HTML5 template.
  Version: 1.0
*/
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/614c01abd326717cb682e347/1fg8ed2fb';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();



function sticky_relocate() {
var window_top = $(window).scrollTop();
var footer_top = $("#footer-part").offset().top;
var div_top = $('#sticky-anchor').offset().top;
var div_height = $(".sidebar1").height();

if (window_top + div_height > footer_top)
    $('.sidebar1').removeClass('sticky-side');    
else if (window_top > div_top) {
    $('.sidebar1').addClass('sticky-side');
} else {
    $('.sidebar1').removeClass('sticky-side');
}
}

$(function () {
$(window).scroll(sticky_relocate);
sticky_relocate();
});

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function sidedrop() { document.getElementById("myDropdown").classList.toggle("show");}
function sidedrop1() { document.getElementById("myDropdown1").classList.toggle("show");}
function sidedrop2() { document.getElementById("myDropdown2").classList.toggle("show");}
function sidedrop3() { document.getElementById("myDropdown3").classList.toggle("show");}
function sidedrop4() { document.getElementById("myDropdown4").classList.toggle("show");}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
var dropdowns = document.getElementsByClassName("dropdown-content");
var i;
for (i = 0; i < dropdowns.length; i++) {
  var openDropdown = dropdowns[i];
  if (openDropdown.classList.contains('show')) {
    openDropdown.classList.remove('show');
  }
}
}
}



$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);
    });
    
    
    //===== Search
    
    $('#search').on('click', function(){
        $(".search-box").fadeIn(600);
    });
    $('.closebtn').on('click', function(){
        $(".search-box").fadeOut(600);
    });
    
    
    //===== Sticky
    
    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".navigation").removeClass("sticky");
            $(".navigation-3 img").attr("src", "images/logo-2.png");
        } else{
            $(".navigation").addClass("sticky");
            $(".navigation-3 img").attr("src", "images/logo.png");
        }
    });
    
   
    //===== Mobile Menu
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass("active");
    });
    
    var subMenu = $('.sub-menu-bar .navbar-nav .sub-menu');
    
    if(subMenu.length) {
        subMenu.parent('li').children('a').append(function () {
            return '<button class="sub-nav-toggler"> <i class="fa fa-chevron-down"></i> </button>';
        });
        
        var subMenuToggler = $('.sub-menu-bar .navbar-nav .sub-nav-toggler');
        
        subMenuToggler.on('click', function() {
            $(this).parent().parent().children('.sub-menu').slideToggle();
            return false
        });
        
    }
    
    
    
    //===== Slick Slider
    
        function mainSlider() {
            
        var BasicSlider = $('.slider-active');
            
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
            
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
            
        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 10000,
            pauseOnHover: false,
            dots: false,
            fade: true,
			arrows: true,
            prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
            responsive: [
                { breakpoint: 767, settings: { dots: false, arrows: false } }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();
    
    
    //===== Slick Category Slied
    
    $('.category-slied').slick({
        dots: false,
        infinite: false,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
        responsive: [
        {
          breakpoint: 922,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Slick Course Slied
    
    $('.course-slied').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //====== Magnific Popup
    
    $('.Video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });
    
    
    //===== Slick testimonial Slied
    
    $('.testimonial-slied').slick({
        dots: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Slick testimonial Slied
    
    $('.patnar-slied').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Back to top
    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
    
    //===== Counter Up
    
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });
    
    
    //===== Slick testimonial Slied
    
    $('.student-slied').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
    
    
    
    //===== Nice Select
    
    $('select').niceSelect();
    
    
    
    //===== Count Down
    
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="count-down-time"><div class="singel-count"><span class="number">%D :</span><span class="title">Days</span></div><div class="singel-count"><span class="number">%H :</span><span class="title">Hours</span></div><div class="singel-count"><span class="number">%M :</span><span class="title">Minuits</span></div><div class="singel-count"><span class="number">%S</span><span class="title">Seconds</span></div></div>'));
      });
    });
    
    
    //=====  Rating selection
    
    $('.reviews-form').on('click', '.rate-wrapper .rate .rate-item', function() {
        var self = $(this),
            target = self.parent('.rate');
        target.addClass('selected');
        target.find('.rate-item').removeClass('active');
        self.addClass('active');
    });
        
    
    
    //===== Nice Number
    
    $('input[type="number"]').niceNumber({
        // custom button text
        buttonDecrement: "<i class='fa fa-sort-asc' ></i>",
        buttonIncrement: "<i class='fa fa-sort-desc' ></i>",

    });

    
    
    //===== Magnific Popup
    
    $('.shop-items').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
});