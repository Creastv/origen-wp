
<?php

/**
 * Block Name:  Escenarios
 *
 */
$customeId = get_field('id_ex');
$id = 'id="' . $customeId . '"';
$px = 'px';
$pTop = get_field('padding-top_ex') . 'px';
$pBottom = get_field('padding-bottom_ex') . 'px';

?>
    <section  <?php echo $id; ?> class=" experiencias sec-wrap" style="padding-top:<?php echo $pTop; ?>; padding-bottom:<?php echo $pBottom; ?>;">
        <div class="container-fluid <?php the_field('container_ex') ?> ">
            <div class="row">
                <div class="col-md-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="header-section">
					    <?php if( get_field('subtitulo_ex') ): ?>
							<span><?php the_field('subtitulo_ex') ?></span>
						<?php else: ?>
						    <span>Origen & Destino</span>
						<?php endif; ?>
						<?php if( get_field('titulo_ex') ): ?>
							<h2><?php the_field('titulo_ex') ?></h2>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="box-border">
                        <?php if( get_field('descripcion_ex') ): ?>
							<?php the_field('descripcion_ex') ?>
                        <?php endif; ?>
                        <?php
                            $tax = 'experiencia';
                            $terms = get_terms( $tax, $args = array(
                            'hide_empty' => false, 
                            )); 
                            $counter = 0;
                            
                        ?>
                        <?php if( ! empty( $terms ) ) : ?>
                            <?php foreach( $terms as $term ) : ?> 
                                <?php if ($counter % 5 == 0 && $counter != 0): ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($counter % 5 == 0 or $counter == 0): ?>
                                    <div class="icons-exp" >
                                <?php endif; ?>
                                <div class="tab text-center my-paroller" data-aos-delay="200" data-aos="fade-up">
                                    <a class="" href="<?php echo get_term_link($term) ?>">
                                        <div class="icon">
                                            <img src="<?php the_field('imagen_descatada_block', $term); ?>" alt="<?php echo $term->name ?>">
                                        </div>
                                        <h3><?php echo $term->name ?></h3>
                                    </a>
                                </div>
                            <?php $counter++; endforeach; ?>
                        <?php endif; ?>
                   </div>
                      
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 my-paroller" data-aos-delay="700" data-aos="fade-up">
                    <?php $imagenVideoEx = get_field('imagen_ex');
                        if( !empty( $imagenVideoEx ) ): ?>
                        <a href="<?php if( get_field('video_ex') ): ?><?php the_field('video_ex') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/andalucia_v_centenario_ES_rect_960.mp4 <?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive center-block" src="<?php echo esc_url($imagenVideoEx['url']); ?>" alt="<?php echo esc_attr($imagenVideoEx['alt']); ?>"></a>
                        <i class="des-video text-center"><?php echo esc_attr($imagenVideoEx['alt']); ?></i>
                    <?php else : ?>
                        <a href="<?php if( get_field('video_ex') ): ?><?php the_field('video_ex') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/andalucia_v_centenario_ES_rect_960.mp4 <?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/src/img/en-andalutcia-empezo-todo.jpg" alt=""></a>
                        <i class="des-video text-center">Proyecto Andalucía, Origen y Destino</i>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
