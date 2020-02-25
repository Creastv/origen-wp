<?php get_header(); ?>
    <?php if ($post->post_type == 'escenarios') :?>
        <?php get_template_part( 'templates/single-escenarios', get_post_format() ); ?>
    <?php elseif ($post->post_type == 'experiencias') :?>
        <?php get_template_part( 'templates/single-experiencias', get_post_format() ); ?>
        <?php elseif ($post->post_type == 'servicios') :?>
        <?php get_template_part( 'templates/single-servicios', get_post_format() ); ?>
    <?php else: ?>
        <?php get_template_part( 'templates/single', get_post_format() ); ?>
    <?php endif; ?>
<?php get_footer(); ?>