



// PARA LOS BLOQUES DE LAS SECCIONES:


var numero_hp;
var n_slider = 1;
var lista_elementos = document.getElementById("textos_secciones_d").getElementsByClassName("cont_info_secc");
var cantidad_sliders = lista_elementos.length;

console.log(cantidad_sliders);

$(".Bloque_secciones_off").click(function(){
	 numero_hp = $(this).attr('class').split(' ')[3];
	 console.log(numero_hp);

	 $(".layerOscuro").fadeIn();
	 $(".show_"+numero_hp).fadeIn();


	  n_slider = $(this).attr('class').split(' ')[4];
	  console.log("Estoy en el bullet " + n_slider);

});



// FUNCIONALIDAD DE NEXT
$(".btn_right").click(function(){
	n_slider++;
	if (n_slider > cantidad_sliders ){
		n_slider = 1; 
	}

	SliderNext();

});


function SliderNext(){
	console.log(n_slider);

	$(".cont_info_secc").hide();
	$(".show_cont_"+n_slider).fadeIn();
	
}


// FUNCIONALIDAD DE PREC
$(".btn_left").click(function(){
	n_slider--;
	if (n_slider < 1 ){
		n_slider = cantidad_sliders; 
	}

	SliderPrev();

});


function SliderPrev(){
	console.log(n_slider);

	$(".cont_info_secc").hide();
	$(".show_cont_"+n_slider).fadeIn();
	
}



//BTN Close
$(".btn_close").click(function(){

	$(".layerOscuro").fadeOut();
	$(".cont_info_secc").fadeOut();

});


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


