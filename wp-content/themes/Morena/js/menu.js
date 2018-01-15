$(".menu_movil").click(function(event){

      event.stopPropagation();

    if($('.contenedor_menu_movil').is(':visible')){
        $(".contenedor_menu_movil").fadeOut();
    }
    else{
         $(".contenedor_menu_movil").fadeIn();
    }

});

$(".contenedor_menu_movil").click(function(event){
    event.stopPropagation();
});



// OOCULTAMOS EL MENU AL DAR CLICK EN CUALQUIER PARTE
$(window).click(function() {
    $(".contenedor_menu_movil").fadeOut();
    
   

});
 