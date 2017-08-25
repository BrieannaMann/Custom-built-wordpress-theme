<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' ); 

//FONT AWESOME
function wmpudev_enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function get_post_args($cpt) {

	$labels = array(
		'name'                  => _x( $cpt.'s', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( $cpt, 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( $cpt.'s', 'text_domain' ),
		'name_admin_bar'        => __( $cpt, 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( "Parent $cpt :", 'text_domain' ),
		'all_items'             => __( 'All ' .$cpt.'s', 'text_domain' ),
		'add_new_item'          => __( "Add New $cpt", 'text_domain' ),
		'add_new'               => __( "New $cpt ", 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( "Edit $cpt", 'text_domain' ),
		'update_item'           => __( "Update $cpt", 'text_domain' ),
		'view_item'             => __( "View $cpt", 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search'.$cpt.'s', 'text_domain' ),
		'not_found'             => __( "No $cpt found", 'text_domain' ),
		'not_found_in_trash'    => __( "No $cpt found in Trash", 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( $cpt, 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

	);
	return $args;
}
 function my_taxonomies_product($cpt) {
  $labels = array(
    'name'              => _x( ''.$cpt.' Categories', 'taxonomy general name' ),
    'singular_name'     => _x( ''.$cpt.' Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search '.$cpt.' Categories' ),
    'all_items'         => __( 'All '.$cpt.' Categories' ),
    'parent_item'       => __( 'Parent '.$cpt.' Category' ),
    'parent_item_colon' => __( 'Parent '.$cpt.' Category:' ),
    'edit_item'         => __( 'Edit '.$cpt.' Category' ), 
    'update_item'       => __( 'Update '.$cpt.' Category' ),
    'add_new_item'      => __( 'Add New '.$cpt.' Category' ),
    'new_item_name'     => __( 'New '.$cpt.' Category' ),
    'menu_name'         => __( ''.$cpt.' Categories' ),
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  return $args;
 
} 
	function register(){
		$posttype = array (
			"adventure" => "adventure type",
			 "product" => "product type");
		//add if statment in foreach for if null.	
  		foreach($posttype as $key => $value) {
			$args = get_post_args($key);
			$taxarg= my_taxonomies_product($value);
			register_post_type($key, $args, 0);
			register_taxonomy( $value, $key, $taxarg);
		}

	}

add_action( 'init', 'register', 0 );



//Banner Image function 

function get_banner(){
	if (is_front_page()){
		$img="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/home-hero.jpg"; ?>
   		<div class="hero-img flex flex-center" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),  url('<?php echo $img ?>')no-repeat; 
   		height:80vh;
   		background-size:cover">
   		<img src="http://localhost:8888/wordpress/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-full.svg">
   		</div>

	<?php }elseif (is_page(about)){
		$img = get_field("banner_image");
		echo '<section class="banner-about flex flex-center" style="background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('.$img.'); background-size:cover; height: 80vh;">';
		echo '<h1 class=" white-font">';
		the_title();
		echo '</h1>';
		echo'</section>';

		
	}	elseif(is_singular('adventure')){
		$img = get_field("banner_image");
		echo '<section class="banner-about" style="background:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('.$img.'); background-size:cover; height: 80vh;"></section>';
	}
	
	} 
	
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );
?>