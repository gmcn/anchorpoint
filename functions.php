<?php
/**
 * Starting Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starting_Theme
 */

if ( ! function_exists( 'starting_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starting_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Starting Theme, use a find and replace
	 * to change 'starting-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starting-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Excerpts on pages.
	 *
	 */
	add_post_type_support( 'page', 'excerpt' );


	/*
	 * Move Comment Text Field to Bottom
	 *
	 */


	function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	}

	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'starting-theme' ),
		'quick-links' => esc_html__( 'Quick Links', 'starting-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starting_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'starting_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starting_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starting_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starting_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starting_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starting-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starting-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starting_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starting_theme_scripts() {
	wp_enqueue_style( 'starting-theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery-3.5.1', 'https://code.jquery.com/jquery-3.5.1.js', array(), '3.5.1', true );
	wp_enqueue_script( 'starting-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '2.1.7', true );
	wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.7', true );
	wp_enqueue_script( 'pagepiling', get_template_directory_uri() . '/js/jquery.pagepiling.js', array(), '2.1.7', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array(), '2.1.7', true );
	wp_enqueue_script( 'easy_number_animate', get_template_directory_uri() . '/js/jquery.easy_number_animate.js', array(), '2.1.7', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '2.1.7', true );
	wp_enqueue_script( 'packery-mode', get_template_directory_uri() . '/js/packery-mode.pkgd.min.js', array(), '2.1.7', true );
	// wp_enqueue_script( 'animsition', get_template_directory_uri() . '/js/animsition.min.js', array(), '2.1.7', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '2.1.7', true );
	wp_enqueue_script( 'cookieconsent', get_template_directory_uri() . '/js/cookieconsent.min.js', array(), '3.1.0', true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '6.2.0', true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), '0.1', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '0.1', true );
	// wp_enqueue_script( 'matchHeight-js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '0.7.2', true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), '1.16.1', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.5.2', true );
	wp_enqueue_script( 'starting-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starting_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//add data-toggle class and dropdown-toggle to parent anchor link
function addanchorlink_class($menu) {
    $menu = preg_replace('/ href="#"/','/ href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','addanchorlink_class');

//replace child ul class
function new_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','new_submenu_class');

//add image sizes;

add_image_size( 'project-slide', 1145, 650, true );
add_image_size( 'project-archive', 640, 580, true );
add_image_size( 'project-pagination', 960, 290, true );
add_image_size( 'hero-square', 869, 829, true );
add_image_size( 'horizontal_gallery', 640, 480, true );
add_image_size( 'news_featured', 640, 800, true );

// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/**
 * Code to add the custom login css file to the theme
 * - file is "/login/custom-login-styles.css"
 */
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

//Projects CPT

require_once get_template_directory() . '/functions/projects.php';
// require_once get_template_directory() . '/functions/news.php';

/**
 * Remove Contact Form 7's scripts and styles without having to add anything to wp-config.php (as described
 * in the CF7 docs) by using the wpcf7_enqueue_styles and wpcf7_enqueue_scripts actions that Takayuki was
 * nice enough to include in includes/controller.php
 * @link http://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
 */
add_action( 'wpcf7_enqueue_styles', function() { wp_deregister_style( 'contact-form-7' ); } );
add_action( 'wpcf7_enqueue_scripts', function() { wp_deregister_script( 'jquery-form' ); } );

/**
 * remove the span wrapper in Contact Form 7
 * @link https://stackoverflow.com/questions/39731560/how-can-i-remove-the-span-wrapper-in-contact-form-7
 */

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;

});

// acf options section

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// ajax

wp_register_script( 'core-js', get_template_directory_uri() . '/js/core.js');
wp_enqueue_script( 'core-js' );

wp_localize_script( 'core-js', 'ajax_posts', array(
	    'ajaxurl' => admin_url( 'admin-ajax.php' ),
	    'noposts' => __('No older posts found', 'twentyfifteen'),
	));



function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
		$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
				'suppress_filters' => true,
        'post_type' => 'case-study',
        'posts_per_page' => $ppp,
				'paged'    => $page,
				'orderby'   => 'menu_order',
				'order' => 'ASC',
				'post_status' => 'publish',
    );

    $loop = new WP_Query($args);

    $out = '';

		// $taxq = get_the_terms( get_the_ID(), 'work_types';

		// foreach ( $taxq ) as $tax ) {
		// echo  '__js_' . __( $tax->slug . " " );
		// }

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<li class="works__item work-card work-card--compact col-12 col-md-6 col-lg-4 __js_'. get_the_date( 'Y' ) .'">';
				$out .= '<a class="work-card__image" href="' . get_the_permalink() .'">';
				$out .= '<img src="' . get_the_post_thumbnail_url(get_the_ID(),'project-archive') . '" alt="'. get_the_title() .'" loading="lazy">';
				$out .= '</a>';
				$out .= '<div class="work-card__content">';
				$out .= '<div class="work-card__tags">';
				$out .= '</div>';
        // $out .= '<h2 class="work-card__heading"><a>' . get_the_title() . ', <span>' . get_field('project_location') . '</span></a></h2>';
				$out .= '<h2 class="work-card__heading"><a>' . get_the_title() . '</a></h2>';
				$out .= '</div>';
        $out .= '</li>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// bootstrap 4 support

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// SVG support for remove_featured_image
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}

//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }
