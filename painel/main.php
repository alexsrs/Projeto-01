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

</div><!-- menu -->

    <header> 
        <div class="center">
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fa fa-window-close"></i></a>
            </div><!-- logout -->
            <div class="clear"></div><!-- clear -->
        </div> <!-- center -->
    </header>
</body>
</html>





