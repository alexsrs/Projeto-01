$(function(){
    $('body').on('submit','form',function(){
        var form = $(this);
        $.ajax({
            url:include_path+'ajax/formularios.php',
            method:'post',
            dataType: 'json',
            data:form.serialize()
        }).done(function(data){
            if(data.sucesso){
                console.log("Formulário enviado com sucesso");
            } else {
                console.log("ocorreu um erro ao enviar o email");
            }
        });
        return false;
    })
    
})