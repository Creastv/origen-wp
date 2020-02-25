
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
                         <div class="icons-exp" >
                                <div class="tab text-center my-paroller" data-aos-delay="200" data-aos="fade-up">
                                    <a class="" href="experiencias/gastronomia.html">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/ico-gastronomia.png" alt="Gastronomía">
                                        </div>
                                        <h3>Gastronomía</h3>
                                    </a>
                                </div>
                                <div class="tab text-center my-paroller" data-aos-delay="300" data-aos="fade-up">
                                    <a class="" href="experiencias/rutas.html">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/ico-rutas.png" alt="Rutas">
                                        </div>
                                        <h3>Rutas</h3>
                                    </a>
                                </div>
                                <div class="tab text-center my-paroller" data-aos-delay="400" data-aos="fade-up">
                                    <a class="" href="experiencias/sensaciones.html">
                                        <div class="icon">
                                             <img src="<?php echo get_template_directory_uri(); ?>/src/img/ico-sensaciones.png" alt="Sensaciones">
                                        </div>
                                        <h3>Sensaciones</h3>
                                    </a>
                                </div>
                                <div class="tab text-center my-paroller" data-aos-delay="500" data-aos="fade-up">
                                    <a class="" href="experiencias/cultura.html">
                                        <div class="icon">
                                             <img src="<?php echo get_template_directory_uri(); ?>/src/img/ico-cultura.png" alt="Cultura">
                                        </div>
                                        <h3>Cultura</h3>
                                    </a>
                                </div> 
                                <div class="tab text-center my-paroller" data-aos-delay="600" data-aos="fade-up">
                                    <a class="" href="experiencias/entretenimiento.html">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/ico-entretenimiento.png" alt="Entretenimiento">
                                        </div>
                                        <h3>Entretenimiento</h3>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 my-paroller" data-aos-delay="700" data-aos="fade-up">
                    <?php $imagenVideoEx = get_field('imagen_ex');
                        if( !empty( $imagenVideoEx ) ): ?>
                        <a href="<?php if( get_field('video_ex') ): ?><?php the_field('video_ex') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/andalucia_v_centenario_ES_rect_960.mp4 <?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive" src="<?php echo esc_url($imagenVideoEx['url']); ?>" alt="<?php echo esc_attr($imagenVideoEx['alt']); ?>"></a>
                        <i class="des-video text-center"><?php echo esc_attr($imagenVideoEx['alt']); ?></i>
                    <?php else : ?>
                        <a href="<?php if( get_field('video_ex') ): ?><?php the_field('video_ex') ?> <?php else: ?> <?php echo get_template_directory_uri(); ?>/src/img/andalucia_v_centenario_ES_rect_960.mp4 <?php endif; ?>" class="html5lightbox" data-width="800" data-height="520" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/src/img/en-andalutcia-empezo-todo.jpg" alt=""></a>
                        <i class="des-video text-center">Proyecto Andalucía, Origen y Destino</i>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
