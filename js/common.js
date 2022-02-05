$(document).ready(function(){
    
    
    var myFullpage = new fullpage('#fullpage', {
        // anchors: ['home','overview', 'highlights', 'podiumamenities', 'exclusiveamenities', 'gallery', 'location', 'contact'],
        anchors: ['home','overview', 'exclusiveamenities', 'podiumamenities', 'gallery', 'location', 'contact'],
        menu: '#menu',
        autoScrolling: true,
        keyboardScrolling: true,
        scrollOverflow: true,
        // normalScrollElements: '#contact',
        afterSlideLoad: function(){         
            
        },
        onLeave: function(){
                // $(".sec_loader").fadeIn("slow");
        },
        afterLoad: function(anchorLink, index){
            // $('body').removeClass('anchorLink').addClass('anchorLink');
            setTimeout(function() {
                $(".sec_loader").fadeOut("slow");;
            }, 2000);
        }
    });

    $('.main_slide').owlCarousel({
         loop: false,
         items: 1,
         nav: false,
         dots: false,
         mouseDrag: false,
     })
    
    // $('.highlights_slider').owlCarousel({
    //      loop: true,
    //      items: 1,
    //      nav: false,
    //      dots: true,
    //      dotsData: true,
    //      // animateIn: 'fadeIn',
    //      animateOut: 'fadeOut',
    //  })

    $('.exclusiveamenities_slider').owlCarousel({
         loop: true,
         items: 1,
         nav: false,
         dots: true,
         dotsData: true,
         // animateIn: 'fadeIn',
         animateOut: 'fadeOut',
     })

    $('.podiumamenities_slider').owlCarousel({
         loop: true,
         items: 1,
         nav: false,
         dots: true,
         dotsData: true,
         // animateIn: 'fadeIn',
         animateOut: 'fadeOut',
     })


    // $('.gallery_slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    // if (!e.namespace)  {
    //   return;
    // }
    // var carousel = e.relatedTarget;
    //     $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
    // }).owlCarousel({
    //     loop: true,
    //     items: 1,
    //     nav: true,
    //     dots: false,
    // });


    $(function() {
      var owl = $('.gallery_slider');
      owl.owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        loop: true,
        onInitialized: counter, //When the plugin has initialized.
        onTranslated: counter //When the translation of the stage has finished.
      });

      function counter(event) {
          
        var element = event.target; // DOM element, in this example .owl-carousel
        var items = event.item.count; // Number of items
        var item = event.item.index + 1; // Position of the current item

        // it loop is true then reset counter from 1
        if (item > items) {
          item = item - items
        }
        $(element).parent().find('.slider-counter').html("<span>0" + item + "</span> / <span>0" + items + "</span>")
      }
    });


    // $( '.owl-dot' ).on( 'click', function() {
    //   owl.trigger('to.owl.carousel', [$(this).index(), 300]);
    //   $( '.owl-dot' ).removeClass( 'active' );
    //   $(this).addClass( 'active' );
    // })

    // $('.section').mousemove(function(e){
    //     var img_wrp_x = (e.pageX * .5 / 9),
    //         img_wrp_x = (e.pageY * .1 / 5)
    //     $('.img-wrp').css({"transform":"translate(" + img_wrp_x + "px," + img_wrp_x + "px)"});

    //     var img_wrp_mask_x = (e.pageX * .5 / 9),
    //         img_wrp_mask_y = (e.pageY * .1 / 5)
    //     $('.img-wrp-mask').css({"transform":"translate(" + img_wrp_mask_x + "px," + img_wrp_mask_y + "px)"});
    // });

    if ($(window).width() <= 1023) {

      $('.menu_burger').click(function(){
        $('.open_menu').toggleClass('active');
        $('.close_menu').toggleClass('active');
        $('#site_nav').toggleClass('active');
      })

      $('#menu li a[data-menuanchor]').click(function(){
        $('.open_menu').removeClass('active');
        $('.close_menu').removeClass('active');
        $('#site_nav').removeClass('active');
      })


      // $('#submenu li a').click(function(){
      //   $('.open_menu').removeClass('active');
      //   $('.close_menu').removeClass('active');
      //   $('#site_nav').removeClass('active');
      // })

      $('.mobi_form_btn').click(function(){
        $('#fixed_form_wrap').addClass('active');
      });

      $('.form_close').click(function(){
        $('#fixed_form_wrap').removeClass('active');
      });
    }

    // $('.submenu_head > a').click(function(e){
    //     // $('#submenu').toggleClass('active');
    //     e.preventDefault();
    //    var targetul = $('.submenu_head ul');
    //    var targetstatus = targetul.css('display');
    //    if (targetstatus == 'none') {
    //        $(targetul).slideUp(500);
    //        $('.submenu_head > a').parent().removeClass('active_subnav');
    //        targetul.slideDown(500);
    //        $(this).parent().addClass('active_subnav');
    //        $('#menu > li > a[data-menuanchor]').removeClass('active');
    //    } else {
    //        $('.submenu_head ul').slideUp(500);
    //        $(this).parent().removeClass('active_subnav');
    //    }

    //   })
      // $('#menu > li > a[data-menuanchor]').click(function(){
      //   $('.submenu_head ul').slideUp(500);
      //   $('.submenu_head > a').parent().removeClass('active_subnav');
      // })
    
})

timer();

function timer(){
 var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
var sec = currentTime.getSeconds()
if (minutes < 10){
    minutes = "0" + minutes
}
if (sec < 10){
    sec = "0" + sec
}
var t_str = ", It's 0" + hours % 12 + ":" + minutes + " ";
if(hours > 11){
    t_str += "PM";
} else {
   t_str += "AM";
}
 document.getElementById('clock').innerHTML = t_str;
 setTimeout(timer,1000);
}

    var thehours = new Date().getHours();
    var themessage;
    var morning = ('Good Morning');
    var afternoon = ('Good Afternoon');
    var evening = ('Good Evening');
    var night = ('Good Night');

    if (thehours >= 0 && thehours < 6) {
      themessage = night; 

    } else if (thehours >= 6 && thehours < 12) {
      themessage = morning;

    }  else if (thehours >= 12 && thehours < 16) {
      themessage = afternoon;

    } else if (thehours >= 16 && thehours < 20) {
      themessage = evening;

    } else if (thehours >= 20 && thehours < 24) {
      themessage = night;
    }

    $('.greeting').append(themessage);