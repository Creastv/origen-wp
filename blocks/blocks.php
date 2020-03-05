<?php
function register_acf_block_types() {

    // register Block.
    acf_register_block_type(array(
        'name'              => 'title-des',
        'title'             => __('Título - descripción', 'crea'),
        'description'       => __('Block Título - Descripción', 'crea'),
        'render_template'   => 'blocks/title-des.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Título', 'Descripción' ),
    ));
    acf_register_block_type(array(
        'name'              => 'title-video-des',
        'title'             => __('Título - vídeo - descripción', 'crea'),
        'description'       => __('Block Título - Vídeo - descripción', 'crea'),
        'render_template'   => 'blocks/title-video-des.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Título', 'Vídio', 'Descripción' ),
    ));
    acf_register_block_type(array(
        'name'              => 'hero-img',
        'title'             => __('Hero imagen', 'crea'),
        'description'       => __('Block Hero imagen', 'crea'),
        'render_template'   => 'blocks/hero-img.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Hero', 'Imagen' ),
    ));

    acf_register_block_type(array(
        'name'              => 'experiencia',
        'title'             => __('Experiencia', 'crea'),
        'description'       => __('Block Experiencia', 'crea'),
        'render_template'   => 'blocks/experiencia.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Experiencia' ),
    ));

    acf_register_block_type(array(
        'name'              => 'escenarios',
        'title'             => __('Escenarios', 'crea'),
        'description'       => __('Block Escenarios', 'crea'),
        'render_template'   => 'blocks/escenarios.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Escenarios' ),
    ));
    acf_register_block_type(array(
        'name'              => 'info',
        'title'             => __('Info del proveedor', 'crea'),
        'description'       => __('Block info de proveedor', 'crea'),
        'render_template'   => 'blocks/info-proveedor.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Proveedor' ),
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