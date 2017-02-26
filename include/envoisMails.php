<?php	
	if(isset($_POST["envoisMailing"])){
		my_mail($_POST["envoisMailing"]);
	}

	function my_mail($message_html){
		$i=0;$k=0;	
		require '../PHPMailer/PHPMailerAutoload.php';
		$bdd = new PDO('mysql:host=localhost;dbname=faceMoulins;charset=utf8', 'faceMoulins', 'Mysteria666');
		$req=$bdd->prepare('SELECT * FROM Mail');
		$req->execute();
		while($donnees = $req->fetch()){
			$i++;
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
			$mail->addAddress($donnees["mail"], "newsletter");
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = htmlspecialchars("newsletter_FaceMoulins");
			$mail->Body    = $message_html;
			$mail->AltBody = $message_html;

			if(!$mail->send()) {
				$k++;
			    echo 'Message non envoyé.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
		}
		if($k == $i)
			echo "Vos messages n'ont pas été envoyé..";
		elseif($k > 0)
			echo "Certains messages n'ont pas pu êtres envoyés..";
		else
			echo "Messages envoyé avec succès";
	}

	

?>