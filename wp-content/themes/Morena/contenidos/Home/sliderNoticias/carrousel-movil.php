<div id="carouselPostMovil" class="carousel slide sliderOnMovil" data-ride="carousel">

 
	<ol class="carousel-indicators">
    	<li data-target="#carouselPostMovil" data-slide-to="0" class="active"></li>
      <li data-target="#carouselPostMovil" data-slide-to="1"></li>
      <li data-target="#carouselPostMovil" data-slide-to="2"></li>
      <li data-target="#carouselPostMovil" data-slide-to="3"></li>
      <li data-target="#carouselPostMovil" data-slide-to="4"></li>
    	<li data-target="#carouselPostMovil" data-slide-to="5"></li>
 	 </ol>





<!-- Apartado de noticias para Slider -->
  <div class="carousel-inner" role="listbox">
    

  <!--Bloque de noticia 1: -->
     <?php 
            $my_query = new WP_Query();

            $my_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'paged'=> $paged )); 
            $count = 0;
            while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
            $count ++;
            if ($count == $my_query->current_post > 0 && ( $my_query->current_post + 1 ) % 1 == 0 ) :
            ?>


    <div class="carousel-item">
           	

            <div class="Bloque-Slider-Noticias">
           			<div class="NoticiasContenedor">
           				
         

                    <div class="Bloques">
                    <div class="SubBloque">
           		         <div class="imagen">
                        <?php the_post_thumbnail(); ?>
           		         </div><!-- imagen -->

           		         <div class="titulo">
           		         	<?php the_title(); ?>
           		         </div>

           		         <div class="descripcion">
           		         	<?php echo $extracto = postExtracto($post_id);  ?>
           		         </div>
           		         
           		         <div class="leermas">
           		         	<a href="<?php echo the_permalink(); ?>">Leer más</a>
           		         </div>
                    </div>  <!-- SubBloques -->  
                    </div>	<!--Bloques -->	


                     
              

           		    <div style="clear: both;"></div>
           			</div><!--NoticiasContenedor -->

           	</div> <!-- Bloque-Slider-Noticias -->




    </div><!-- carrousel -->

    <?php else: ?>

       <div class="carousel-item active">
            

            <div class="Bloque-Slider-Noticias">
                <div class="NoticiasContenedor">
                  
         

                    <div class="Bloques">
                    <div class="SubBloque">
                       <div class="imagen">
                        <?php the_post_thumbnail(); ?>
                       </div><!-- imagen -->

                       <div class="titulo">
                        <?php the_title(); ?>
                       </div>

                       <div class="descripcion">
                        <?php echo $extracto = postExtracto($post_id);  ?>
                       </div>
                       
                       <div class="leermas">
                        <a href="<?php echo the_permalink(); ?>">Leer más</a>
                       </div>
                    </div>  <!-- SubBloques -->  
                    </div>  <!--Bloques --> 


                     
              

                  <div style="clear: both;"></div>
                </div><!--NoticiasContenedor -->

            </div> <!-- Bloque-Slider-Noticias -->




    </div><!-- carrousel -->


<?php endif; ?>
<?php endwhile; ?>  
    



    



  </div>


 
  <a class="carousel-control-prev arrows_home_post-movil" href="#carouselPostMovil" role="button" data-slide="prev">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/arrow-left.png"   />
    
  </a>


  <a class="carousel-control-next  arrows_home_post-movil" href="#carouselPostMovil" role="button" data-slide="next">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/arrow-right.png" />
  </a>

  


</div>