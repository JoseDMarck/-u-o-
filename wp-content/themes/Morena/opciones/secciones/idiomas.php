<?php 

/*------------------------------------*\
    METABOX RESULTADOS
\*------------------------------------*/

 
add_action( 'add_meta_boxes', 'Idiomas_Generales_secciones' );
function Idiomas_Generales_secciones( $post ) {
add_meta_box( 
'em-img-meta_images', // atributo ID
'<h2>Introduce los datos correspondientes</h2>', // Título
'idiomas_generales_secciones_F', // Función que muestra el HTML que aparecerá en la pantalla
'secciones', // Tipo de entrada. Puede ser 'post', 'page', 'link', o 'custom_post_type'
'normal', // Parte de la pantalla donde aparecerá. Puede ser 'normal', 'advanced', o 'side'
'default' // Prioridad u orden en el que aparecerá. Puede ser 'high', 'core', 'default' o 'low'
);
}



function idiomas_generales_secciones_F( $post ) { 

	?>



<hr>
<h1>Narraciones:</h1>

<h2><b>Narración Español:</b></h2>
 <textarea rows="4" cols="50" name="id_Descripcion_narracion_Es" id="id_Descripcion_narracion_Es">
    <?php echo $Descripcion_narracion_Es = (get_post_meta($post->ID, 'id_Descripcion_narracion_Es', true)); ?>        
 </textarea>
 <br> 

<h2><b>Narración Inglés:</b></h2>
 <textarea rows="4" cols="50" name="id_Descripcion_narracion_En" id="id_Descripcion_narracion_En">
    <?php echo $Descripcion_narracion_En = (get_post_meta($post->ID, 'id_Descripcion_narracion_En', true)); ?>        
 </textarea>
 <br> 

 <h2><b>Narración Francés:</b></h2>
 <textarea rows="4" cols="50" name="id_Descripcion_narracion_Fr" id="id_Descripcion_narracion_Fr">
    <?php echo $Descripcion_narracion_Fr = (get_post_meta($post->ID, 'id_Descripcion_narracion_Fr', true)); ?>        
 </textarea>
 <br> 



<?php }

/*------------------------------------*\
    Actions Descripciones
\*------------------------------------*/

add_action('save_post', 'Descripcion_narracion_Es');
function Descripcion_narracion_Es() {
global $wpdb, $post;
if (!$post_id) $post_id = $_POST['post_ID'];
$var_1= $_POST['id_Descripcion_narracion_Es'];
update_post_meta($post_id, 'id_Descripcion_narracion_Es', $var_1);
}

add_action('save_post', 'Descripcion_narracion_En');
function Descripcion_narracion_En() {
global $wpdb, $post;
if (!$post_id) $post_id = $_POST['post_ID'];
$var_1= $_POST['id_Descripcion_narracion_En'];
update_post_meta($post_id, 'id_Descripcion_narracion_En', $var_1);
}

add_action('save_post', 'Descripcion_narracion_Fr');
function Descripcion_narracion_Fr() {
global $wpdb, $post;
if (!$post_id) $post_id = $_POST['post_ID'];
$var_1= $_POST['id_Descripcion_narracion_Fr'];
update_post_meta($post_id, 'id_Descripcion_narracion_Fr', $var_1);
}





?>