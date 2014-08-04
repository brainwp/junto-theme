<?php
/**
 * Junto Theme functions and definitions
 *
 * @package Junto Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

if (!function_exists('junto_theme_setup')) :
    function register_onepage_posts()
    {
        if (isset($_GET['activated']) && is_admin()){
            //set permalink option
            update_option( 'permalink_structure', '/%postname%/' );

            $defaults = array(
                'post_status' => 'publish',
                'post_name' => 'cases', // The name (slug) for your post
                'post_title' => 'Cases', // The title of your post.
                'post_type' => 'onepage',
                'post_parent' => 0,
            );
// Insert the post into the database
            wp_insert_post($defaults);
            $defaults = array(
                'post_status' => 'publish',
                'post_name' => 'clientes', // The name (slug) for your post
                'post_title' => 'Clientes', // The title of your post.
                'post_type' => 'onepage',
                'post_parent' => 0,
            );
// Insert the post into the database
            wp_insert_post($defaults);
            $defaults = array(
                'post_status' => 'publish',
                'post_name' => 'portfolio', // The name (slug) for your post
                'post_title' => 'Portfólio', // The title of your post.
                'post_type' => 'onepage',
                'post_parent' => 0,
            );
// Insert the post into the database
            wp_insert_post($defaults);
            $defaults = array(
                'post_status' => 'publish',
                'post_name' => 'metodologia', // The name (slug) for your post
                'post_title' => 'Metodologia', // The title of your post.
                'post_type' => 'onepage',
                'post_parent' => 0,
            );
// Insert the post into the database
            wp_insert_post($defaults);
            $defaults = array(
                'post_status' => 'publish',
                'post_name' => 'servicos', // The name (slug) for your post
                'post_title' => 'Serviços', // The title of your post.
                'post_type' => 'onepage',
                'post_parent' => 0,
            );
            wp_insert_post($defaults);

            $page = get_page_by_path('cases', OBJECT, 'onepage');
            add_option( 'cases', $page->ID, '', 'yes' );

            $page = get_page_by_path('clientes', OBJECT, 'onepage');
            add_option( 'clientes', $page->ID, '', 'yes' );

            $page = get_page_by_path('portfolio', OBJECT, 'onepage');
            add_option( 'portfolio', $page->ID, '', 'yes' );

            $page = get_page_by_path('metodologia', OBJECT, 'onepage');
            add_option( 'metodologia', $page->ID, '', 'yes' );

            $page = get_page_by_path('servicos', OBJECT, 'onepage');
            add_option( 'servicos', $page->ID, '', 'yes' );

        }
    }

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    
    function junto_theme_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Junto Theme, use a find and replace
         * to change 'junto-theme' to the name of your theme in all the template files
         */
        load_theme_textdomain('junto-theme', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'junto-theme'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link'
        ));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('junto_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
        register_onepage_posts();
    }
endif; // junto_theme_setup
add_action('after_setup_theme', 'junto_theme_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function junto_theme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'junto-theme'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'junto_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function junto_theme_scripts()
{
    wp_enqueue_style('junto-theme-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('source-sans', get_stylesheet_directory_uri() . '/css/source-sans.css', false, '1.0.0');

    wp_enqueue_script('jquery');
    wp_enqueue_script('junto-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);
    wp_enqueue_script('junto-theme-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20120206', true);
    wp_enqueue_script('junto-theme-caroufredsel', get_template_directory_uri() . '/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js', array(), '20120206', true );
    wp_enqueue_script('junto-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20120206', true);

    wp_enqueue_script('junto-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'junto_theme_scripts');

/**
 * Admin scripts
 */
add_action('admin_enqueue_scripts', 'polis_admin_enqueue_scripts');
function polis_admin_enqueue_scripts()
{
    // Remove Open Sans
    wp_deregister_style('open-sans');
    wp_register_style('open-sans', false);

    // Theme admin scripts
    wp_enqueue_style('dashicons');
    wp_enqueue_style('source-sans', get_stylesheet_directory_uri() . '/css/source-sans.css', false, '1.0.0');
    wp_enqueue_style('style-admin', get_stylesheet_directory_uri() . '/css/style-admin.css', false, '1.0.0');
    $screen = get_current_screen();
    if ($screen->post_type == 'onepage') {
        wp_enqueue_style('admin_remove', get_stylesheet_directory_uri() . '/css/admin_remove.css', false, '1.0.0');
        wp_enqueue_script('admin_remove_js', get_template_directory_uri() . '/js/admin_remove.js', array(), '20120206', true);
    }
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
//require get_template_directory() . '/inc/logos-clientes.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * ACF
 */
define('ACF_LITE', false);
require get_template_directory() . '/inc/advanced-custom-fields/acf.php';
//require get_template_directory() . '/inc/acf-options-page/acf-options-page.php';
require get_template_directory() . '/inc/acf-fields.php';
//cpt das opçoes
require get_template_directory() . '/inc/cpt-onepage.php';
//cpt portfolio
require get_template_directory() . '/inc/cpt-portfolio.php';


/**
 * Função para pegar o attachment de forma completa, como um post
 */
function wp_get_attachment($attachment_id)
{
    $attachment = get_post($attachment_id);
    return array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

function hide_add_new_onepage()
{
    global $submenu;
    unset($submenu['edit.php?post_type=onepage'][10]);
}
add_action('admin_menu', 'hide_add_new_onepage');


/**
 * Função para criar resumos
 */
function resumo( $content, $custom_max = '', $sep = '') {
    global $query;

    if ( empty($content) ) {
        return '';
    } else {
        if( empty($sep) ){
            $sep = ' [...]';
        }
        if ( empty( $custom_max ) ) {
            $max = 100;
        } else {
            $max = $custom_max;
        }

        if ( strlen( $content ) > $max ) {
            while ( substr( $content, $max, 1 ) <> ' ' && ( $max < strlen( $content ) ) ) {
                $max ++;
            };
        };
        return substr( $content, 0, $max ) . $sep;
    }
}
