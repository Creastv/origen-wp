
<?php

/**
 * Block Name:  Hero imagen
 *
 */
?>
    <section id="slider" class="my-paroller" data-aos-delay="100" data-aos="fade-up" >
        <div class="owl-home">
            <div class="img-slide img-slide-1"  style="background-image:url(<?php the_field('imagen') ?>);">
                <?php if (get_field('titulo')) :?>
                   <h1 class="text-center typing my-paroller" data-aos-delay="700" data-aos="fade-up" data-aos-duration="500"><?php the_field('titulo'); ?></h1>
                <?php else: ?>
                   <h1 class="text-center typing my-paroller" data-aos-delay="700" data-aos="fade-up" data-aos-duration="500">Origen & Destino</h1>
                <?php endif; ?>
                <?php if (get_field('titulo')) :?>
                  <p class="text-center my-paroller" data-aos-delay="900" data-aos="fade-up"><?php the_field('subtitulo'); ?></p>
                <?php else: ?>
                   <p class="text-center my-paroller" data-aos-delay="900" data-aos="fade-up">Sigue el camino del Sol</p>
                <?php endif; ?>

                <div class="button-inf">
                    <div class="container-fluid wrap">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img class="logos-main" src="<?php echo get_template_directory_uri(); ?>/src/img/logos.png" alt="Unión Europea | Junta de Andalucía">
                            </div>
                            <div class="col-md-3">
                                <img class="logos" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-andalucia-se-mueve-con-europa.png" alt="Andalucía se mueve con Europa">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>