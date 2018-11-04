<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">
	<div class="titulo-secao">
            <h2 class="titulo-lista-produto">Produtos relacionados</h2>
            <span class="barra-titulo"></span>
        </div>
        <div class="produtos-home-array" id="lancamentos">
		<?php
                $args = array(
                    'post_type' => 'product',
                    'stock' => 1,
                    'posts_per_page' => 4,
                    'orderby' =>'rand',
                    'order' => 'DESC' 
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="produto">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php
                                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                                else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; 
                            ?>
                            <h3><?php the_title(); ?></h3>
                            <div class="valor">
                                <?php 
                                    $preco =  $product->get_price();
                                    $parcela = floatval( $preco)/12;
                                    echo "<p>12x de</p> <p class='preco'> R$ ".number_format($parcela, 2, ',', '. ')."</p>";
                                    // echo gettype($parcela);
                                ?>
                            </div>
                        </a>
                    </div><!-- /span3 -->
                <?php endwhile; ?>
                <?php wp_reset_query(); 
            ?>

	</section>

<?php endif;

wp_reset_postdata();
