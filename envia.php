<?php
header("Content-Type: text/html; charset=iso-8859-1");

 require("class_email/class.phpmailer.php");

 require 'class/class.db.php';


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

    $nome =  utf8_decode($_POST['nome']);
    $tel =  utf8_decode($_POST['tel']);
	$rua = utf8_decode($_POST['rua']);
	$cidade = utf8_decode($_POST['cidade']);
	$planEsc = utf8_decode($_POST['planEsc']);
  $roteador = utf8_decode($_POST['roteador']);
  $email = utf8_decode($_POST['email']);
  $valor = utf8_decode($_POST['valor_total']);
	$tipo_plano = utf8_decode($_POST['tipo_plano']);


$dest= 'juangarcia170498@gmail.com';


$to_ema = $dest;

$vaix = '
	<table cellspacing="0" style="font-family: Helvetica; font-size: 14px; width:600px; margin: 0 auto; border: 1px solid #D2D2D2;">
			<tr><td style="padding:14px;">
			<h2>Nova solicitação de contato</h2>
			<p><strong>NOME:</strong> '.$nome.'</p>
			<p><strong>TELEFONE:</strong> '.$tel.'</p>
			<p><strong>ENDEREÇO:</strong> '.$rua.'</p>
			<p><strong>CIDADE:</strong> '.$cidade.'</p>
			<p><strong>PLANO:</strong> '.$planEsc.'</p>
      <p><strong>C/ ROTEADOR:</strong> '.$roteador.'</p>
			<p><strong>TOTAL DO PEDIDO: </strong> '.$valor.'</p>
			<p style="font-size:12px; color:#666">IMPORTANTE: NÃO RESPONDA ESSE E-MAIL, POIS ELE É ENVIADO ATRAVÉS DO SITE DAVOI.</p>
			</td></tr>
		</table>

';

		envia_email($to_ema,$vaix,$email);

		echo 'Mensagem enviada com sucesso. Obrigado, Enviaremos uma confirmação do pedido em seu E-mail em alguns minutos.';

		$db = new DB();
		$db->select("INSERT INTO pedidos (nome,tel,endereco,cidade,plano,roteador,status_pedido,tipo)
     VALUES ('$nome','$tel','$rua', '$cidade','$planEsc','$roteador','EM ABERTO','$tipo_plano')");

?>
