<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="theme-color" content="#cf9338">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php if (is_page_template('templates/sg.php')):?>
        <header>
    <?php else: ?>
        <header class="narbar-page">
    <?php endif; ?>
        <nav class="navbar my-paroller" data-aos-delay="400" data-aos="fade-up" id="navigation" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php $logo_mobile = get_field('logo_mobile', 'option');
                        if( !empty( $logo_mobile ) ): ?>
                            <a class="navbar-brand visible-xs visible-sm" href="<?php echo get_home_url(); ?>" title="<?php wp_title( '|', true, 'right' ); ?> "> <img src="<?php echo esc_url($logo_mobile['url']); ?>" alt="<?php echo esc_attr($logo_mobile['alt']); ?>" title="<?php echo esc_attr($logo['title']); ?>" /> </a>
                    <?php else : ?>
                        <a class="navbar-brand visible-xs visible-sm " href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-origen-destino.jpg" alt="<?php wp_title( '|', true, 'right' ); ?>"></a>
                    <?php endif; ?>
                    
                </div>
                 
                <div id="navbar" class="col navbar-collapse collapse">
                    <?php
                         wp_nav_menu( array(
                        'theme_location' => 'primary-left', // Defined when registering the menu
                        'menu_id'        => 'primary-left',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'navbar-nav nav nav-ge',
                        // 'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                        ) );
                    ?>

                        <?php $logo = get_field('logo', 'option');
                            if( !empty( $logo ) ): ?>
                            <a class="logo2 hidden-xs hidden-sm " href="<?php echo get_home_url(); ?>" title="<?php wp_title( '|', true, 'right' ); ?> "> <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" title="<?php echo esc_attr($logo['title']); ?>" /> </a>
                        <?php else : ?>
                            <a class="logo2 hidden-xs hidden-sm " href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-origen-destino.jpg" alt="<?php wp_title( '|', true, 'right' ); ?>"></a>
                        <?php endif; ?>
                     <?php
                         wp_nav_menu( array(
                        'theme_location' => 'primary-right', // Defined when registering the menu
                        'menu_id'        => 'primary-right',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'navbar-nav nav nav-ge',
                        // 'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                        ) );
                    ?>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </nav>
    </header>
	
    <?php if (is_page_template('templates/sg.php')):?>
        <main  class="home">
    <?php else: ?>
        <main  id="Page" class="sec-wrap my-paroller" data-aos-delay="300" data-aos="fade-up" class="page">
            <article class="container-fluid wraper  <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                <div class="row">
    <?php endif; ?>

	
		

