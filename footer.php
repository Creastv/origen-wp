    <?php if (is_page_template('templates/sg.php')):?>
        </main>
    <?php else: ?>
               </div>
            </article>
        </main>
    <?php endif; ?>

    <!-- ==========================================================================
   Footer
   ==========================================================================  -->
    <footer>
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                            
                    </div>
                </div>
            </div>
            <?php if( have_rows('logos', 'option') ): 
                while( have_rows('logos', 'option') ): the_row(); 
                $image = get_sub_field('logo');
                $link = get_sub_field('enlace');
                ?>
                    <?php if( $link ): ?>
                        <a target="_blank" href="<?php echo $link; ?>">
                    <?php endif; ?>

                        <img  class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                    <?php if( $link ): ?>
                        </a>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php else: ?>
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-junta-andalucia.png" alt="Junta Andalucía">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-origen-destino.png" alt="Andalucía Origen & Destino">
                 <br class="visible-xs">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-union-europea.png" alt="Unión Europea">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo-andalucia-se-mueve-con-europa-color.png" alt="Andalucía se mueve con europa">
            <?php endif; ?>
        </section>
        <section id="footer-inf">
            <?php if (get_field('info', 'option')) : ?>
            <p><?php echo the_field('info', 'option'); ?></p>
            <?php else : ?>
                <p>Junta de Andalucía. Consejería de Turismo, Regeneración, Justicia y Administración Local. Empresa Pública para la Gestión del Turismo y del Deporte de Andalucía, S.A. 2020.</p>
            <?php endif ; ?>
            
        </section>
    </footer>
    <a href="#" class="scrollToTop" style="display:none;"><i class="fa fa-arrow-up"></i></a>
  <?php wp_footer(); ?>
  
 </body>
</html>
