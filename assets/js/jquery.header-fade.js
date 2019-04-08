jQuery(document).ready(function(){

  jQuery(window).scroll(function() {
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 200) {
          jQuery("body").addClass("header-is-past");
      } else {
          jQuery("body").removeClass("header-is-past");
      }

      if (scroll >= 300) {
          jQuery("body").addClass("header-is-fade-in");
      } else {
          jQuery("body").removeClass("header-is-fade-in");
      }
  });

});
