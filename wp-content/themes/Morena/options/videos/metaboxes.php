<?php 
 add_action( 'add_meta_boxes', 'videos_post' );
  function videos_post( $post ) {
  add_meta_box( 
  'em-img-meta', // atributo ID
  '<h2>Inserta un video</h2>', // Título
  'datos_video', // Función que muestra el HTML que aparecerá en la pantalla
  'videos', // Tipo de entrada. Puede ser 'post', 'page', 'link', o 'custom_post_type'
  'normal', // Parte de la pantalla donde aparecerá. Puede ser 'normal', 'advanced', o 'side'
  'default' // Prioridad u orden en el que aparecerá. Puede ser 'high', 'core', 'default' o 'low'
  );
  }



  function datos_video( $post ) { 
      $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));
      $video_facebook = (get_post_meta($post->ID, 'id_video_facebook', true));
  ?>


  <h3>Videos de Youtube </h3><br>
  <div><b>Tan solo copia el cógido que le sigue después de "v=" en la URL </b><br>Ejemplo: https://www.youtube.com/watch?v=<b>
  <span style="color:#EC3839">MrlUPrivX7A</span></b></div> <br>

  <input type="text" name="id_video_youtube" id="id_video_youtube" value='<?php echo  $video_youtube;  ?>' style="width: 600px;" /><br><br>




  <?php }


  add_action('save_post', 'post_video_youtube');
  function post_video_youtube() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_video_youtube'];
  update_post_meta($post_id, 'id_video_youtube', $var_1);
 }

  add_action('save_post', 'post_video_facebook');
  function post_video_facebook() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_video_facebook'];
  update_post_meta($post_id, 'id_video_facebook', $var_1);

}