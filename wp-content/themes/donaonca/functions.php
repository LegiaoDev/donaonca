<?php

	// Inserindo scripts
	function donaonca_scripts() {
		wp_enqueue_style('icones', get_template_directory_uri() . '/inc/css/flaticon.css', array(), '1.0.0', 'all', true);
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all', true);
		wp_enqueue_style('slick', get_template_directory_uri() . '/inc/css/slick.css', array(), '1.0.0', 'all', true);
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/inc/css/slick-theme.css', array(), '1.0.0', 'all', true);
		wp_enqueue_script(
			'custom-script',
			get_stylesheet_directory_uri() . '/js/app.js',
			array( 'jquery' ),
			true
		);	
		wp_enqueue_script(
			'slick',
			get_stylesheet_directory_uri() . '/inc/js/slick.min.js',
			array( 'jquery' ),
			true
		);
	}
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

	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating',5);




	add_action( 'woocommerce_before_single_product', 'move_variations_single_price', 1 );
	function move_variations_single_price(){
		global $product, $post;
	
		if ( $product->is_type( 'variable' ) ) {
			// removing the variations price for variable products
			remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	
			// Change location and inserting back the variations price
			add_action( 'woocommerce_single_product_summary', 'replace_variation_single_price', 10 );
		}
	}
	
	function replace_variation_single_price(){
		global $product;
	
		// Main Price
		$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
		$price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
	
		// Sale Price
		$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
		sort( $prices );
		$saleprice = $prices[0] !== $prices[1] ? sprintf( __(  '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
	
		if ( $price !== $saleprice && $product->is_on_sale() ) {
			$price = '<del>' . $saleprice . $product->get_price_suffix() . '</del> <ins>' . $price . $product->get_price_suffix() . '</ins>';
		}
	
		?>
		<style>
			div.woocommerce-variation-price,
			div.woocommerce-variation-availability,
			div.hidden-variable-price {
				height: 0px !important;
				overflow:hidden;
				position:relative;
				line-height: 0px !important;
				font-size: 0% !important;
			}
		</style>
		<script>
		jQuery(document).ready(function($) {
			jQuery('#pa_cor').blur( function(){
				if( '' != jQuery('input.variation_id').val() ){

					jQuery('p.price').html(jQuery('div.woocommerce-variation-price > span.price').html()+'</p>');
				} 
			});
		});
		</script>
		<?php
	
		echo '<p class="price">'.$price.'</p>
		<div class="hidden-variable-price" >'.$price.'</div>';
	}