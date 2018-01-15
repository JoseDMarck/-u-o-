(function( $ ) {
			  $(".contacto_form").validate({
			    rules: {
			      nombre: { required: true, minlength: 2},
			      correo: { required:true, email: true},
			      descripcion: { required: true, minlength: 2},

			    },
			    messages: {
			      nombre: "Este campo es obligatorio.",
			      correo: "Este campo es obligatorio y debe tener formato de email correcto.",
			      descripcion: "Este campo es obligatorio.",
			       
			    }

			   


			  });

})( jQuery );

 




 