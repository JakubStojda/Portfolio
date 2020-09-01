
  (function ($) {
       "use strict";
        // PĹynny scroll
        let scrolloffset;
let screenwidth=$(window).width();
if(screenwidth >= 778)
scrolloffset=145;
else
scrolloffset=70;

        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
            if (
                location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ?
                    target :
                    $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    $("html, body").animate({
                            scrollTop: target.offset().top - scrolloffset,
                        },
                        1000,
                        "easeInOutExpo"
                    );
                    return false;
                }
            }
        });

       // Zamknij menu przy kliknięciu
       $(".js-scroll-trigger").click(function () {
           $(".navbar-collapse").collapse("hide");
       });
       // Collapse Navbar
       var navbarCollapse = function () {
           if ($("#mainNav").offset().top > 100) {
               $("#mainNav").addClass("navbar-shrink");
           } else {
               $("#mainNav").removeClass("navbar-shrink");
           }
       };
       // Collapse now if page is not at top
       navbarCollapse();
       // Collapse the navbar when page is scrolled
       $(window).scroll(navbarCollapse);
   
   })(jQuery);
