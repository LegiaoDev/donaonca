<?php get_header(); ?>
    <!-- 
    **************************
    ****** Banner rotativo ******
    *************************
    -->
    <div class="banners"><!-- Abre banners -->
        <a href="#">
            <div class="banner" id="banner1"></div>
        </a>
    </div><!-- Fecha banners -->

    <div class="container"> <!-- Abre container -->
        <!-- 
        **************************
        ******** Categorias ********
        *************************
        -->
        <?php
            $ordenar_por = 'name'; // Ordenar lista por nome
            $ordem = 'asc';  // Ordenar a lista de A-Z
            $esconde_vazio = false ;  // Prevenir de mostrar categorias sem produto
            $args_categoria = array( 
                'orderby'    => $ordenar_por,
                'order'      => $ordem,
                'hide_empty' => $esconde_vazio,
            );   // Argumentos das categorias
            $categoria_produtos = get_terms( 'product_cat', $args_categoria );  // Pega a categoria
            if( !empty($categoria_produtos) ){
                echo ' <ul>'; // Se $categoria_produtos não estiver vazia (se existem categorias) abrir tag <ul>
                foreach ($categoria_produtos as $key => $categoria) { // Monta foreach para categorias
                    echo ' <li>'; // Cria a tag <li>
                    echo '<a href="'.get_term_link($categoria).'" >'; // Inseri o link para a categoria
                    echo $categoria->name; // Inseri o nome da categoria
                    echo '</a>'; // Fecha a tag <a>
                    echo '</li>'; // Fecha a tag <li>
                }
                echo '</ul>'; // Fecha a lista <ul>
            }
        ?>
        <!-- 
        *************************
        *******Banners fixos*******
        *************************
        -->
        <div class="banners-fixos">
            <div class="banner-fixo" id="banner-fixo1">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner-fixo.png" alt="">
                </a>
            </div>
            <div class="banner-fixo" id="banner-fixo2">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner-fixo.png" alt="">
                </a>
            </div>
            <div class="banner-fixo" id="banner-fixo3">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner-fixo.png" alt="">
                </a>
            </div>
        </div>
        <!-- 
        *************************
        *******Lançamentos*******
        *************************
        -->
        <div class="lancamentos-array">
            <h2 class="titulo-lista-produto">Lançamentos</h2>
            <?php
                $args = array(
                    'post_type' => 'product',
                    'stock' => 1,
                    'posts_per_page' => 4,
                    'orderby' =>'date',
                    'order' => 'DESC' 
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="span3">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php
                                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                                else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; 
                            ?>
                            <h3><?php the_title(); ?></h3>
                            <span class="price"><?php echo $product->get_price_html(); ?></span>
                        </a>
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </div><!-- /span3 -->
                <?php endwhile; ?>
                <?php wp_reset_query(); 
            ?>
        </div>


    </div> <!-- Fecha container -->
<?php get_footer(); ?>