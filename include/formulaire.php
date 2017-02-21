<?php
		function my_mail($user_mail, $pseudo,$message_sujet, $message_html){
		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'pinkfloyd03coding@gmail.com';                 // SMTP username
		$mail->Password = 'Moulins03_ThePlaceToWork';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		$mail->setLanguage('fr', '/optional/path/to/language/directory/');

		$mail->setFrom($_POST["mail"], $_POST["mail"]);
		$mail->addAddress("PinkFloyd03Coding@gmail.com", 'Zone Membre');     
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $message_sujet;
		$mail->Body    = $message_html;
		$mail->AltBody = $message_html;

		if(!$mail->send()) {
		    echo 'Message non envoyer.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

	
my_mail($_POST["mail"], $_POST["prenom"], $_POST["sujet"], $_POST["message"]);