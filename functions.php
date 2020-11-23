<?php

if (!function_exists( 'theme_setup' )) :
	function theme_setup() {
		add_theme_support( 'title-tag' );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

if (!function_exists( 'asset_setup' )) :
    function asset_setup() {
		wp_enqueue_style( '10up-css', get_stylesheet_directory_uri() . '/dist/main.css', false, null );
		wp_register_script( '10up-js', get_stylesheet_directory_uri() . '/main.js', [], null, true );
		wp_enqueue_script( '10up-js' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'asset_setup', 100 );

if (!function_exists( 'menu_setup' )) :
	function menu_setup() {
		register_nav_menus(
			[
				'header' => __( 'Header' ),
			]
		);
	}
endif;
add_action( 'init', 'menu_setup' );

?>
