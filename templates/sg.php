<?php
/**
*
* Template name: Plantilla de la página de Inicio
*/
get_header(); ?>
  
    <div id="preloader">
         <?php $imgPreLoader = get_field('img', 'option');
        if( !empty( $imgPreLoader ) ): ?>
            <img  class="img-fade" src="<?php echo esc_url($imgPreLoader['url']); ?>" alt="<?php echo esc_attr($imgPreLoader['alt']); ?>" />
        <?php else : ?>
            <img class="img-fade" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-origen-destino.jpg" alt="<?php wp_title( '|', true, 'right' ); ?>"></a>
        <?php endif; ?>
    </div>
    <article>
    
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; ?>
         
    </article>
<?php get_footer(); ?>