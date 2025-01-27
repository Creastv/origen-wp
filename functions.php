<?php
if ( ! isset( $content_width ) )
$content_width = 750; /* pixels */

if ( ! function_exists( 'crea_setup' ) ) :
/**
* Set up theme defaults and register support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
*/
function crea_setup() {
global $cap, $content_width;

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

/**
 * Add default posts and comments RSS feed links to head
*/
add_theme_support( 'automatic-feed-links' );

/**
 * Enable support for Post Thumbnails on posts and pages
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
add_theme_support( 'post-thumbnails' );

/**
 * Enable support for Post Formats
*/
add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	/**
 * theme support setting
 */
	// add_theme_support( 'custom-background' );
	add_theme_support( "title-tag" );
	// add_theme_support( 'automatic-feed-links' );
	// add_theme_support( "custom-header", array() );
	add_theme_support( 'post-thumbnails' );
	// Add default posts and comments RSS feed links to head

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'video',
		'gallery'
	) );

/**
 * This theme uses wp_nav_menu() in one location.
*/
register_nav_menus( array(
	'primary-left'  => __( 'Header left', 'crea' ),
	'primary-right'  => __( 'Header right', 'crea' ),
	'Secundary'  => __( 'Footer menu', 'crea' ),
) );


}
endif;


add_action( 'after_setup_theme', 'crea_setup' );
function cr_widgets_init() {
        register_sidebar( array(
			'name'          => __( 'Sidebar', 'crea' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );
}
add_action( 'widgets_init', 'cr_widgets_init' );




function cr_scripts() {
	// load cr styles
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	
	// bootstrap
	wp_enqueue_style( 'cr-bootstrap', get_template_directory_uri() . '/src/css/bootstrap.min.css' );
	// custome.style
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.css' ); 
	// Google fonts
	// wp_enqueue_style( 'cr_fonts_poppins', 'https://fonts.googleapis.com/css?family=Asap:400,500,600,700&display=swap&subset=latin-ext' ); 
	
	// wp_enqueue_script( 'cr-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '2', true );

	// Bootstrap
	wp_enqueue_script('cr-bootstrap', get_template_directory_uri().'/src/js/bootstrap.min.js', array( 'jquery' ),'3', true );
    // Aos
	wp_enqueue_script('cr-aos', get_template_directory_uri().'/src/js/aos.js', array( 'jquery' ),'3', true );
	// html5lightbox
	wp_enqueue_script('cr-html5lightbox', get_template_directory_uri().'/src/html5lightbox/html5lightbox.js', array( 'jquery' ),'3', true );

	if(is_archive() || is_search()){
		// mansonary
	   wp_enqueue_script('cr-mansonary', get_template_directory_uri().'/src/js/masonry.pkgd.min.js', array( 'jquery' ),'3', true );
	}

	// script
	wp_enqueue_script('cr-script', get_template_directory_uri().'/src/js/script.js', array( 'jquery' ),'3', true );
	


	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'cr-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/src/wp-nav.php';
// ACF-Blocks
require get_template_directory() . '/blocks/blocks.php';


// Custome Post

function cr_servicios_post_types() {

	$labels = array(
		'name'               => 'Servicios',
		'singular_name'      => 'Servicios',
		'menu_name'          => 'Servicios',
		'name_admin_bar'     => 'Servicios',
		'add_new'            => 'Añadir nueva',
		'add_new_item'       => 'Añadir servicio',
		'new_item'           => 'Nuevo servicio',
		'edit_item'          => 'Editar servicio',
		'view_item'          => 'Vista',
		'all_items'          => 'Todo',
		'search_items'       => 'Búsqueda',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'not found.',
		'not_found_in_trash' => 'not found'
	);
	$args = array( 
		'public' => true,
		'capability_type'     => 'post',
        'has_archive' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-universal-access',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'rewrite'           => array( 'slug' => 'servicios' ),
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt',)
	);
    	register_post_type( 'servicios', $args );

}
add_action( 'init', 'cr_servicios_post_types' );



// Custome post Experiencia

function cr_experiencias_post_types() {

	$labels = array(
		'name'               => 'Experiencias',
		'singular_name'      => 'Experiencias',
		'menu_name'          => 'Experiencias',
		'name_admin_bar'     => 'Experiencias',
		'add_new'            => 'Añadir nueva',
		'add_new_item'       => 'Añadir experiencia',
		'new_item'           => 'Nuevo experiencia',
		'edit_item'          => 'Editar experiencia',
		'view_item'          => 'Vista',
		'all_items'          => 'Todo',
		'search_items'       => 'Búsqueda',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'not found.',
		'not_found_in_trash' => 'not found'
	);
	$args = array( 
		'public' => true,
		'capability_type'     => 'post',
        'has_archive' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-universal-access',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'rewrite'           => array( 'slug' => 'experiencias' ),
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
    	register_post_type( 'experiencias', $args );

}
add_action( 'init', 'cr_experiencias_post_types' );

// cat Experiencias
function create_experiencias_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categorias', 'crea' ),
        'singular_name'     => _x( 'Categorias',  'crea' ),
        'search_items'      => __( 'Buscar categoría', 'crea' ),
        'all_items'         => __( 'Todas categorias', 'crea' ),
        'parent_item'       => __( 'Categoría principal', 'crea' ),
        'parent_item_colon' => __( 'Categoría principal:', 'crea' ),
        'edit_item'         => __( 'Editar categoría', 'crea' ),
        'update_item'       => __( 'Actualizar categoría', 'crea' ),
        'add_new_item'      => __( 'Añadir nuevo Category', 'crea' ),
        'new_item_name'     => __( 'Nuevo nombre de categoría', 'crea' ),
        'menu_name'         => __( 'Experiencias categorias', 'crea' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest' => true,
        'rewrite'           => array( 'slug' => 'experiencia', 'with_front' => false ),
    );

    register_taxonomy( 'experiencia', array( 'experiencias' ), $args );
}
add_action( 'init', 'create_experiencias_taxonomies', 0 );


// Custome post Escenarios

function cr_escenarios_post_types() {

	$labels = array(
		'name'               => 'Escenarios',
		'singular_name'      => 'Escenarios',
		'menu_name'          => 'Escenarios',
		'name_admin_bar'     => 'Escenarios',
		'add_new'            => 'Añadir nueva',
		'add_new_item'       => 'Añadir escenario',
		'new_item'           => 'Nuevo escenario',
		'edit_item'          => 'Editar escenario',
		'view_item'          => 'Vista',
		'all_items'          => 'Todo',
		'search_items'       => 'Búsqueda',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'not found.',
		'not_found_in_trash' => 'not found'
	);
	$args = array( 
		'public' => true,
		'capability_type'     => 'post',
        'has_archive' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-universal-access',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'rewrite'           => array( 'slug' => 'escenarios' ),
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
    	register_post_type( 'escenarios', $args );

}
add_action( 'init', 'cr_escenarios_post_types' );

// cat Escenarios
function create_escenarios_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categorias', 'crea' ),
        'singular_name'     => _x( 'Categorias', 'crea' ),
        'search_items'      => __( 'Buscar categoría', 'crea' ),
        'all_items'         => __( 'Todas categorias', 'crea' ),
        'parent_item'       => __( 'Categoría principal', 'crea' ),
        'parent_item_colon' => __( 'Categoría principal:', 'crea' ),
        'edit_item'         => __( 'Editar categoría', 'crea' ),
        'update_item'       => __( 'Actualizar categoría', 'crea' ),
        'add_new_item'      => __( 'Añadir nuevo Category', 'crea' ),
        'new_item_name'     => __( 'Nuevo nombre de categoría', 'crea' ),
        'menu_name'         => __( 'Escenarios categorias', 'crea' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
		'query_var'         => true,
		 'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'escenario', 'with_front' => true ),
    );

    register_taxonomy( 'escenario', array( 'escenarios' ), $args );
}
add_action( 'init', 'create_escenarios_taxonomies', 0 );


if ( ! function_exists( 'cr_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function cr_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous )
			return;
	}
	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';

	?>
	<div  role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="pagination <?php echo $nav_class; ?>">
			<?php if ( is_single() ) : // navigation links for single posts ?>
				<?php previous_post_link( '<div class="nav-previous prev">%link</div>', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> %title' ); ?>
				<?php next_post_link( '<div class="nav-next next">%link</div>', '%title <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ); ?>
			<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
				<?php if ( get_next_posts_link() ) : ?>
				<div class="nav-previous prev"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'crea' ) ); ?></div>
				<?php endif; ?>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="nav-next next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'crea' ) ); ?></div>
				<?php endif; ?>
			<?php endif; ?>
	</div ><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // cr_content_nav

// Numbered Pagination
if ( !function_exists( 'cr_pagination' ) ) {
	
	function cr_pagination() {
		
		$prev_arrow = is_rtl() ? 'Anteriores →' : '← Anteriores';
		$next_arrow = is_rtl() ? '← Siguiente' : 'Siguiente →';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 1,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}


// Remove form main nav ul
// function remove_ul ( $menu ){
//     return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
// }
// add_filter( 'wp_nav_menu', 'remove_ul' );



// ACF Option Theme

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ajustes de tema',
		'menu_title'	=> 'Ajustes de tema',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración de encabezado de tema',
		'menu_title'	=> 'Cabecer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración del pie de página del tema',
		'menu_title'	=> 'Pie',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración de la página de servicios (archive)',
		'menu_title'	=> 'Servicios',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuración de la página de Escenarios (archive)',
		'menu_title'	=> 'Escenarios',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function custom_admin_css() {
echo '<style type="text/css">
.wp-block { max-width: 950px; }
.acf-block-component{
    padding: 13px;
    background: #ececec;
    border-radius: 20px;
	}
.acf-block-component #slider{
	text-align:center;
	padding:40px;
}
.acf-block-component #slider .img-slide{
	padding:20px;
}
.acf-block-component ul{
	list-style: none!important;
}
.acf-block-component .experiencias {}
.acf-block-component .experiencias .tab{
	width: 18%;
	display:inline-block;
	padding: 10px;
	text-align: center;
	vertical-align: top;
}
.acf-block-component .experiencias .tab h3{
	font-size:16px;
}
.acf-block-component .experiencias .tab{
	font-size:16px;
}
.acf-block-component .experiencias .col-md-4{
	text-align:center;
}
.acf-block-component .experiencias .col-md-4 i{
	display: block;
}
.acf-block-component .escenarios .b{
	display: inline-block;
    width: 48%;
}
.acf-block-component .escenarios .box{
	    background-size: cover!important;
}
.acf-block-component .escenarios .box .grad{
	        background: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),to(rgba(0,0,0,.65)));
    background: linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.65) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000",endColorstr="#a6000000",GradientType=0);
	padding:40px;
}
.acf-block-component .escenarios .box .grad .icon{
	padding:10px;
}

.acf-block-component .escenarios .box .grad .content{
	padding: 10px;
	color: #fff;
	text-decoration:none!important;
}

.acf-block-component .twd img{
   display: block;
    margin: 0 auto;
}
.acf-block-component .twd .des-video{
	    display: block;
    text-align: center;
}
</style>';
}
add_action('admin_head', 'custom_admin_css');


function filter_plugin_updates( $value ) {

  // Add references to plugins you want to disable update notices for in the $plugins array
  $plugins = array(
    'advanced-custom-fields-pro/acf.php'
  );

  foreach( $plugins as $plugin ) {
    if ( isset( $value->response[$plugin] ) ) {
      unset( $value->response[$plugin] );
    }
  }
  return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );


add_action( 'pre_get_posts', 'my_change_sort_order'); 
    function my_change_sort_order($query){
        if(is_archive()):
         //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
           //Set the order ASC or DESC
           $query->set( 'order', 'ASC' );
           //Set the orderby
           $query->set( 'orderby', 'title' );
        endif;    
    };


	function kct_page_css_class( $css_class, $page, $depth, $args, $current_page ) {
  if ( !isset($args['post_type']) || !is_singular($args['post_type']) )
    return $css_class;

  global $post;
  $current_page  = $post->ID;
  $_current_page = $post;
  _get_post_ancestors($_current_page);

  if ( isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors) )
    $css_class[] = 'current_page_ancestor';
  if ( $page->ID == $current_page )
    $css_class[] = 'current_page_item';
  elseif ( $_current_page && $page->ID == $_current_page->post_parent )
    $css_class[] = 'current_page_parent';

  return $css_class;
}
add_filter( 'page_css_class', 'kct_page_css_class', 10, 5 );