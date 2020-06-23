<?php
header("Content-Type: text/html; charset=iso-8859-1");

 require("../class_email/class.phpmailer.php");


function envia_email($email,$mensagem,$cliente){

	$mail = new PHPMailer;
	$mail->SMTPDebug =0;
	$mail->isSMTP();
	$mail->Host = 'srv74.prodns.com.br';
	$mail->SMTPAuth = true;
	$mail->Username = 'site@sisconnection.com.br';
	$mail->Password = 'inicial2011';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('site@sisconnection.com.br', 'Novo Pedido');
	$mail->addAddress($email);
  $mail->AddCC($cliente);

	$mail->isHTML(true);

	$mail->Subject = 'PEDIDO SITE DAVOI';
	$mail->Body    = $mensagem;
	$mail->send();
}


$dest= 'juangarcia170498@gmail.com';


$to_ema = $dest;

$vaix = '
	<table cellspacing="0" style="font-family: Helvetica; font-size: 14px; width:600px; margin: 0 auto; border: 1px solid #D2D2D2;">
			<tr><td style="padding:14px;">
			<h2>Nova solicitação de contato</h2>
			<p><strong>NOME:</strong> '.$nome.'</p>
			<p><strong>TELEFONE:</strong> '.$telefone.'</p>
			<p><strong>ENDEREÇO:</strong> '.$email.'</p>
			<p><strong>CIDADE:</strong> '.$msg.'</p>
			<p style="font-size:12px; color:#666">IMPORTANTE: NÃO RESPONDA ESSE E-MAIL, POIS ELE É ENVIADO ATRAVÉS DO SITE DAVOI.</p>
			</td></tr>
		</table>
';

        envia_email($to_ema,$vaix,$email);
        
        header("Location: ../parceiros/true");


?>
