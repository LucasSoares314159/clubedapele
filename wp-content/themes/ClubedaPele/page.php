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
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="header-page container" style="margin-top: 80px;">
			<h4 class="text-left" style="font-size: 42px; color: #1CBBB4;"><?php the_title(); ?></h4>
		</div>
		<div class="content-page container" style="color: #666!important;">
			<p style="color: #666!important;"><?php the_content(); ?></p>
		</div>
		
</div>

<?php endwhile; ?>
<?php else : get_404_template(); endif; ?>
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