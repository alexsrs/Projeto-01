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
				if (isset($_POST['acao'])) {
					// Enviei o formulário.
					if($_POST['email'] != ''){
						$email = $_POST['email'];
						if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
							// Tudo certo, é um email 
							//agora só enviar
							$mail = new Email('smtp.titan.email', 'teste@creapix.com.br','123456teste','PROJETO01');
							$mail->addAddress('alexsrs@gmail.com','ADM do Site');
							$corpo = "E-mail cadastrado na home do site:<hr>$email";
							$info = array('assunto'=>'Um novo email cadastrado no site','corpo'=>$corpo);
							$mail->formatarEmail($info);

							if($mail->enviarEmail()){echo '<script>alert("Email enviado com sucesso")</script>';
							} else {echo '<script>alert("Algo deu errado")</script>';

							}
						} else {echo '<script>alert("Não é um email valido ")</script>';
						}
					} else {
						echo '<script>alert("Campos vazios não são permitidos")</script>';
					}

				}
			?>

	<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				# code...
				break;
			case 'servicos':
				echo '<target target="servicos" />';
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
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile"><i class="fas fa-align-justify"></i></div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!-- clear -->
		</div><!-- center -->
	</header>

<div class="container-principal">	
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
</div><!--container-principal-->
	<footer class="">
		<div class="center">
			<p>Solid Fit - Todos os direitos reservados</p>
		</div><!-- center -->	
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCnh9a-0dAbErxqWnQiJQqfL4DU_9YLEb8"></script>
	<script src="<?php echo INCLUDE_PATH;?>js/initMap.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php 
		if ($url == 'home' || $url =='') {
	?>
		<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
	<?php
		if($url == 'contato'){
	?>
	
<?php } ?>
</body>
</html>


