<script type="text/javascript" src="http://www.canalesdeayuda.org/includes/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://www.canalesdeayuda.org/includes/jquery.validate.js"></script>
<script type="text/javascript">$().ready(function() {
  $("#formcontacto").validate({
    rules: {
      nombre: { required: true, minlength: 2},
      correo: { required:true, email: true},
      asunto : { required: true, minlength: 2},
      mensaje: { required:true, minlength: 2},
      
    },
    messages: {
      nombre: "El campo NOMBRE es obligatorio.",
      correo : "El campo CORREO es obligatorio y debe tener formato de email correcto.",
      asunto : "El campo ASUNTO es obliogatorio.",
      mensaje : "El campo MENSAJE es obligatorio",
      
    }
  });
});

</script> 

<style>
 form label.error {
color: red;
font-family: ITCGaramond-Book;
font-size: 15px;
 }
</style>

<?php get_header(); 

/*
Template name: contacto
*/


   get_template_part('menu_section'); 
if (have_posts()) : while (have_posts()) : the_post();

    global $post;
    
   $post_name = $post->post_name;
    
    $post_id = get_the_ID();
    
?>  
     
    <div id="<?php echo $post_name; ?>" class="page<?php echo $post_id; ?> section<?php if((get_post_meta($post_id, "rnr_assign_home") == true) ){ echo ' fullscreen home';} else { echo ' '.$post_name; }?>"><!-- SECTION -->


    <?php if((get_post_meta( get_the_ID(), 'rnr_disable_title', true )!= true) && (get_post_meta($post_id, 'rnr_assign_home', true)!= true) ){ ?>    
  <br>
 <div id="uno">

 <div id="dos">
<!-- Banner_imagen_2  primer banner de lado derecho------------------------------------------------- -->
<?php $em_mtbx_img2 = get_post_meta( $post->ID, '_em_mtbx_img2', true ); 
if($em_mtbx_img2 != '') { // Si existe el valor ?>
<img src="<?php echo $em_mtbx_img2; ?>" alt="" id="img_tam" />
  <?php } ?>
 <!-- Banner_imagen_2  primer banner de lado derecho------------------------------------------------- -->
   
<?php $leyendaID= get_post_meta( $post->ID, 'id_leyenda', true ); 
if($leyendaID != '') {?> <div id="leyenda"><?php echo $leyendaID;?></div>  <?php }?>
   </div> <!--#dos -->
 </div><!--#uno -->
 
    <div class="container"> 
           <div class="row">  
      <div class="sixteen columns">            
              <!-- START TITLE -->              
        <div class="title">
          <br><br>
          <h1 class="header-text"><span id="puntillo"><img src="http://www.canalesdeayuda.org/puntito_blue.png"> <img src="http://www.canalesdeayuda.org/puntito_blue.png"></span><?php if(get_post_meta( get_the_ID(), 'rnr_alt_title', true )){ echo get_post_meta( get_the_ID(), 'rnr_alt_title', true ); } else { the_title(); } ?><span id="puntillo"><img src="http://www.canalesdeayuda.org/puntito_blue.png"> <img src="http://www.canalesdeayuda.org/puntito_blue.png"></span></h1>
                  

                </div><!-- END TITLE -->                               
      </div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
   
 <!-- ================================= contacto ================ -->      


<?php
if(isset($_POST['enviar'])) 
{ 
    

  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
  require "includes/class.phpmailer.php";

  //instanciamos un objeto de la clase phpmailer al que llamamos
  //por ejemplo mail
  $mail = new phpmailer();

  //Definimos las propiedades y llamamos a los métodos
  //correspondientes del objeto mail

  //Con PluginDir le indicamos a la clase phpmailer donde se
  //encuentra la clase smtp que como he comentado al principio de
  //este ejemplo va a estar en el subdirectorio includes
  $mail->PluginDir = "includes/";

  //Con la propiedad Mailer le indicamos que vamos a usar un
  //servidor smtp
  $mail->Mailer = "smtp";

  //Asignamos a Host el nombre de nuestro servidor smtp
  $mail->Host = "mail.canalesdeayuda.org";
//Le indicamos que el servidor smtp requiere autenticación
$mail->SMTPAuth = true;

//Le decimos cual es nuestro nombre de usuario y password  

$mail->Username = "jose@canalesdeayuda.org";

$mail->Password = "1temporal";

//Indicamos cual es nuestra dirección de correo y el nombre que

//queremos que vea el usuario que lee nuestro correo

$mail->From = "canales@mailservice.com";

$mail->FromName = "Canales de ayuda";

//el valor por defecto 10 de Timeout es un poco escaso dado que

//voy a usar una cuenta gratuita, por tanto lo pongo a 30
$mail->Timeout=30;

//Indicamos cual es la dirección de destino del correo

$mail->AddAddress("adi@canalesdeayuda.org.mx");



//Asignamos asunto y cuerpo del mensaje

//El cuerpo del mensaje lo ponemos en formato html, haciendo

//que se vea en negrita

$mail->Subject = "Mensaje de Canalesdeayuda.org";

$mail->CharSet = "UTF-8";

$mail->IsHTML(true);

$mail->Body = "



<html xmlns='http://www.w3.org/1999/xhtml'>
<head>

<html>
 <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

</head>
<Body>

<style>

@font-face{font-family: ITCGaramond-Book; src:url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/itc-garamond-book-1361507938.ttf'), url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/itc-garamond-book-1361507938.ttf'); /* IE9 */}
@font-face{font-family: Amatic SC; src:url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/AmaticSC-Bold.ttf'), url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/AmaticSC-Bold.ttf'); /* IE9 */}
@font-face{font-family: ITCGaramond-Book; src:url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/itc-garamond-book-1361507938.ttf'), url('http://www.canalesdeayuda.org/wp-content/themes/jarvis_wp/css/Fonts/itc-garamond-book-1361507938.ttf'); /* IE9 */}


#letraA{ color: #A18A6E; font-family: 'Amatic SC'; font-size: 35px;}
#letraB{ color: #7E8084; font-family: 'ITCGaramond-Book'; font-size: 20px;}


</style>

<img src='http://www.canalesdeayuda.org/wp-content/uploads/2014/06/header_mensaje.png'/>
<br>
      
<span id='letraA'><b>Nombre:</b></span><br><span id='letraB'>". $nombre =  $_POST['nombre'] ." </span>
<br />
<span id='letraA'><b>Correo:</b></span> <br><span id='letraB'>" . $nombre =  $_POST['correo'] ."</span>  
<br />
<span id='letraA'><b>Asunto:</b></span> <br><span id='letraB'>" . $nombre =  $_POST['asunto'] ." </span> 
<br />
<span id='letraA'><b>Mensaje:</b></span> <br> <span id='letraB'>" . $nombre =  $_POST['mensaje'] ." </span>
<br />

";


//Definimos AltBody por si el destinatario del correo

//no admite email con formato html

$mail->AltBody = "Alguien está contactando desde el sitio web Canalesdeayuda.org";

//se envia el mensaje, si no ha habido problemas

//la variable $exito tendra el valor true

$exito = $mail->Send();

//Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas

//como mucho para intentar enviar el mensaje, cada intento se hará 5

//segundos despues del anterior, para ello se usa la funcion sleep

$intentos=1;

while ((!$exito) && ($intentos < 5)) {  sleep(5);

//echo $mail->ErrorInfo;

$exito = $mail->Send();

$intentos=$intentos+1;

}

if(!$exito) {

echo "Problemas enviando correo electrónico a ".$valor;

echo "<br/>".$mail->ErrorInfo;

}

else {

echo "<div id='titulomensaje'>Mensaje enviado correctamente</div>";  } 


}


?>
<br><br>
<p> Los campos marcados con <span style="color:red">*</span> son obligatorios </p>
<br>
<form id="formcontacto" method="post" action="<?php echo selfURL(); ?>">
   
  <p> Nombre<span style="color:red">*</span>:</p>
   <input type="text" id="nombre" name="nombre"><br>
  <p>Correo<span style="color:red">*</span>:</p>
   <input type="text" id="correo" name="correo"><br>
  <p> Asunto<span style="color:red">*</span>:</p>
   <input type="text" id="asunto" name="asunto"><br>
  <p>Mensaje<span style="color:red">*</span>:</p>
   <textarea  id="mensaje" name="mensaje" ></textarea><br>
   <button name="enviar" id="btn_enviar" type="submit"><img src="http://www.canalesdeayuda.org/wp-content/uploads/2014/06/enviarbtn.png"></button>

</form>



<div> <!-- Contacto -->
<br><br>
<span id="letra1">Contacto:</span><br>
<p>
  adi@canalesdeayuda.org.mx<br>
  (52-55) 5575-0575 <br>
  Santa Margarita 430 <br>
  Colonia Del Valle, C.P. 03100 <br>   
  Delegación Benito Juárez <br> 
  México, D.F.
</p>
</div>

<!-- ================================= contacto ================ -->

          </div><!-- END CONTAINER -->       
  <?php } ?>   


      <div class="container">           
           <div style="height:1000px"><?php the_content(); ?></div>
           <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
           <?php /*comments_template(); */?>  
      </div>    


        

    </div><!--END SECTION -->
   
<?php
  
    endwhile;
    endif; 
  wp_reset_query();
?>




<?php get_footer(); ?>
