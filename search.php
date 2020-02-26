<?php get_header(); ?>
        <div class="col-md-12">
            <div class="header-section">
                <?php if (get_field('subtitulo', 'option')) : ?>
                    <span><?php echo the_field('subtitulo', 'option'); ?></span>
                <?php else : ?>
                    <span>Origen & Destino</span>
                <?php endif ; ?>
                <h1>Resultado de búsqueda</h1>
            </div>
        </div>
<div class="col-md-12 col-sm-12">
    <div class="box-border">
        <div class="" id="grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="ficha">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="leemas">lee más</a>
                        <hr>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>	                               
        </div>
    </div>
</div>
<div class="col-md-12 text-center">
 <?php cr_pagination(); ?>
</div>


<?php get_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        jQuery('#grid').masonry({
            itemSelector: '.ficha'
        });
    });
</script>