// -------------Date picker-------------------
$('#datepicker').datepicker({
    showOtherMonths: true,
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy-mm-dd'
});
$('#datepicker2').datepicker({
    showOtherMonths: true,
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy-mm-dd'
});

// $('#datepicker2').pickadate({ min: new Date(2030,1,1),
// max: new Date(2030,12,30)
// });
// -------------Dining bar tab------------------
$("#tile-1 .nav-tabs a").click(function () {
    var position = $(this).parent().position();
    var width = $(this).parent().width();
    $("#tile-1 .slider").css({ "left": + position.left, "width": width });
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({ "left": + actPosition.left, "width": actWidth });

// -------------Scroll----------------
$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});

// ---------------Slideanim---------------------
$(window).scroll(function () {
    $(".slideanim").each(function () {
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});

// ----------------Navbar----------------------------


// Sticky navbar
// =========================
$(document).ready(function () {
    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});
