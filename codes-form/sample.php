<?php 

session_start();

			$result = '';
			$adminname = 'Sonny';
			$admingmail = 'verzosasonz@gmail.com'; // from 
			$subject = "ALERT";
            $email = $_SESSION['email']; //to

			$message = " hello wolrd";


				date_default_timezone_set('Etc/UTC');
				require 'phpmailer/PHPMailerAutoload.php';

				  //Create a new PHPMailer instance
				  $mail = new PHPMailer;
				  //Tell PHPMailer to use SMTP
				  $mail->isSMTP();
				  //Set the hostname of the mail server
				  $mail->Host = 'smtp.gmail.com';
				  $mail->Port = 587;
				  //Set the encryption system to use - ssl (deprecated) or tls
				  $mail->SMTPSecure = 'tls';
				  //Whether to use SMTP authentication
				  $mail->SMTPAuth = true;
				  //Username to use for SMTP authentication - use full email address for gmail
				  $mail->Username = "verzosasonz@gmail.com";
				  //Password to use for SMTP authentication
				  $mail->Password = "unfl imok pvdo mizb";
				  //Set who the message is to be sent from/important to avoid as root user in gmail sent
				  $mail->setFrom($admingmail,$adminname);
				  //Set an alternative reply-to address
				  // $mail->addReplyTo($email,$name);
				  //Set who the message is to be sent to
				  $mail->addAddress($email);
				  //i will add this line to allow html type
				  $mail->isHTML(true);
				  $mail->Subject = $subject;
				  //i will set the body of email
				  $mail->Body = "<a style='color:#17a2b8;'>Your email is :</a><br><center><h1 style='color:#17a2b8;'>".$message."</h1></center>";
				  //Attach an image file
				  // $mail->addAttachment($file);
				  //send the message, check for errors
				  if (!$mail->send()) {
				  		echo "Something Went Wrong. Please check your internet connection and try again later.";
				  }else {
				  		header("location: index.php");
				  }

			
?>