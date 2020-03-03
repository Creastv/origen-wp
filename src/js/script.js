(function ($) {

//==========================================================================
// Parallex
//========================================================================== 
// jQuery('.my-paroller').paroller();
//==========================================================================
// Preloader
//========================================================================== 
$(document).ready(function($) {
    $(window).load(function() {
        $('.img-fade').addClass('img-fade-out');
        $('#preloader').fadeOut('slow', function() { 
          $(this).remove(); 
        });
    });
});
//==========================================================================
// Animation fade
//========================================================================== 
AOS.init();
//==========================================================================
// scroll to top
//========================================================================== 
$(document).ready(function() {
    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
});
//==========================================================================
// Smooth scrolling when clicking an anchor link
//========================================================================== 
$(document).on('click', 'a[href^="#"]', function(event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 60
    }, 500);
});

    $('.navbar-nav>li>a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

// Sticky navbar
// var body = document.querySelector('body');
var navbar = document.getElementById("navigation");
var sticky = navbar.offsetTop + 10;

document.addEventListener('scroll',  function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        };
});


})(jQuery);
