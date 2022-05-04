<?php
	
	//Carregar classes 	
	$autoload = function($class){
		//Carregar php mailer
		If($class == 'Email'){
			include('vendor/autoload.php');
		}


		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	// fim da função de carregamento dinamico 


	define('INCLUDE_PATH','http://localhost/php-projetos/Projeto-01/');

	
?>