<?php
/**
 * Edufrienz Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Edufrienz Theme
 */

// Register Bootstrap Mega Navwalker Walker (Mega Menu)
require_once get_template_directory() . '/inc/class-wp-bootstrap-mega-navwalker.php';

// Register Customizer
require_once get_template_directory() . '/inc/customizer.php';

function edufrienz_scripts() {
	wp_enqueue_script('edufrienz_enqueue_scripts', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0', true);
    wp_enqueue_style('edufrienz_enqueue_style', get_template_directory_uri() . '/build/style-index.css');

    if( !wp_script_is('jquery')){
		wp_enqueue_script('jquery');
	}

	wp_enqueue_style( 'dashicons' );
	 // Font Awesome dari CDNJS
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', 'all');


    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.js', array( 'jquery' ), '4.6.2', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.css', array(), '4.6.2', 'all' );

	wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', 'all');

}
add_action( 'wp_enqueue_scripts', 'edufrienz_scripts' );

function edufrienz_config(){
	register_nav_menus(
		array(
			'edufrienz_md_nav_menu' => 'Header Desktop & Tablet Nav Menu (≥768px)',
			'edufrienz_sm_nav_menu' => 'Header Mobile Nav Menu (<768px)',
			'edufrienz_sm_nav_menu_2' => 'Header Mobile Bottom Nav Menu (<768px)'
		)
	);
	add_theme_support( 'custom-logo', array(
		'height' 		=> 164,
		'width'			=> 700,
		'flex_height'	=> true,
		'flex_width'	=> true
	));
	add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'edufrienz_config', 0 );


add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    static $menu_items = null;
    static $map = [];

    if ($menu_items === null && !empty($args->menu)) {
        $menu_items = wp_get_nav_menu_items($args->menu);
    }

    if (!$menu_items) {
        return $classes;
    }

    // cache per item
    if (!isset($map[$item->ID])) {
        $has_child = false;
        $has_grandchild = false;

        foreach ($menu_items as $child) {
            if ((int) $child->menu_item_parent === (int) $item->ID) {
                $has_child = true;

                foreach ($menu_items as $grandchild) {
                    if ((int) $grandchild->menu_item_parent === (int) $child->ID) {
                        $has_grandchild = true;
                        break 2;
                    }
                }
            }
        }

        $map[$item->ID] = [
            'has_child' => $has_child,
            'has_grandchild' => $has_grandchild
        ];
    }

    // hanya parent level (depth_0)
    if (
        in_array('menu-item-has-children', $classes, true) &&
        $map[$item->ID]['has_child'] &&
        !$map[$item->ID]['has_grandchild']
    ) {
        $classes[] = 'simple-dropdown';
    }

    return $classes;

}, 10, 3);


/**
 * Format cart count (999 → 999, 1000 → 1K, 1500 → 1.5K, 1000000 → 1M)
 */
function edufrienz_format_cart_count( $count ) {
    if ( $count >= 1000000 ) {
        return rtrim( rtrim( number_format( $count / 1000000, 1 ), '0' ), '.' ) . 'M';
    }

    if ( $count >= 1000 ) {
        return rtrim( rtrim( number_format( $count / 1000, 1 ), '0' ), '.' ) . 'K';
    }

    return (string) $count;
}