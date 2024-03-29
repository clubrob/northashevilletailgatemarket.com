<?php
/**
 * natm-v1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package natm-v1
 */

if (!function_exists('natm_v1_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function natm_v1_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on natm-v1, use a find and replace
         * to change 'natm-v1' to the name of your theme in all the template files.
         */
        load_theme_textdomain('natm-v1', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
		add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'natm-v1'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('natm_v1_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));

        /**
		 * Add Gutenberg Features
		 */
		add_theme_support('align-wide');

		add_theme_support('editor-color-palette', array(
			array(
				'name' => __( 'primary', 'natm-v1' ),
				'slug' => 'primary',
				'color' => '#98a780',
			),
			array(
				'name' => __( 'secondary', 'natm-v1' ),
				'slug' => 'secondary',
				'color' => '#a181a2',
			),
			array(
				'name' => __( 'tertiary', 'natm-v1' ),
				'slug' => 'tertiary',
				'color' => '#ed9820',
			),
			array(
				'name' => __( 'light', 'natm-v1' ),
				'slug' => 'light',
				'color' => '#e8e4c9',
			),
			array(
				'name' => __( 'dark', 'natm-v1' ),
				'slug' => 'dark',
				'color' => '#596067',
			),
			array(
				'name' => __( 'light gray', 'natm-v1' ),
				'slug' => 'light-gray',
				'color' => '#c6c5c5',
			),
			array(
				'name' => __( 'gray', 'natm-v1' ),
				'slug' => 'gray',
				'color' => '#7d8281',
			),
			array(
				'name' => __( 'white', 'natm-v1' ),
				'slug' => 'white',
				'color' => '#fff',
			),
			array(
				'name' => __( 'black', 'natm-v1' ),
				'slug' => 'black',
				'color' => '#000',
			)
		));

		add_theme_support( 'disable-custom-colors' );

		/* 1.333 type scale / perfect fourth */
		add_theme_support('editor-font-sizes', array(
			array(
				'name' => __( 'Small', 'natm-v1' ),
				'size' => 12,
				'slug' => 'small'
			),
			array(
				'name' => __( 'Regular', 'natm-v1' ),
				'size' => 16,
				'slug' => 'regular'
			),
			array(
				'name' => __( 'Medium', 'natm-v1' ),
				'size' => 20,
				'slug' => 'medium'
			),
			array(
				'name' => __( 'Large', 'natm-v1' ),
				'size' => 38,
				'slug' => 'large'
			),
			array(
				'name' => __( 'Huge', 'natm-v1' ),
				'size' => 51,
				'slug' => 'huge'
			),
			array(
				'name' => __( 'Extra Huge', 'natm-v1' ),
				'size' => 67,
				'slug' => 'extra-huge'
			)
		));

		add_theme_support('responsive-embeds');

		add_theme_support('disable-custom-font-sizes');

		add_theme_support('editor-styles');
		add_editor_style('editor-style.css');

    }
endif;
add_action('after_setup_theme', 'natm_v1_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function natm_v1_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('natm_v1_content_width', 640);
}
add_action('after_setup_theme', 'natm_v1_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function natm_v1_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Feature Banner', 'natm-v1'),
        'id' => 'topbanner-1',
        'description' => esc_html__('Add widgets here.', 'natm-v1'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'natm_v1_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function natm_v1_scripts()
{
    wp_enqueue_style('natm-v1-style', get_stylesheet_uri());

	wp_enqueue_style('natm-v1-theme', get_template_directory_uri() . '/theme.css');

	wp_enqueue_script('natm-v1-lodash', get_template_directory_uri() . '/js/lodash.custom.min.js', array(), '20151215', true);

	wp_enqueue_script('natm-v1-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);

    wp_enqueue_script('natm-v1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('natm-v1-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'natm_v1_scripts');

function natm_gutenberg_scripts() {
	wp_enqueue_script(
		'natm-editor',
		get_stylesheet_directory_uri() . '/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_stylesheet_directory() . '/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'natm_gutenberg_scripts' );

// Expose ACF fields to Gutenberg
function create_ACF_meta_in_REST() {
    $postypes_to_exclude = ['acf-field-group','acf-field'];
    $extra_postypes_to_include = ['page'];
    $post_types = array_diff(get_post_types(['_builtin' => false], 'names'),$postypes_to_exclude);

    array_push($post_types, $extra_postypes_to_include);

    foreach ($post_types as $post_type) {
        register_rest_field( $post_type, 'ACF', [
				'get_callback'    => 'expose_ACF_fields',
				'schema'          => null,
			]
		);
    }
}

function expose_ACF_fields( $object ) {
    $ID = $object['id'];
    return get_fields($ID);
}

add_action( 'rest_api_init', 'create_ACF_meta_in_REST' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_image_size('full_width_hero', 1600, 1600);

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
	$theme_dir = get_template_directory_uri();
    if( $args->theme_location == 'menu-1' )
        return $items.'<div class="nav-social">
		<h5>
			Connect with us
		</h5>
		<ul>
			<li><a href="https://www.instagram.com/northashevilletailgatemarket/"><img src="'. $theme_dir . '/assets/images/icons/instagram-icon.svg" alt="Instagram"></a></li>
			<li><a href="https://www.facebook.com/North-Asheville-Tailgate-Market-365664308791/"><img src="'. $theme_dir . '/assets/images/icons/facebook-icon.svg" alt="Facebook"></a></li>
			<li><a href="<?php echo get_site_url() ?>/contact"><img src="'. $theme_dir . '/assets/images/icons/email-icon.svg" alt="Email"></a></li>
		</ul>
	</div>';

    return $items;
}

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'full_width_hero' => __( 'Full Width Hero' ),
	) );
}

