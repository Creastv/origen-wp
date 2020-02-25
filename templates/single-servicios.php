<?php get_header(); ?>

        <div class="col-md-12">
            <div class="header-section">
                <?php if (get_field('subtitulo', 'option')) : ?>
                    <span><?php echo the_field('subtitulo', 'option'); ?></span>
                <?php else : ?>
                    <span>Origen & Destino</span>
                <?php endif ; ?>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="col-md-12">
            <div class="content-border">
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content();?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="col-md-12">
            <?php cr_content_nav( 'nav-below' ); ?>
        </div>
<?php get_footer(); ?>