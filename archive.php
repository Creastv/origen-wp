<?php
$tax = $wp_query->get_queried_object();
get_header(); ?>

        <div class="col-md-12">
            <div class="header-section">
                <?php if (get_field('subtitulo', 'option')) : ?>
                    <span><?php echo the_field('subtitulo', 'option'); ?></span>
                <?php else : ?>
                    <span>Origen & Destino</span>
                <?php endif ; ?>

                <h1>
                    <?php
							if ( is_category() ) :
								single_cat_title();
						    elseif ($post->post_type == 'servicios') :
						    	printf( 'Nuestros servicios', 'crea');
						    elseif ($post->post_type == 'escenarios') :
						    	printf( 'Escenarios', 'crea');	
							elseif ($post->post_type == 'Experiencias') :
								printf( 'Experiencias', 'crea');	
							elseif ( is_tag() ) :
								single_tag_title();
							elseif ( $tax ) :
								printf( ''.$tax->name .'', 'crea');
							elseif ( is_author() ) :the_post(); 

								printf( '<span class="vcard">' . get_the_author() . '</span>' );
								rewind_posts();

							elseif ( is_day() ) :
								printf( __( 'Day: %s', 'crea' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
								printf( __( 'Month: %s', 'crea' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							elseif ( is_year() ) :
								printf( __( 'Year: %s', 'crea' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
								_e( 'Asides', 'crea' );

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
								_e( 'Images', 'crea');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
								_e( 'Videos', 'crea' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
								_e( 'Quotes', 'crea' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
								_e( 'Links', 'crea' );

							else :
								_e( 'Blog', 'crea' );

							endif;
						?>
                    </h1>
            </div>
        </div>

		<?php if ($post->post_type == 'escenarios') :?>
			
			<?php get_template_part( 'templates/archive-escenarios', get_post_format() ); ?>
		<?php elseif ($post->post_type == 'experiencias') :?>
			
			<?php get_template_part( 'templates/archive-experiencias', get_post_format() ); ?>
		<?php elseif ($post->post_type == 'servicios') :?>
			<?php if(get_field('descripcion_servicios', 'option')):?>
				<div class="col-md-12">
					<div class="box-border">
						<?php the_field('descripcion_servicios', 'option'); ?>
					</div>
				</div>
			<?php endif; ?>
			<?php get_template_part( 'templates/archive-servicios', get_post_format() ); ?>
		<?php else: ?>
			<div class="col-md-12 col-sm-12">
			    <div class="box-border">
				<div class="" id="grid">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="ficha">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="leemas">lee más</a>
								<hr>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>	                               
				</div>
				</div>
			</div>	
		<?php endif; ?>
		  <script>
        jQuery(document).ready(function($) {
            jQuery('#grid').masonry({
                itemSelector: '.ficha'
            });
        });
    </script>
		
<?php get_footer(); ?>
