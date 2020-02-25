<?php
function register_acf_block_types() {

    // register Block.
    acf_register_block_type(array(
        'name'              => 'title-des',
        'title'             => __('Título - descripción'),
        'description'       => __('Block Título - Descripción'),
        'render_template'   => 'blocks/title-des.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Título', 'Descripción' ),
    ));
    acf_register_block_type(array(
        'name'              => 'title-video-des',
        'title'             => __('Título - vídeo - descripción'),
        'description'       => __('Block Título - Vídeo - descripción'),
        'render_template'   => 'blocks/title-video-des.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Título', 'Vídio', 'Descripción' ),
    ));
    acf_register_block_type(array(
        'name'              => 'hero-img',
        'title'             => __('Hero imagen'),
        'description'       => __('Block Hero imagen'),
        'render_template'   => 'blocks/hero-img.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Hero', 'Imagen' ),
    ));

    acf_register_block_type(array(
        'name'              => 'experiencia',
        'title'             => __('Experiencia'),
        'description'       => __('Block Experiencia'),
        'render_template'   => 'blocks/experiencia.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Experiencia' ),
    ));

    acf_register_block_type(array(
        'name'              => 'escenarios',
        'title'             => __('Escenarios'),
        'description'       => __('Block Escenarios'),
        'render_template'   => 'blocks/escenarios.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Escenarios' ),
    ));
    
     // register Block.
    // acf_register_block_type(array(
    //     'name'              => 'actualidad',
    //     'title'             => __('Actualidad'),
    //     'description'       => __('A custom actualidad block.'),
    //     'render_template'   => 'blocks/actualidad.php',
    //     'category'          => 'formatting',
    //     'icon'              => 'admin-comments',
    //     'keywords'          => array( 'actualidad', 'dentista' ),
    //     'enqueue_assets'    => function(){
    //         wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/blocks/inc/owl.carousel.min.css' );
    //         wp_enqueue_script('cr-owl-carousel', get_template_directory_uri().'/blocks/inc/owl.carousel.min.js',  array(), '20130456', true );
    //         wp_enqueue_script( 'block-slider-script', get_template_directory_uri() . '/blocks/inc/script.js', array(), '20130457', true );
    //     },
    // ));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
?>