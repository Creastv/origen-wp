<?php
/**
*
* Template name: Plantilla de la página de Inicio
*/
get_header(); ?>
    <div id="preloader">
        <img class="img-fade" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-origen-destino.jpg" alt="Origen & Destino | Quinto Centenario de la Primera Vuelta al Mundo">
    </div>
    <article>
    
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; ?>
         
    </article>
<?php get_footer(); ?>