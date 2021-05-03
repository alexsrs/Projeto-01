<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01 - PHP</title>
	<link href="<?php echo INCLUDE_PATH; ?>css/fontawesome.min.css" rel="stylesheet">
 	<link href="<?php echo INCLUDE_PATH; ?>css/brands.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>css/solid.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>
	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target="sobre" />';
				# code...
				break;
			case 'servicos':
				echo '<target="servicos" />';
				# code...
				break;
		
		}
	?>

	<header>
		<div class="center">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Solid FIT</a></div><!-- logo -->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile"><i class="fas fa-align-justify"></i></div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!-- clear -->
		</div><!-- center -->
	</header>
<?php 
	

	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	} else {
		// podemos fazer o que quiser poir a pagina nao existe
		if ($url != 'sobre' && $url != 'servicos') {
			$pagina404 = true;
			include('pages/404.php');

			# code...
		} else {
			include('pages/home.php');
		}
		
	}


?>
	<footer>
		<div class="center">
			<p>Solid Fit - Todos os direitos reservados</p>
		</div><!-- center -->	
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<?php if($url == 'contato'){

	}
	?>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCnh9a-0dAbErxqWnQiJQqfL4DU_9YLEb8"></script>
	<script src="<?php echo INCLUDE_PATH;?>js/initMap.js"></script>
</body>
</html>


