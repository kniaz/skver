$(document).ready(function () {
  if ($(window).width() > 768) {
    console.log(window.width);
    $('#fullpage').fullpage({
      scrollingSpeed: 900,
      css3: true,
      resize: false,
      autoScrolling: true,
      paddingTop: 40,
      paddingBottom: 0,
      normalScrollElementTouchThreshold: 1,
      // verticalCentered: false,
      navigation: true,
      navigationPosition: 'right'
    });
  }
  $('#scene').parallax();

});
