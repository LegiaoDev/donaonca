<?php get_header(); ?>
    <!-- 
    **************************
    ****** Banner rotativo ******
    *************************
    -->
    <div class="banners hero is-medium"><!-- Abre banners -->
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
                echo ' <ul class="categoria-home">'; // Se $categoria_produtos não estiver vazia (se existem categorias) abrir tag <ul>
                foreach ($categoria_produtos as $key => $categoria) { // Monta foreach para categorias
                    echo ' <li class="categoria-item-home">'; // Cria a tag <li>
                    echo '<a href="'.get_term_link($categoria).'" >'; // Inseri o link para a categoria
                    echo $categoria->name; // Inseri o nome da categoria
                    echo '</a>'; // Fecha a tag <a>
                    echo '</li>'; // Fecha a tag <li>
                }
                echo '</ul>'; // Fecha a lista <ul>
            }
            if( !empty($categoria_produtos) ):   ?>
             <div class="select-categoria mobile">
                    <select name="categorias" id="categorias">
                        <?php foreach ($categoria_produtos as $key => $categoria): ?>
                            <option value="<?php echo get_term_link($categoria); ?>">
                                <?php echo $categoria->name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="botao botao-categoria">Buscar</button>
                </div>
           
            <?php endif; ?>
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
                            <h2><?php the_title(); ?></h2>
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
                            <h2><?php the_title(); ?></h2>
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