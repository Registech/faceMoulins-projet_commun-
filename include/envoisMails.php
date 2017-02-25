<?php
		$email="";
		$bdd = new PDO('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
		$req=$bdd->prepare('SELECT * FROM Mail');
		$req->execute();
		$data='SELECT MAX(id) FROM Mail;';
		echo $data;
		while($donnees = $req->fetch()){
			$email.= $donnees["mail"];
			if($donnees["id"] == $data["id"]){
				echo "pomme";
			}
		}
		if(isset($_POST["envoisMailing"])){
			my_mail($_POST["envoisMailing"]);
		}
		echo $email;
		function my_mail($message_html){
		require '../PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'pinkfloyd03coding@gmail.com';                 // SMTP username
		$mail->Password = 'Moulins03_ThePlaceToWork';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		$mail->setLanguage('fr', '/optional/path/to/language/directory/');

		$mail->setFrom('pinkfloyd03coding@gmail.com', "FACE_Territoire_Bourbonnais");
		$mail->addAddress('pinkfloyd03coding@gmail.com', "newsletter");
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = htmlspecialchars("newsletter_FaceMoulins");
		$mail->Body    = $message_html;
		$mail->AltBody = $message_html;

		if(!$mail->send()) {
		    echo 'Message non envoyé.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

	

?>