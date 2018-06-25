<?php
	// This code do the send the password recovery email to the user.
	require_once('phpmailer/PHPMailerAutoload.php');

	$remail = $_GET['remail'];
	$t=time();
	$e_remail = base64_encode($remail);
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'everesearchstudy@gmail.com';
	$mail->Password = '1234@qwer';
	$mail->SetFrom('Wofoil@gmail.com', 'Wofoil Enterprise');
	$mail->Subject = 'Password Recovery';
	$mail->Body = "Please Click on the link to reset your password. <a href='http://localhost/Server_Side_Web/ResetPass/resetpass.php?remail=$e_remail&time=$t'>http://localhost/Server_Side_Web/ResetPass/resetpass.php?remail=$e_remail&time=$t</a><br><br>Thank you for shopping with us! <b>This link expires in 30 seconds.</b><br><br>Wofoil Enterprise Team";
	$mail->AddAddress($remail);
	
    $mail->send();
    header("Location: ./index.php");
?>