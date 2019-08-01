<?php 
/*
Template Name: Página de agradecimento
*/
?>

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

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '656690431482813');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=656690431482813&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->
</head>

<!-- Navbar -->
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
<div class="content">
	<div class="header-page container card-thanks" style="margin-top: 80px;">
		<h4 class="text-center" style="font-size: 42px; color: #1CBBB4; padding-top: 40px;">Seja bem-vinda</h4>
		<p class="text-center">Nós ficamos muito felizes que agora você faz parte desse Clube, a sua presença é muito importante.
		Estamos sempre disponíveis para te ajudar nesse novo ciclo de cuidado com a sua pele, conte conosco.
		<br> <strong>Um abraço apertado!</strong>
		</p>
	</div>		
</div>


<footer>
	<?php get_footer(); ?>
</footer>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>