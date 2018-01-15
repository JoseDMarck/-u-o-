
    <div id="carouselVideos" class="carousel slide sliderOnWeb" data-ride="carousel">

 
  <ol class="carousel-indicators">
      <li data-target="#carouselVideos" data-slide-to="0" class="active"></li>
      <li data-target="#carouselVideos" data-slide-to="1"></li>
      <li data-target="#carouselVideos" data-slide-to="2"></li>
   </ol>

   



<!-- Apartado de noticias para Slider -->
  <div class="carousel-inner" role="listbox">
    

  <!--Bloque de noticia 1: -->
    <div class="carousel-item active">
        <div class="Bloque-Slider-Videos">
              <div class="contenedor_videos">
                
              <?php 
              $my_query = new WP_Query();
              $my_query = new WP_Query( array('post_type' => 'videos', 'posts_per_page' => 3, 'order' => 'DESC', 'paged'=> $paged )); 
              while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
              $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));

              ?>

                <div class="videos">
                  <div class="subcontendor">
                    <div class="overlayVideo"></div>
                    <div class="btn_play_video <?php echo $video_youtube ?>"></div>
                    <div class="imagen"><?php the_post_thumbnail(); ?></div>
                  </div>  
                </div>  <!-- videos -->

                
            <?php endwhile; ?>  
                     



                <div style="clear: both"></div>

              </div><!-- contenedor_videos -->



        </div> <!-- Bloque-Slider-Noticias -->



    </div><!-- carrousel -->
    

      <!--Bloque de noticia 2: -->
    <div class="carousel-item">
        <div class="Bloque-Slider-Videos">
               
               <div class="Bloque-Slider-Videos">
              <div class="contenedor_videos">
                
              <?php 
              $my_query = new WP_Query();
              $my_query = new WP_Query( array('post_type' => 'videos', 'posts_per_page' => 3, 'offset' => 3, 'order' => 'DESC', 'paged'=> $paged )); 
              while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
              $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));

              ?>

                <div class="videos">
                  <div class="subcontendor">
                    <div class="overlayVideo"></div>
                    <div class="btn_play_video <?php echo $video_youtube ?>"></div>
                    <div class="imagen"><?php the_post_thumbnail(); ?></div>
                  </div>  
                </div>  <!-- videos -->

                
            <?php endwhile; ?>  
                     
              </div> <!-- Bloque-Slider-Noticias -->
              <div style="clear: both"></div>

              </div><!-- contenedor_videos -->

        </div> <!-- Bloque-Slider-Noticias -->

    </div><!-- carrousel -->


      <!--Bloque de noticia 3: -->
    <div class="carousel-item">
        <div class="Bloque-Slider-Videos">
               
               <div class="Bloque-Slider-Videos">
              <div class="contenedor_videos">
                
              <?php 
              $my_query = new WP_Query();
              $my_query = new WP_Query( array('post_type' => 'videos', 'posts_per_page' => 3, 'offset' => 6, 'order' => 'DESC', 'paged'=> $paged )); 
              while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
              $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));

              ?>

                <div class="videos">
                  <div class="subcontendor">
                    <div class="overlayVideo"></div>
                    <div class="btn_play_video <?php echo $video_youtube ?>"></div>
                    <div class="imagen"><?php the_post_thumbnail(); ?></div>
                  </div>  
                </div>  <!-- videos -->

                
            <?php endwhile; ?>  
                     
              </div> <!-- Bloque-Slider-Noticias -->
              <div style="clear: both"></div>

              </div><!-- contenedor_videos -->

        </div> <!-- Bloque-Slider-Noticias -->

    </div><!-- carrousel -->


</div><!-- Carrousel inner -->
 </div><!-- sección 1 -->

  </div> <!-- PaginaHome -->


  <div class="video_player_contenedor">
    <div class="btn_close_video"></div>
    <div class="contenedorVideo">
        
        <div id="player"></div>

    </div>
  </div><!-- video_player_contenedor -->
