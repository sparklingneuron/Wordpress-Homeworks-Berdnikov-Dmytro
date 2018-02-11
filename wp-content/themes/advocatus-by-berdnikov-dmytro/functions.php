<?php
/**
 * Advocatus by Berdnikov Dmytro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

if (!function_exists('advocatus_by_berdnikov_dmytro_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function advocatus_by_berdnikov_dmytro_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Advocatus by Berdnikov Dmytro, use a find and replace
         * to change 'advocatus-by-berdnikov-dmytro' to the name of your theme in all the template files.
         */
        load_theme_textdomain('advocatus-by-berdnikov-dmytro', get_template_directory() . '/languages');

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
//            'menu-1' => esc_html__( 'Primary', 'advocatus-by-berdnikov-dmytro' ),
            'header-main-menu-location' => 'Header Main Menu Location',
            'footer-social-menu-location' => 'Footer Social Menu Location'
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
        add_theme_support('custom-background', apply_filters('advocatus_by_berdnikov_dmytro_custom_background_args', array(
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
    }
endif;
add_action('after_setup_theme', 'advocatus_by_berdnikov_dmytro_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function advocatus_by_berdnikov_dmytro_content_width()
{
    $GLOBALS['content_width'] = apply_filters('advocatus_by_berdnikov_dmytro_content_width', 640);
}

add_action('after_setup_theme', 'advocatus_by_berdnikov_dmytro_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function advocatus_by_berdnikov_dmytro_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'advocatus-by-berdnikov-dmytro'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'advocatus-by-berdnikov-dmytro'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'advocatus_by_berdnikov_dmytro_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function advocatus_by_berdnikov_dmytro_scripts()
{
//    wp_enqueue_style('advocatus-by-berdnikov-dmytro-style', get_stylesheet_uri());

    wp_enqueue_style('google-open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');

    wp_enqueue_style('google-playfair-display-font', 'https://fonts.googleapis.com/css?family=Playfair+Display');

    wp_enqueue_style('font-awesome', get_theme_file_uri('assets/css/font-awesome.min.css'));

    wp_enqueue_style('my-styles', get_theme_file_uri('assets/css/styles.css'));

    wp_enqueue_script('advocatus-by-berdnikov-dmytro-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('advocatus-by-berdnikov-dmytro-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'advocatus_by_berdnikov_dmytro_scripts');

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

// Remove automatic <p> tag around the content
remove_filter( 'the_content', 'wpautop' );