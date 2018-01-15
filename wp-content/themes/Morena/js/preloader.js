jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
  $('.Loading').fadeOut('slow',function(){$(this).remove();});
});


});