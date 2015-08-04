( function( $ ) {
  $( "#navToggle" ).click(function() {
    $( "#siteNav" ).slideToggle( "", function() {
      // Animation complete.
    });
  });
} )( jQuery );