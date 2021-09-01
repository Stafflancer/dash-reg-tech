<?php
/**
 * @package WordPress
 * @subpackage dash-tech
 */

function inclusion_enqueue() {
	$ver_num = mt_rand();
	wp_enqueue_style('main', get_template_directory_uri() . '/static/css/main.min.css', [], $ver_num, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', ['main'], $ver_num, 'all');
	wp_enqueue_script('scripts', get_template_directory_uri() . '/static/js/main.min.js', ['jquery'], $ver_num, true);
}
add_action('wp_enqueue_scripts', 'inclusion_enqueue');

add_theme_support('post-thumbnails');

/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'embed_head', 'print_emoji_detection_script' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );

// Include files from includes folder
$include_folders = array(
    'includes/'
);
foreach ($include_folders as $inc_folder) {
    $include_folder = get_stylesheet_directory() . '/' . $inc_folder;
    foreach (glob($include_folder . '*.php') as $file) {
        require_once $file;
    }
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// add classes to next link
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="next"';
}

function posts_link_attributes_2() {
    return 'class="prev"';
}