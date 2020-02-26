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
        <div class="col-md-12 col-sm-12">
            <div class="box-border">
                <div class="row">
                    <div class="col-md-4">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php  the_post_thumbnail('large') ?>
                        <?php else: ?>
                            <img class="img-responsive full-img" src="<?php echo get_template_directory_uri(); ?>/src/img/spaceholder.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>


                        <div class="otra-f-r">
                            <h4>Experiencias de este proveedor</h4>
                                <?php $post_objects = get_field('experiencias_de_proveedor');
                                if( $post_objects ): ?>
                                    <ul>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php endif;
                                $post_objects = get_field('post_objects');
                                if( $post_objects ): ?>
                                    <ul>
                                    <?php foreach( $post_objects as $post_object): ?>
                                        <li>
                                            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-">
                        <div class="info-proveedor">
                            <?php while (have_posts()) : the_post(); ?>
                            <?php the_content();?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div> 
       </div>
<?php get_footer(); ?>