<?php
		function my_mail($user_mail, $pseudo,$message_sujet, $message_html){
		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = ;                 // SMTP username
		$mail->Password = 'Moulins03_ThePlaceToWork';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		$mail->setLanguage('fr', '/optional/path/to/language/directory/');

		$mail->setFrom($user_mail, "FACE_Territoire_Bourbonnais");
		$mail->addAddress('pinkfloyd03coding@gmail.com', $pseudo);
		$mail->addReplyTo($user_mail, $pseudo);
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = htmlspecialchars($message_sujet);
		$mail->Body    = htmlspecialchars($message_html);
		$mail->AltBody = htmlspecialchars($message_html);

		if(!$mail->send()) {
		    echo 'Message non envoyé.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

	
my_mail($_POST["mail"], $_POST["prenom"], $_POST["sujet"], $_POST["message"]);
