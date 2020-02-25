
<?php

/**
 * Block Name:  Título - Descripción
 *
 */
$customeId = get_field('id_td');
$id = 'id="' . $customeId . '"';

$px = 'px';
$pTop = get_field('padding-top_td') . 'px';
$pBottom = get_field('padding-bottom_td') . 'px';

?>

    <section <?php echo $id; ?> class="sec-wrap" style="padding-top:<?php echo $pTop; ?>; padding-bottom:<?php echo $pBottom; ?>;">
        <div class="container-fluid <?php the_field('container_td') ?>">
            <div class="row">
                <div class="col-md-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="header-section">
					    <?php if( get_field('subtitulo_td') ): ?>
							<span><?php the_field('subtitulo_td') ?></span>
						<?php else: ?>
						    <span>Origen & Destino</span>
						<?php endif; ?>
						<?php if( get_field('titulo_td') ): ?>
							<h2><?php the_field('titulo_td') ?></h2>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                    <div class="box-border">
				    	<?php if( get_field('descripcion_td') ): ?>
							<?php the_field('descripcion_td') ?>
						<?php endif; ?>
						<?php if( get_field('url_td') && get_field('texto_td') ): ?>
							<a href="<?php the_field('url_td') ?>" class="btn"><?php the_field('texto_td') ?></a>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

