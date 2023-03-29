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
</body>
</html>





