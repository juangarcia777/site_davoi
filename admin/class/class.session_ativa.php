<?php
ob_start();		
	  
	   @session_start();	
	   if(!isset($_SESSION['user_sisconnection_adm_site'])){
		   header("Location: index.php");								   
		   
	   } else {
		   
		  $id_usuario_logado = $_SESSION['user_sisconnection_adm_site'];		  
	
		   
		   
		   $nome_usuario = "administrador";
		   $email_usuario = '';
		
		  
	   }
	   
	   
	   

	   
?>