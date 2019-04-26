// -------------Date picker-------------------
$('#datepicker').datepicker({
    showOtherMonths: true
});
$('#datepicker2').datepicker({
    showOtherMonths: true
});

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
