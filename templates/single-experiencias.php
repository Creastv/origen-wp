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
                $tax = 'experiencia';
                $terms = get_terms( $tax, $args = array(
                'hide_empty' => false, )); 
               
                
            ?>
            <?php if( ! empty( $terms ) ) : ?>
                <ul class="nav-fichia-eper">
                <?php foreach( $terms as $term ) : ?>
                     
                    <li ><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
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
                                    <p>"La clave Pigafetta" es un proyecto concebido por Ingevents para todos los públicos, con distintos formatos y con un propósito común: integrar a los participantes en la historia mediante el entretenimiento.</p>
                                    <p>Para ello, desde febrero de 2019 se desarrollan distintas acciones como son:</p>
                                    <ul>
                                        <li>La puesta en marcha de una serie de escenarios ‘escape room’ portátiles, que recrearán escenarios históricos y que podrán recorrer distintos emplazamientos en ciudades vinculadas con la crónica de la Primera Circunnavegación del Globo Terráqueo.</li>
                                        <li>La edición de un juego de mesa con el que los jugadores podrán emular a los protagonistas de la gesta de Magallanes y Elcano, al mismo tiempo que se divierten conociendo detalles de la historia de la expedición.</li>
                                        <li>Una serie de ficción en formato podcast con dramatizaciones de la historia, en castellano, con música original y la participación de actores interpretando a los personajes históricos.</li>
                                        <li>Mapping teatralizado: Mediante el uso de tecnología de proyección, efectos sonoros surround y la participación de una compañía teatral os invitamos a disfrutar de la representación de una obra escrita exclusivamente para conmemorar el V Centenario de la Circunnavegación a la Tierra. Dicha obra se subdivide en tres capítulos, comenzando en Octubre el primero de ellos, “El Comienzo Del Viaje”. Estate atento para embarcarte con nosotros.</li>
                                    </ul>
                                    <p>El proyecto ha sido incluido por el Ministerio de Cultura en el Programa Oficial del V Centenario de la Primera Vuelta al Mundo de Magallanes y Elcano.</p>
                                    <h2>Precio</h2>
                                    <p>Consultar.</p>  
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>