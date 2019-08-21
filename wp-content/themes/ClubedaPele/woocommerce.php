<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title> Clube da Pele - Produtos de Beleza</title>

	<!-- Required meta tasgs -->
	<meta <?php bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap --> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">


	<!-- Font awesome --> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style type="text/css">
		
		.checkout{
			margin-top: 0px!important;
		}

	</style>

</head>

<!-- Navbar -->
<body id="main">
	<nav class="navbar navbar-expand-lg navbar-dark " id="mainNav" style="background-color: white!important;">
		<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url');?>/img/logo.png?>" width="40" height="70"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#1CBBB4;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="https://clubedapele.com.br" style="color: #666;">INÍCIO <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#como-funciona" style="color: #666;">SOBRE O CLUBE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#faq" style="color: #666;">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#depoimentos" style="color: #666;">DEPOIMENTOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#planos" style="background-color: #1CBBB4; color: white; font-weight: bolder;">FAÇA PARTE DO CLUBE</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Conteúdo da Página -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="checkout">
					<?php woocommerce_content(); ?>	
				</div>
			</div>
		</main>
	</div>

	<footer>
		<?php get_footer(); ?>
	</footer>

	
</body>


</html>
