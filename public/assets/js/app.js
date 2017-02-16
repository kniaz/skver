$(document).ready(function () {
  if ($(window).width() > 768) {
      $('#fullpage').fullpage({
          scrollingSpeed: 900,
          css3: true,
          resize: false,
          autoScrolling: true,
          paddingTop: 40,
          paddingBottom: 0,
          normalScrollElementTouchThreshold: 1,
          navigation: true,
          navigationPosition: 'right'
      });
  }
    $('#scene').parallax();

    $('.mobile-menu').click(function(){
        $('.menu').toggle();
    })
});