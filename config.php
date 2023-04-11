<?php
	
	/* 
	TODO:  Variável global com os cargos estamos usando 2 mais vamos otimizar e unificar
	*/




	//Carregar classes 	

	session_start();
	date_default_timezone_set('America/Sao_Paulo');

	$autoload = function($class){
		if($class =="Email"){
			require_once('classes/phpmailer/PHPmailerAutoload.php');
		}
			include('classes/'.$class.'.php');
		};

	spl_autoload_register($autoload);
		
	define('INCLUDE_PATH','http://localhost/Projeto-01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	define('BASE_DIR_PAINEL',__DIR__.'/painel');

	//Conexão com Banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto-01');

	//constantes para o painel de controle
	define('NOME_EMPRESA','Solid Fit');

	// Funções
	function pegaCargo($indice){
		return Painel::$cargos[$indice];
	}

	function selecionadoMenu($par){
		$url = explode('/',@$_GET['url'])[0];
			if($url == $par){
				echo 'class="menu-active"';
			}
		}

	function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		} else {
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		} else {
			include('painel/pages/permissao-negada.php');
			die();
		}
	}
?>