<?php 

require 'includes/class.db.php';
require 'includes/class.seguranca.php';

if(!empty($_POST['nome'])) {
    $nome= $_POST['nome'];
    $rua= $_POST['rua'];
    $cidade= $_POST['cidade'];
    $planEsc= $_POST['planEsc'];
    $roteador= $_POST['roteador'];
} 


$para="paccola31@gmail.com";
$assunto= "Pergunta do Contato";
$corpo= "Nome: ".$nome.
"- Endereço: ".$rua.
"- Cidade: ".$cidade.
"- Planos Escolhido: ".$planEsc.
"- Roteador Incluido: ".$roteador;
$cabecalho="From : juangarcia170498@gmail.com"."\r\n".
            "Reply-To: ".$email."\r\n".
             "X-Mailer:PHP/".phpversion();

mail($para, $assunto, $corpo, $cabecalho);

?>