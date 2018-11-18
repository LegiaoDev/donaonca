<?php

	// Inserindo scripts
	function donaonca_scripts() {
		wp_enqueue_style('icones', get_template_directory_uri() . '/inc/css/flaticon.css', array(), '1.0.0', 'all');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
		wp_enqueue_script(
			'custom-script',
			get_stylesheet_directory_uri() . '/js/app.js',
			array( 'jquery' )
		);	}
	add_action('wp_enqueue_scripts', 'donaonca_scripts');

	// Suporte woocommerce
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


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

	function meusWidgets() {
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar1'
		));
	}
	add_action( 'widgets_init', 'meusWidgets');

?>