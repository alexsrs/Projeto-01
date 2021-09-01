<?php 

	/**
	 * 
	 */
	class Email
	{
		
		function __construct()
		{
			# code...
			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                      //Enable verbose debug output
			    $mail->isSMTP(true);                                            //Send using SMTP
			    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mail->Username   = 'creapix.teste@gmail.com';                     //SMTP username
			    $mail->Password   = 'crea1234';                               //SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			    //Recipients
			    $mail->setFrom('creapix.teste@gmail.com', 'Alex');
			    $mail->addAddress('alexsrs@gmai.com', 'Alex Sandro');     //Add a recipient
			    //$mail->addAddress('ellen@example.com');               //Name is optional
			    //$mail->addReplyTo('info@example.com', 'Information');
			    //$mail->addCC('cc@example.com');
			    //$mail->addBCC('bcc@example.com');

			    //Attachments
			    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			    //Content
			    $mail->isHTML(true);                                  //Set email format to HTML
			    $mail->Subject = 'Testando PHPMailer';
			    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo 'A mensagem foi enviada';
			} catch (Exception $e) {
			    echo "Não foi possível enviar a mensagem. Mailer Error: {$mail->ErrorInfo}";
			}

			
		}
	}

	?>