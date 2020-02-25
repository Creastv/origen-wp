<?php
/**
*
* Template name: Plantilla de la página de Presentación
*/
 get_header(); ?>
    
        <div class="col-md-12">
            <div class="header-section">
                <span>Origen & Destino</span>
                <h1>En Andalucía empezó todo</h1>
            </div>
        </div>
                 
        <div class="col-md-3 col-sm-4">
            <div class="box-border text-center">
                <a href="<?php echo get_template_directory_uri(); ?>/src/img/proyecto-andalucia-origen-u-destino.mp4" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/src/img/en-andalutcia-empezo-todo.jpg" alt=""></a>
                <i class="des-video">Proyecto Andalucía, Origen y Destino</i>
                <br>
                <a href="<?php echo get_template_directory_uri(); ?>/src/img/andalucia_v_centenario_ES_rect_960.mp4" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/src/img/sigue-el-camino-del-sol-v- centenario-de-la-primera-vuelta-al-mundo.jpg" alt=""></a>
                <i class="des-video">Sigue el Camino del Sol - V Centenario de la I Vuelta al Mundo</i>
           </div>
        </div>
       <div class="col-md-9 col-sm-8">
        <div class="content-border">
            <?php while (have_posts()) : the_post(); ?>
             <?php the_content();?>
            <?php endwhile; ?>
              
            </div>
        </div>
    </div>


<?php get_footer(); ?>