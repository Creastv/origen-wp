<?php

/**
 * Block Name:  info proveedor
 *
 */
?>
<ul>
    <?php if (get_field('direccion') ) : ?>
        <li><b>Dirección:</b><br>
        <?php the_field('direccion'); ?></li>
    <?php endif ; ?>

    <?php if( get_field('telefono') ): ?>
        <li><b>Teléfono:</b><br>
            <?php while( the_repeater_field('telefono') ): ?>
            <a href="tel:<?php the_sub_field('numero'); ?>"><?php the_sub_field('numero'); ?></a> <br>
            <?php endwhile; ?>
        </li>
    <?php endif; ?>

    <?php if( get_field('correo_electronico') ): ?>
        <li><b>Correo electrónico:</b><br>
            <?php while( the_repeater_field('correo_electronico') ): ?>
            <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a> <br>
            <?php endwhile; ?>
        </li>
    <?php endif; ?>

    <?php if( get_field('sitio_web') ): ?>
        <li><b>Sitio web:</b><br>
            <?php while( the_repeater_field('sitio_web') ): ?>
            <a href="<?php the_sub_field('url'); ?>"  target="_blank"><?php the_sub_field('url');?></a> <br>
            <?php endwhile; ?>
        </li>
    <?php endif; ?>


    <?php if( get_field('redes_socialess') ):  ?>
        <li><b>Redes sociales:</b> <br>
        <?php while( the_repeater_field('redes_socialess') ): ?>
            <?php if(get_sub_field('url')): ?>
            <a target="_blank" href="<?php the_sub_field('url'); ?>">
            <?php endif; ?>
                <i class="<?php the_sub_field('icon'); ?> "></i>
            <?php if(get_sub_field('url')): ?>
            </a>
            <?php endif; ?>
        <?php endwhile; ?>
        </li>
    <?php endif; ?>
</ul>
