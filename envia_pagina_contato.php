<?php

		include("libs/phpmailer/class.phpmailer.php");

		$mail = new PHPMailer();

		$mail->Host = "smtp.quadradigital.com.br";
		$mail->SMTPAuth = true;
		$mail->Username = 'formularios@quadradigital.com.br';
		$mail->Password = 'quadra2014*';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->CharSet = "uft-8";

		$mail->From = "noreply@aerotur.com.br"; // Seu e-mail
		$mail->Sender = "formularios@quadradigital.com.br"; // Seu e-mail
		$mail->FromName = "Aerotur"; // Seu nome

		// Define os destinatário(s)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		//$mail->AddAddress('rafaella.souza@aerotur.com.br', 'Aerotur Teen');
		 $mail->AddAddress('contas@quadradigital.com.br', 'Aerotur teste');


		$mail->IsHTML(true);


		$mail->Subject  = "Aerotur";
		$mail->Body = 'Name: '.$_POST['name'].
					'<br>Telefone: '.$_POST['telefone'].
					'<br>E-mail: '.$_POST['email'].
					'<br>Mensagem: '.$_POST['mensagem'];

		$enviado = $mail->Send();
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
 ?>
