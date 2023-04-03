<?php 
    if(isset($_GET['logout'])){
        Painel::logout();
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>css/fontawesome.min.css" rel="stylesheet">
 	<link href="<?php echo INCLUDE_PATH; ?>css/brands.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>css/solid.min.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet"/>

</head>
<body>  
<div class="menu">
    <div class="menu-wraper">
        <div class="box-usuario">
            
            <?php
                if($_SESSION['img'] == ''){
            ?>
                <div class="avatar-usuario">
                    <i class="fa fa-user"></i>
                </div><!-- avatar-usuario -->
            <?php } else { ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                    
                </div><!-- imagem-usuario -->
            <?php } ?> <!-- fechando o IF lá de cima -->

            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!-- nome-usuario -->
        </div><!-- box-usuario -->
        <div class="items-menu">
            <h2>Cadastro</h2>
            <a href="">Cadastrar depoimento</a>
            <a href="">Cadastrar serviço</a>
            <a href="">Cadastrar slider</a>
            <h2>Gestão</h2>
            <a href="">Listar depoimentos</a>
            <a href="">Listar serviços</a>
            <a href="">Listar slides</a>
            <h2>Administração</h2>
            <a href="">Editar usuário</a>
            <a href="">Adicionar usuário</a>
            <h2>Configuração</h2>
            <a href="">Editar</a>
        </div><!-- items-menu -->

    </div><!-- menu-wraper -->
</div><!-- menu -->

    <header> 
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!-- menu-btn -->
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fa fa-window-close"></i><span>Sair</span></a>
            </div><!-- logout -->
            <div class="clear"></div><!-- clear -->
        </div> <!-- center -->
    </header>

<div class="content">

    <div class="box-content left w100">
        <h2><i class="fa fa-home"></i>Painel de controle - Solid Fit</h2>
        <div class="box-metricas">
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Usuários  online</h2>
                    <p>10</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Total de visitas</h2>
                    <p>100</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Visitas hoje</h2>
                    <p>30</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->

            <div class="clear"></div><!--clear -->
        </div><!-- box-metricas -->

        
    </div><!-- box-content -->
   



    <div class="box-content left w100">

    </div><!-- box-content -->
     



    <div class="box-content left w50">
        
    </div><!-- box-content -->




    <div class="box-content right w50">
        
    </div><!-- box-content -->
    <div class="clear"></div><!--clear -->

</div><!-- content -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>





