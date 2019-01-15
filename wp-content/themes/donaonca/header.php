<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132528935-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-132528935-1');
	</script>



	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TTPFRBS');</script>
	<!-- End Google Tag Manager -->

</head>
<body >

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTPFRBS"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

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
