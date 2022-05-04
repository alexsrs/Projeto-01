<?php

	
	//Carregar classes 	
	$autoload = function($class){

		//Carregar php mailer
		if($class =='Email'){
			include('classes/vendor/autoload.php');
			
		};



	
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	// fim da função de carregamento dinamico 


	define('INCLUDE_PATH','http://localhost/php-projetos/Projeto-01/');

	
?>