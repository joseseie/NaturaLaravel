$(document).ready(function () {
  //Smooth scrolling when click to nav
  $('#top-nav > ul > li > a.navigation__link').click(function (e) {
      e.preventDefault();
      var curLink = $(this);
      var scrollPoint = $(curLink.attr('href')).position().top - 50;
      $('body,html').animate({
          scrollTop: scrollPoint
      }, 500);
  })
  $(window).scroll(function () {
      onScrollHandle();
  });
  function onScrollHandle() {
      //Get current scroll position
      var currentScrollPos = $(document).scrollTop() + 80;
      //Iterate through all node
      $('#top-nav > ul > li > a.navigation__link').each(function () {
          var curLink = $(this);
          // console.log(curLink)
          var refElem = $(curLink.attr('href'));
          if (refElem.length) {
          //Compare the value of current position and the every section position in each scroll
          if (refElem.position().top <= currentScrollPos && refElem.position().top + refElem.height() > currentScrollPos) {
              //Remove class active in all nav
              $('#top-nav > ul > li').removeClass("active");
              //Add class active
              curLink.parent().addClass("active");
          }
          else {
              curLink.parent().removeClass("active");
          }
        }
      });
  }
});