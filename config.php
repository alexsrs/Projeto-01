<?php
	
	//Carregar classes 	

	session_start();

	$autoload = function($class){
		if($class =="Email"){
			require_once('classes/phpmailer/PHPmailerAutoload.php');
		}
			include('classes/'.$class.'.php');
		};

	spl_autoload_register($autoload);
		
	define('INCLUDE_PATH','http://localhost/Projeto-01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	//Conexão com Banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto-01');

	// Funções
	function pegaCargo($cargo){
		$arr = [
			'0' => 'Aluno',
			'1' => 'Professor',
			'2' => 'Administrador'];
			return $arr[$cargo];
	}
?>