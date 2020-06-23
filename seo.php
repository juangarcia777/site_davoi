<?php

	$db= new DB;

	$conf['nome']= "http://www.sisconnection.com.br/clientes/davoi/";
	$conf['desc_pagina']= "DAVOI- Provedor de Internet";
	$conf['word_keys']=  "davoi, provedor de internet, internet fibra, provedor fibra, fibra ótica, lpnet, internet, melhor internet,
	internet lençois paulista, provedor de internet lencois paulista, provedor de internet lençois paulista";

		$titulo_pagina = $conf['nome'];
	
		$descricao_pagina = $conf['desc_pagina'];
		$palavras_chave = $conf['word_keys'];
		$link_pagina = "DAVOI";
		$type = 'website';
		
		$imagem_face = 'assets/images/logo-face.png';
		//$favicon = $InfoConfigGerais['favicon'];
		
		$tamanhos_imagem = '<meta property="og:image:width" content="300">
		<meta property="og:image:height" content="300">';

	
		$name_page = basename($_SERVER['PHP_SELF']);

	// 	if(!empty($_SESSION['cidade'])){
	// 	$y= $_SESSION['cidade'] ;
	//   }

	// 	if($name_page=='planos_internet.php'){

	// 		$select = $db->select("SELECT * FROM planos WHERE id_cidade= '$y' LIMIT 1");
	// 		if($db->rows($select)){
	// 			$line = $db->expand($select);
	// 			$link_pagina .= 'planos/'.$line['tipo_plano'];	
	// 			$titulo_pagina = 'Planos | Internet';

	// 			$descricao_pagina = $line['texto_peq'];

			
	// 		}

	// 	}




		if($name_page=='home.php'){$titulo_pagina = 'Início |  Davoi';}


?>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />    
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="rating" content="general" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="<?php echo $conf['desc_pagina']; ?>">
    <meta name="mobile-web-app-capable" content="yes">

	<title><?php echo $titulo_pagina; ?></title>

	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo Davoi; ?>assets/images/<?php echo $favicon; ?>">
	
	<!--GOOGLE TAGS-->            
    <meta name="keywords" content="<?php echo $conf['word_keys']; ?>" />
    <meta name="robots" content="FOLLOW,INDEX,ALL" />
    <meta name="author" content="SIS Tecnologia" />
    <meta name="description" content="<?php echo $conf['desc_pagina']; ?>"/>

    <!--FACEBOOK TAGS-->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="<?php echo $conf['nome']; ?>">
    <meta property="og:url" content="<?php echo $$conf['desc_pagina']; ?>">
    <meta property="og:title" content="<?php echo $titulo_pagina; ?>"/>
    <meta property="og:type" content="<?php echo $type; ?>"/>
    <meta property="og:description" content="<?php echo $descricao_pagina; ?>">
    <meta property="og:image" content="<?php echo $imagem_face; ?>">

    <?php echo $tamanhos_imagem; ?>

