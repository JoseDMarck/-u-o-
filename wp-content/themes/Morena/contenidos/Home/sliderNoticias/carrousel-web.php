<div id="carouselExampleIndicators" class="carousel slide sliderOnWeb" data-ride="carousel">

 
	<ol class="carousel-indicators">
    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 	 </ol>





<!-- Apartado de noticias para Slider -->
  <div class="carousel-inner" role="listbox">
    

  <!--Bloque de noticia 1: -->
    <div class="carousel-item active">
           	<div class="Bloque-Slider-Noticias">
           			<div class="NoticiasContenedor">
           				
  <?php 
  $my_query = new WP_Query();
  $my_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'paged'=> $paged )); 
  while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
  ?>

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

  <?php endwhile; ?>  
                     
            

           		    <div style="clear: both;"></div>
           			</div><!--NoticiasContenedor -->

           	</div> <!-- Bloque-Slider-Noticias -->





    </div><!-- carrousel -->
    

  <!--Bloque de noticia 2: -->  
    <div class="carousel-item">
          <div class="Bloque-Slider-Noticias">
                <div class="NoticiasContenedor">
                  
                 
            <?php 
              $my_query = new WP_Query();
              $my_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'offset' => 3, 'paged'=> $paged )); 
              while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
              ?>

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

           <?php endwhile; ?>
              


                  
                  
                       

                  <div style="clear: both;"></div>
                </div><!--NoticiasContenedor -->

            </div> <!-- Bloque-Slider-Noticias -->
     


    </div><!-- Carrousel -->



  <!--Bloque de noticia 3: -->
    <div class="carousel-item">
            <div class="Bloque-Slider-Noticias">
                <div class="NoticiasContenedor">
                  
                 
        <?php 
              $my_query = new WP_Query();
              $my_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'offset' => 6, 'paged'=> $paged )); 
              while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
        ?>

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

           <?php endwhile; ?>
                  <div style="clear: both;"></div>
                </div><!--NoticiasContenedor -->

            </div> <!-- Bloque-Slider-Noticias -->

    </div><!-- carrousel -->


  </div>


 
  <a class="carousel-control-prev arrows_home_post" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/arrow-left.png" class="arrows_home_post" />
    
  </a>


  <a class="carousel-control-next arrows_home_post" href="#carouselExampleIndicators" role="button" data-slide="next">
   <img src="<?php echo get_template_directory_uri();?>/images/slider/arrow-right.png" />
  </a>

  


</div>