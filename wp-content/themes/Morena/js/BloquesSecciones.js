if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    //$(".header").css("position","relative");
  
  }
 else {
     
     $(".Bloque_secciones_off").mouseover(function(){
	$(this).find(".Bloque_secciones_on").fadeIn();
	});
	
	$(".Bloque_secciones_off").mouseleave(function(){
		$(".Bloque_secciones_on").fadeOut();
	});
	

  }