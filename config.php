<?php

	
define('INCLUDE_PATH','http://localhost/php-projetos/Projeto-01/');

	require 'classes/vendor/autoload.php';
	//Carregar classes 	
$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	
?>