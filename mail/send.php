<?php


$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$mensagem=$_POST["msg"];

require 'PHPMailerAutoload.php';

$mail = new PHPMailer();

//$mail->SMTPDebug = 3;
$mail->Charset = 'UTF-8'; //Linguagem				// Enable verbose debug output
$mail->isSMTP();									// Set mailer to use SMTP
$mail->Host = 'gateway3.0net.com.br';				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;								// Enable SMTP authentication
$mail->Username = 'contato@drprojetos.com.br';				// SMTP username
$mail->Password = 'md#2016';					// SMTP password
//$mail->SMTPSecure = 'tls';						// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;									// TCP port to connect to

$mail->From = 'contato@drprojetos.com.br';
$mail->FromName = 'DR Projetos';
$mail->addAddress('contato@drprojetos.com.br');	        // Name is optional
//$mail->addReplyTo('contato@ekoconstrutora.com.br', 'Eko Construtora');
$mail->addCC('vitor@drprojetos.com.br');
$mail->addCC('ritadias@drprojetos.com.br');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Nova mensagem do site - DR PROJETOS";
$mail->Body    = 'Nome: ' . $nome . '<br> E-mail: ' . $email. '<br> Telefone: ' . $telefone . ' <br><br> '. $mensagem;
$mail->AltBody = 'Nome: '. $nome . ' E-mail: ' . $email . ' Telefone: ' . $telefone . ' Mensagem: ' . $mensagem;

if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
	echo "<script> window.location.href = 'http://drprojetos.com.br'; </script>";
}
	

?>