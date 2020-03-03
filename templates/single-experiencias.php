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
        
        <div class="box-border ficha-experiencia">
            <?php 
                $termss = get_the_terms( $post->ID, 'experiencia');
                foreach ( $termss as $termo ) {
                    $termoID[] = $termo->slug;
                }
            ?>
            <?php
                $tax = 'experiencia';
                $terms = get_terms( $tax, $args = array(
                'hide_empty' => false, )); 
                
               
                
            ?> 
            <?php if( ! empty( $terms ) ) : ?>
                <ul class="nav-fichia-eper">
                <?php foreach( $terms as $term ) : ?>
                     <?php  $class = $termoID[0] == $term->slug ? 'active' : '' ; ?>  
                    <li class="<?php echo $class; ?>"><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name; ?></a></li>
                 <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php  the_post_thumbnail('large') ?>
                    <?php else: ?>
                        <img class="img-responsive full-img" src="<?php echo get_template_directory_uri(); ?>/src/img/spaceholder.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="otra-f-e">
                            <?php $post_objects = get_field('proveedor');
                                if( $post_objects ): ?>
                                <div class="proveedor">
                                <h4>Proveedor</h4>
                                    <?php foreach( $post_objects as $post): ?>
                                        <?php setup_postdata($post); ?>
                                         <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php endforeach; ?>
                                </div>
                                    <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                       
                        
                            <?php $post_objects = get_field('otras_experiencias_proveedor');
                                if( $post_objects ): ?>
                                     <div class="otro">
                                    <h4>Otras experiencias de este proveedor</h4>
                                    <ul>
                                    <?php foreach( $post_objects as $post): ?>
                                        <?php setup_postdata($post); ?>
                                         <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php endforeach; ?>
                                    </ul>
                                    </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="info-exp">
                       <?php while (have_posts()) : the_post(); ?>
               
                        <?php the_content();?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>