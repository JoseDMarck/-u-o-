<div id="carouselVideosMovil" class="carousel slide sliderOnMovil" data-ride="carousel">

 
	<ol class="carousel-indicators videosMovil">
    	    <li data-target="#carouselVideosMovil" data-slide-to="0" class="active"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="1"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="2"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="3"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="4"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="5"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="6"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="7"></li>
      <li data-target="#carouselVideosMovil" data-slide-to="8"></li>
 	 </ol>





<!-- Apartado de noticias para Slider -->
  <div class="carousel-inner" role="listbox">
    

  <!--Bloque de noticia 1: -->
     <?php 
            $my_query = new WP_Query();

            $my_query = new WP_Query( array('post_type' => 'videos', 'posts_per_page' => 9, 'order' => 'DESC', 'paged'=> $paged )); 
            $count = 0;
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
            $count ++;
            $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true));
            if ($count == $my_query->current_post > 0 && ( $my_query->current_post + 1 ) % 1 == 0 ) :
            ?>


   <div class="carousel-item">
        <div class="Bloque-Slider-Videos">
              <div class="contenedor_videos">
           

                <div class="videos">
                  <div class="subcontendor">
                    <div class="overlayVideo"></div>
                    <div class="btn_play_video <?php echo $video_youtube ?>"></div>
                    <div class="imagen"><?php the_post_thumbnail(); ?></div>
                  </div>  
                </div>  <!-- videos -->

                
    

                <div style="clear: both"></div>

              </div><!-- contenedor_videos -->



        </div> <!-- Bloque-Slider-Noticias -->



    </div><!-- carrousel -->

    <?php else: ?>
 
    <div class="carousel-item active">
        <div class="Bloque-Slider-Videos">
              <div class="contenedor_videos">
           

                <div class="videos">
                  <div class="subcontendor">
                    <div class="overlayVideo"></div>
                    <div class="btn_play_video <?php echo $video_youtube ?>"></div>
                    <div class="imagen"><?php the_post_thumbnail(); ?></div>
                  </div>  
                </div>  <!-- videos -->

                
    

                <div style="clear: both"></div>

              </div><!-- contenedor_videos -->



        </div> <!-- Bloque-Slider-Noticias -->



    </div><!-- carrousel -->

<?php endif; ?>
<?php endwhile; ?>  
    



    



  </div>


 
  <a class="carousel-control-prev arrows_home_post-movil" href="#carouselVideosMovil" role="button" data-slide="prev">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/white_arrow-left.png"   />
    
  </a>


  <a class="carousel-control-next  arrows_home_post-movil" href="#carouselVideosMovil" role="button" data-slide="next">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/white_arrow-right.png" />
  </a>

  


</div>