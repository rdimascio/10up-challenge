<?php
if (!function_exists( 'theme_setup' )) :
	function theme_setup() {
		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '10up-theme' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

if (!function_exists( 'asset_setup' )) :
    function asset_setup() {
        wp_enqueue_style( '10up-css', get_stylesheet_directory_uri() . '/dist/main.css', false, null );
    }
    add_action( 'wp_enqueue_scripts', 'asset_setup', 100 );
endif;
?>
