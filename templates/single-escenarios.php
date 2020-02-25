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
            <div class="box-border text-center">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); $url = $thumb['0']; ?>
                    <div class="img-head" style="background-image:url(<?=$url?>);">
                <?php else: ?>
                    <div class="img-head" style="background-image:url(<?php echo get_template_directory_uri(); ?>/src/img/spaceholder.jpg);">
                <?php endif; ?>
                    <div class="map hidden-xs">
                        <?php if(get_field('imagen_destacada_de_mapa')) : ?>
                            <?php if(get_field('imagen_de_mapa')) : ?>
                                <a href="<?php the_field('imagen_de_mapa'); ?>" class="html5lightbox">
                            <?php endif; ?>
                                <img class="img-responsive" src="<?php the_field('imagen_destacada_de_mapa'); ?>" alt="<?php the_title(); ?>">
                            <?php if(get_field('imagen_de_mapa')) : ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(get_field('imagen_de_mapa')) : ?>
                            <a href="<?php the_field('imagen_de_mapa'); ?>" class="html5lightbox btn btn-main">ver mapa</a>
                        <?php endif; ?>
                        <?php if(get_field('localizacion_')) : ?>
                            <h2><?php the_field('localizacion_'); ?></h2>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class="map visible-xs">
                   <?php if(get_field('imagen_destacada_de_mapa')) : ?>
                        <?php if(get_field('imagen_de_mapa')) : ?>
                            <a href="<?php the_field('imagen_de_mapa'); ?>" class="html5lightbox">
                        <?php endif; ?>
                            <img class="img-responsive" src="<?php the_field('imagen_destacada_de_mapa'); ?>" alt="<?php the_title(); ?>">
                        <?php if(get_field('imagen_de_mapa')) : ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(get_field('imagen_de_mapa')) : ?>
                        <a href="<?php the_field('imagen_de_mapa'); ?>" class="html5lightbox btn btn-main">ver mapa</a>
                    <?php endif; ?>
                    <?php if(get_field('localizacion_')) : ?>
                        <h2><?php the_field('localizacion_'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="content-border">
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content();?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="col-md-12">
            <?php cr_content_nav( 'nav-below' ); ?>
        </div>

        <section class="escenarios sec-wrap" style="padding-top:60px; padding-bottom:60px;">
            <div class="container-fluid <?php the_field('container_es_single', 'option') ?>">
                <div class="row">
                    <div class="col-md-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                        <div class="header-section">
                            <?php if( get_field('subtitulo_es_single_single', 'option') ): ?>
                                <span><?php the_field('subtitulo_es_single', 'option') ?></span>
                            <?php else: ?>
                                <span>Origen & Destino</span>
                            <?php endif; ?>
                            <?php if( get_field('titulo_es_single', 'option') ): ?>
                                <h2><?php the_field('titulo_es_single', 'option') ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 my-paroller" data-aos-delay="200" data-aos="fade-up">
                        <div class="box-border">
                            <?php if( get_field('descripcion_es_single', 'option') ): ?>
                                <?php the_field('descripcion_es_single', 'option') ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="content-border">
                            <?php if( have_rows('grid_es_single', 'option') ): 
                                while( have_rows('grid_es_single', 'option') ): the_row(); 
                                $imageEs = get_sub_field('imagen_es', 'option');
                                $iconEs = get_sub_field('icon', 'option');
                                $titleEs = get_sub_field('titulo', 'option');
                                $buttonEs = get_sub_field('texto_de_button', 'option');
                                $linkEs = get_sub_field('url', 'option');
                            ?>
                                <div class="col-md-6 col-sm-6 my-paroller" data-aos-delay="200" data-aos="fade-up">
                                    <div class="box" style="background:url(<?php echo $imageEs['url']; ?>);">
                                        <div class="grad grad-3">
                                            <?php if (!empty($linkEs && $iconEs['url'] )):?>
                                                <div class="icon">
                                                    <a href="<?php echo $linkEs; ?>"><img src="<?php echo $iconEs['url']; ?>" alt="<?php echo $iconEs['alt'] ?>"></a>
                                                </div>
                                            <?php endif;?>
                                            <div class="content">
                                                <a href="<?php echo $linkEs; ?>"><h2><?php echo $titleEs; ?></h2></a>
                                                <?php if (!empty($linkEs && $buttonEs )):?>
                                                <a href="<?php echo $linkEs; ?>" class="btn"><?php echo $buttonEs; ?></a>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>