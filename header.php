<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>
	<header id="header" >

		<ul class="Cul">
			<?php
			$array = array("Inicio", "Nosotros", "Cotizar", "Contactar");
			foreach ($array as &$valor) {
				$html = '<li class="Cli"><a href=" %s.html" +> %s </a></li>';
				printf($html, $valor, $valor);
			}
			?>

		</ul>

	</header><center><img src="" alt="" ></center>
	<section class="container">