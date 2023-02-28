<?php
   include('../config.php');
   $data =[];
   $assunto = 'Novo contato do site';
   $corpo ='';
   foreach ($_POST as $key => $value) {
       $corpo.=ucfirst($key).": ".$value;
       $corpo.="<hr>";
   }
   $info = array('assunto'=>$assunto,'corpo'=>$corpo);
   $mail = new Email('smtp.titan.email', 'teste@creapix.com.br','123456teste','PROJETO01');
   $mail->addAddress('alexsrs@gmail.com','ADM do Site');
   $mail->formatarEmail($info);
   //if($mail->enviarEmail()){
    
   //     $data['sucesso'] = true;
   //    } else {
   //     $data['erro'] = true;
   //}
    $data['retorno'] = 'sucesso';
    die(json_encode($data));
?>