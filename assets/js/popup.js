( function( $ ) {

  $( document ).ready(function() {

    $(".mobile-menu-toggle").click(function(){
      $("body").toggleClass("popup-menu-active");
    });

    $("#oberon-popup-menu-close, #popup-menu-overlay").click(function(){
      $("body").removeClass("popup-menu-active");
    });

  });

} )( jQuery );
