
<?php

/**
 * Block Name:  Título- Vídeo - Descripción
 *
 */
$customeId = get_field('id_tvd');
$id = 'id="' . $customeId . '"';
$px = 'px';
$pTop = get_field('padding-top_tvd') . 'px';
$pBottom = get_field('padding-bottom_tvd') . 'px';
?>
<section  <?php echo $id; ?> class="sec-wrap" style="padding-top:<?php echo $pTop; ?>; padding-bottom:<?php echo $pBottom; ?>;">
        <div class="container-fluid <?php the_field('container_tvd') ?>">
            <div class="row">
                 <div class="col-md-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="header-section">
					    <?php if( get_field('subtitulo_tvd') ): ?>
							<span><?php the_field('subtitulo_tvd') ?></span>
						<?php else: ?>
						    <span>Origen & Destino</span>
						<?php endif; ?>
						<?php if( get_field('titulo_tvd') ): ?>
							<h2><?php the_field('titulo_tvd') ?></h2>
						<?php endif; ?>
                    </div>
                </div>

                        
                <div class="col-md-4 col-sm-4 my-paroller" data-aos-delay="300" data-aos="fade-up" data-aos-offset="100">
                    <div class="box-border text-center">
                        <?php $imagenVideo = get_field('imagen_tvd');
                            if( !empty( $imagenVideo ) ): ?>
                                <a href="<?php if( get_field('video_tvd') ): ?><?php the_field('video_tvd') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/proyecto-andalucia-origen-u-destino.mp4<?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive" src="<?php echo esc_url($imagenVideo['url']); ?>" alt="<?php echo esc_attr($imagenVideo['alt']); ?>"></a>
                                <i class="des-video"><?php echo esc_attr($imagenVideo['alt']); ?></i>
                        <?php else : ?>
                            <a href="<?php if( get_field('video_tvd') ): ?><?php the_field('video_tvd') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/proyecto-andalucia-origen-u-destino.mp4<?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/src/img/en-andalutcia-empezo-todo.jpg" alt=""></a>
                            <i class="des-video">Proyecto Andalucía, Origen y Destino</i>
                        <?php endif; ?>
                    </div>
                </div>
                    <div class="col-md-8 col-sm-8  my-paroller" data-aos-delay="400" data-aos="fade-up" data-aos-offset="100">
                        <div class="content-border">
                            <?php if( get_field('descripcion_tvd') ): ?>
                                <?php the_field('descripcion_tvd') ?>
                            <?php endif; ?>
                            <?php if( get_field('url_tvd') && get_field('texto_tvd') ): ?>
                                <a href="<?php the_field('url_tvd') ?>" class="btn"><?php the_field('texto_tvd') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>


