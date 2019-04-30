// makes the parallax elements
function parallaxIt() {

    // create variables
    var $fwindow = $(window);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
    // on window scroll event
    $fwindow.on('scroll resize', function() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    }); 
  
    // for each of content parallax element
    $('[data-type="content"]').each(function (index, e) {
      var $contentObj = $(this);
      var fgOffset = parseInt($contentObj.offset().top);
      var yPos;
      var speed = ($contentObj.data('speed') || 1 );
  
      $fwindow.on('scroll resize', function (){
        yPos = fgOffset - scrollTop / speed; 
  
        $contentObj.css('top', yPos);
      });
    });
  
    // for each of background parallax element
    $('[data-type="background"]').each(function(){
      var $backgroundObj = $(this);
      var bgOffset = parseInt($backgroundObj.offset().top);
      var yPos;
      var coords;
      var speed = ($backgroundObj.data('speed') || 0 );
  
      $fwindow.on('scroll resize', function() {
        yPos = - ((scrollTop - bgOffset) / speed); 
        coords = '40% '+ yPos + 'px';
  
        $backgroundObj.css({ backgroundPosition: coords });
      }); 
    }); 
  
    // triggers winodw scroll for refresh
    $fwindow.trigger('scroll');
  };
  
  parallaxIt();

  // -------------Scroll----------------
$(document).ready(function () {

  //Check to see if the window is top if not then display button
  $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
          $('.scrollToTop').fadeIn();
      } else {
          $('.scrollToTop').fadeOut();
      }
  });

  //Click event to scroll to top
  $('.scrollToTop').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 800);
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