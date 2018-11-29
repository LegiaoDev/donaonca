<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="top-nav-menu">
			<!-- Logo -->
			<a href="/"><img src="https://donaonca.shop/wp-content/uploads/2018/11/logo-sem-slogan-1.png" alt="Logo Dona Onça" class="logo-top-nav-menu"></a>
			
			<!-- Busca -->
			<?php get_product_search_form(); ?>

			<!-- Icones -->
			<div class="icones-top-menu">
				<a href="https://api.whatsapp.com/send?phone=5547988421537"><div class="flaticon-whatsapp-logo"></div></a>
				<a href="/minha-conta/"><div class="flaticon-user"></div></a>
				<a href="/carrinho/"><div class="flaticon-shopping-cart"></div></a>
			</div> <!-- Fim icones -->
		</div> <!-- top-nav-menu -->
	
		<?php wp_nav_menu( array(
			'theme_location'  => 'principal', 
			'container_class' => 'menu-principal',
			'menu_class'      => 'dona-onca-menu'
		)); ?> 

			<div class="menu-mobile">
				<div class="container-mobile-menu">
					<div class="icone-mobile">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		<div class="area-menu-mobile">
			<span id="fechar-mobile">X</span>
			<?php wp_nav_menu( array(
				'theme_location'  => 'principal', 
				'container_class' => 'menu-principal-mobile',
				'menu_class'      => 'dona-onca-menu-mobile'
			)); ?> 
		</div>


		
	</header>