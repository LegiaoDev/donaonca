<?php get_header(); ?>
    <!-- 
    **************************
    ****** Banner rotativo ******
    *************************
    -->
    <div class="banners"><!-- Abre banners -->
        <div class="banner" id="banner1"><a href="#"><img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner.png" alt=""></a></div>

        <div class="banner" id="banner2"><a href=""><img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner.png" alt=""></a></div>

        <div class="banner" id="banner3"><a href=""><img src="http://local.donaonca.com/wp-content/uploads/2018/10/banner.png" alt=""></a></div>
    </div><!-- Fecha banners -->

    <div class="container"> <!-- Abre container -->
        <!-- 
        *************************
        *******Banners fixos*******
        *************************
        -->
        <div class="banners-fixos">
            <div class="banner-fixo" id="banner-fixo1">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/11/banner-estreito.png" alt="">
                </a>
            </div>
            <div class="banner-fixo" id="banner-fixo2">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/11/banner-estreito.png" alt="">
                </a>
            </div>
            <div class="banner-fixo" id="banner-fixo2">
                <a href="#">
                    <img src="http://local.donaonca.com/wp-content/uploads/2018/11/banner-estreito.png" alt="">
                </a>
            </div>
        </div>
        <!-- 
        *************************
        *******Lançamentos*******
        *************************
        -->
        <div class="titulo-secao">
            <h2 class="titulo-lista-produto">Lançamentos</h2>
            <span class="barra-titulo"></span>
        </div>
        <div class="produtos-home-array" id="lancamentos">
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
                    <div class="produto">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php
                                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                                else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; 
                            ?>
                            <div class="texto-produto">
                                <div class="rating-custom">
                                    <?php wc_get_template( 'single-product/rating.php' ); ?>
                                </div>
                                <p class="titulo-produto"><?php the_title(); ?></p>
                                <div class="valor">
                                    <?php 
                                        $preco =  $product->get_price();
                                        $parcela = floatval( $preco)/4;
                                        echo "<p>4x de</p> <p class='preco'> R$ ".number_format($parcela, 2, ',', '. ')."</p>";
                                        // echo gettype($parcela);
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div><!-- /span3 -->
                <?php endwhile; ?>
                <?php wp_reset_query(); 
            ?>
        </div>

        <!-- 
        *************************
        *******Lançamentos*******
        *************************
        -->
        <div class="titulo-secao">
            <h2 class="titulo-lista-produto">Mais vendidos</h2>
            <span class="barra-titulo"></span>
        </div>
        <div class="produtos-home-array" id="lancamentos">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'stock' => 1,
                    'posts_per_page' => 4,
                    'meta_key' => 'total_sales',
                    'orderby' => 'meta_value_num',
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="produto is-one-quarter">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php
                                if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                                else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="My Image Placeholder" width="65px" height="115px" />'; 
                            ?>
                            <div class="texto-produto">
                                <div class="rating-custom">
                                    <?php wc_get_template( 'single-product/rating.php' ); ?>
                                </div>
                                <p class="titulo-produto"><?php the_title(); ?></p>
                                <div class="valor">
                                    <?php 
                                        $preco =  $product->get_price();
                                        $parcela = floatval( $preco)/4;
                                        echo "<p>4x de</p> <p class='preco'> R$ ".number_format($parcela, 2, ',', '. ')."</p>";
                                        // echo gettype($parcela);
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div><!-- /span3 -->
                <?php endwhile; ?>
                <?php wp_reset_query(); 
            ?>
        </div>
        
          <!-- 
        *************************
        ******* Numero whatsapp cadastro *******
        *************************
        -->
    </div> <!-- Fecha container -->
    <div class="newsletter">
        <div class="container" id="news">
            <h3 class="news__texto">Receba novidades direto no seu Whatsapp!</h3>
            <form action="" method="post" class="news__form">
                <input type="text" placeholder="Digite seu número">
                <button class="botao" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!-- 
        *************************
        ******* consórcio *******
        *************************
        -->
    <div class="container consorcio">
        <div class="consorcio__imagem">
            <p class="consorcio__imagem__texto">Participe do Consórcio</p>
        </div>
        <div class="consorcio__area-form">
            <h3 class="consorcio__area-form__titulo">Faça parte!</h3>
            <form action="" method="post" class="consorcio__form">
                <input type="text" placeholder="Digite seu nome">
                <input type="tel" placeholder="Digite seu numero">
                <button type="submit" class="botao consorcio__form__botao">Enviar</button>
            </form>
        </div>
    </div>
<?php get_footer(); ?>