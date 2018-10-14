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
    </div> <!-- Fecha container -->
<?php get_footer(); ?>