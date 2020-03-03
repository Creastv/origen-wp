
<?php

/**
 * Block Name:  Escenarios
 *
 */

$customeId = get_field('id_es');
$id = 'id="' . $customeId . '"';

$px = 'px';
$pTop = get_field('padding_top_es') . 'px';
$pBottom = get_field('padding_bottom_es') . 'px';
?>
    <section <?php echo $id; ?> class="escenarios sec-wrap" style="padding-top:<?php echo $pTop; ?>; padding-bottom:<?php echo $pBottom; ?>;">
        <div class="container-fluid <?php the_field('container_es') ?>">
            <div class="row">
                <div class="col-md-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="header-section">
					    <?php if( get_field('subtitulo_es') ): ?>
							<span><?php the_field('subtitulo_es') ?></span>
						<?php else: ?>
						    <span>Origen & Destino</span>
						<?php endif; ?>
						<?php if( get_field('titulo_es') ): ?>
							<h2><?php the_field('titulo_es') ?></h2>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="box-border">
                        <?php if( get_field('descripcion_es') ): ?>
							<?php the_field('descripcion_es') ?>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="content-border">
                        <?php if( have_rows('grid_es') ): 
                            while( have_rows('grid_es') ): the_row(); 
                            $imageEs = get_sub_field('imagen_es');
                            $iconEs = get_sub_field('icon');
                            $titleEs = get_sub_field('titulo');
                            $buttonEs = get_sub_field('texto_de_button');
                            $linkEs = get_sub_field('url');
                        ?>

                            <div class="col-md-6 col-sm-6 my-paroller b" data-aos-delay="200" data-aos="fade-up">
                                <div class="box" style="background:url(<?php echo $imageEs['url']; ?>);">
                                    <a href="<?php echo $linkEs; ?>">
                                        <div class="grad grad-3">
                                            <?php if (!empty($linkEs && $iconEs['url'] )):?>
                                                <div class="icon">
                                                <img src="<?php echo $iconEs['url']; ?>" alt="<?php echo $iconEs['alt'] ?>">
                                                </div>
                                            <?php endif;?>
                                            <div class="content">
                                               <h2><?php echo $titleEs; ?></h2>
                                                <?php if (!empty($linkEs && $buttonEs )):?>
                                                <span class="btn"><?php echo $buttonEs; ?></span>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>