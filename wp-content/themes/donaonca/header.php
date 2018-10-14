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
			<a href="/"><img src="http://local.donaonca.com/wp-content/uploads/2018/10/logo.png" alt="Logo Dona Onça" class="logo-top-nav-menu"></a>
			
			<!-- Busca -->
			<?php get_search_form(); ?>

			<!-- Icones -->
			<div class="icones-top-menu">
				<a href="#"><div class="flaticon-whatsapp-logo"></div></a>
				<a href="/minha-conta/"><div class="flaticon-user"></div></a>
				<a href="/carrinho/"><div class="flaticon-shopping-cart"></div></a>
			</div> <!-- Fim icones -->
		</div> <!-- top-nav-menu -->
	
		<?php wp_nav_menu( array(
			'theme_location'  => 'principal', 
			'container_class' => 'menu-principal',
			'menu_class'      => 'dona-onca-menu'
		)); ?> 
	</header>