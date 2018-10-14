<?php

	// Inserindo scripts
	function donaonca_scripts() {
		wp_enqueue_style('icones', get_template_directory_uri() . '/inc/css/flaticon.css', array(), '1.0.0', 'all');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
		wp_enqueue_script('script', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts', 'donaonca_scripts');

	// Suporte woocommerce
	add_action( ‘after_setup_theme’,’woocommerce_support’ );

	function woocommerce_support() {
		add_theme_support( ‘woocommerce’ );
	}

	// Menus
	register_nav_menus(array(
		'principal' => __( 'Menu Principal' )
	));

	// Logo
	function donaonca_logo() {
    $logo_config = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
		add_theme_support( 'custom-logo', $logo_config );
	}
	add_action( 'after_setup_theme', 'donaonca_logo' );

?>