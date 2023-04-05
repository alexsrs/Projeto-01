<?php 
    verificaPermissaoPagina(2);
?>

<div class="box-content">
<h2><i class="fa fa-pencil" aria-hidden="true"></i> Adicionar usuário</h2>

<form method="post" enctype="multipart/form-data"> <!-- sem o atributo enctype nao envia a imagem -->

    <?php 
        if(isset($_POST['acao'])){
            // enviando o formulario 
            
        }


    ?>

    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" require />
    </div><!-- form-group -->

    <div class="form-group">
        <label>Senha:</label>
        <input type="password" name="password" require />
    </div><!-- form-group -->

    <div class="form-group">
        <label>Imagem</label>
        <input type="file" name="imagem" />
        <input type="hidden" name="imagem_atual" require />
    </div><!-- form-group -->
    
    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar"/>
    </div><!-- form-group -->
</form>

</div><!-- box-content -->