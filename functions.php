<?php
/*
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */


function twentyseventeen_setup() {

		register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );


add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );


function trim_excerpt($text) {
     $text = str_replace('[&hellip;]', '...', $text);
     return $text;
    }
add_filter('get_the_excerpt', 'trim_excerpt');





?>