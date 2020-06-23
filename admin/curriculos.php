<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){
	
	


//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM banners WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$banner = $ln['img'];
	$link = $ln['link'];

		
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM curriculos WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	

		require('class/class.upload.php');
		$Images = new UploadArquivoSis();
	
		//PASSA OS PARAMETROS - PASTA DE UPLOAD, NOME DO CAMPO INPUT, LARGURA/ALTURA MÁXIMA PARA FOTOS
		$arquivo = $Images->Upload('./img','img',0);

		if(!empty($arquivo)){
			$sel = $db->select("UPDATE banners SET img='$arquivo' WHERE id='$id' LIMIT 1");	
			echo '<script>$("#sucesso_user").show();</script>';
		}
			
			$sel = $db->select("UPDATE banners SET link='$link' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Filtro de Curriculos</h4></h4>
	</div>
				
<div class="row">

	<div class="col-md-12">&nbsp;</div>
	
    <div class="col-md-12">
    
        <form method="POST">
    	<div class="col-md-6">
           <div class="form-group">
                   <select class="form-control" name="area">
                        <option>- Selecione -</option>
                        <option value="Outros">- Serviços Gerais -</option>
                        <option value="Manutenção">- Manutenção -</option>
                        <option value="Técnico">- Técnico -</option>
                        <option value="Engenharia">- Engenharia -</option>
                        <option value="Outros">- Outros -</option>
                      </select>
           </div>
        </div>

    
        <hr>
        
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Buscar</button>
        </div>   
        </form>
        <div class="col-md-12">&nbsp;</div>
           
   </div>

</div>                            
      
</div>    



<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Curriculos Cadastrados</h4></h4>
	</div>
				

<ul class="list-group">
<li class="list-group-item">
<div class="row">
	
					
	<?php
    if (!empty($_POST['area'])) {
        $area= $_POST['area'];
		$db = new DB();    
		$sel = $db->select("SELECT * FROM curriculos WHERE area='$area' ORDER BY id");
		
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				echo '
					
					
						<div class="col-md-3 text-center">
						<h4>'.$yy['nome'].'</h4><br>
						<a href="?id='.$yy['id'].'&action=3" ><i class="fa fa-trash">Excluir</i></a> |

						<a href="../curriculos/'.$yy['urli'].'" download="'.$yy['urli'].'" ><i class="fa fa-pencil-square-o" aria-hidden="true">Baixar</i></a>
						</div>											
					
				';
				$x++;	
			}
		} else {
			
			echo'
					
					
						<a  data-toggle="collapse" style="text-transform:uppercase">NENHUM REGISTRO ENCONTRADO</a>				
						
						
				
				';
			
		}
    }
	?>

</div>	
</li>
</ul>                           
      
</div> 

<?php include("includes/rodape.php"); ?>