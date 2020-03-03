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
              <div class="box-border">
                <ul class="nav-fichia-eper">
                    <?php
                    foreach((get_the_category()) as $category) { 
                            echo '<li><a href="' .  get_category_link($category->cat_ID) . '">';
                            echo $category->cat_name . ' '; 
                            echo '</a></li>';
                        } 
                    ?>
                </ul>
            </div>
        </div>
      
        <div class="col-md-8">
            <div class="box-border">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php  the_post_thumbnail('large') ?>
                    <?php else: ?>
                        <img class="img-responsive full-img" src="<?php echo get_template_directory_uri(); ?>/src/img/spaceholder.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
            </div>
            <div class="content-border">
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content();?>
                <?php endwhile; ?>
            </div>
        </div>
            <aside class="col-md-4"> 
                <?php do_action( 'before_sidebar' ); ?>
                    <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
                <?php endif; ?>

            </aside>  
        <div class="col-md-12">
            <?php cr_content_nav( 'nav-below' ); ?>
        </div>
<?php get_footer(); ?>