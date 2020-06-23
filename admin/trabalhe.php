<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){
	
		
		$sel = $db->select("INSERT INTO desc_trabalhe_conosco (descricao) VALUES ('$texto')");
		echo '<script>$("#sucesso_user").show();</script>';
			

//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM desc_trabalhe_conosco WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$texto = $ln['descricao'];
	
	
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM desc_trabalhe_conosco WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	
      $texto=mysql_real_escape_string($texto);
			$sel = $db->select("UPDATE desc_trabalhe_conosco SET descricao='$texto' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro Texto Trabalhe Conosco</h4></h4>
	</div>
				


<?php
//SE FOR UPDATE
if($x==1){
	echo '<form method="post" action="?action=4" enctype="multipart/form-data">';	
	echo '<input type="hidden" name="id" value="'.$id.'">';
	
// INSERÇAO NORMAL	
} else {
	echo '<form method="post" action="?action=1" enctype="multipart/form-data">';
}
?>
<div class="row">

	<div class="col-md-12">&nbsp;</div>
	
    <div class="col-md-12">
    

        <div class="col-md-6">
            <div class="form-group">
              <label for="">Digite aqui :</label>
              <textarea class="form-control" name="texto" id="" rows="3"><?php if($x==1){ echo $texto;} ?></textarea>
            </div>
        </div>

      

       
        <hr>
        
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">SALVAR</button>
        </div>   
        
        <div class="col-md-12">&nbsp;</div>
           
   </div>
</form>
</div>                            
      
</div>    


<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Texto Atual</h4></h4>
	</div>
				

<ul class="list-group">
					
	<?php
		$hoje=date("Y-m-d");
		$db = new DB();    
		$sel = $db->select("SELECT * FROM desc_trabalhe_conosco ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
					
				echo'
					
					<li class="list-group-item">
						<a  data-toggle="collapse" style="text-transform:uppercase">'.$yy['descricao'].'</a>				
						<a href="?id='.$yy['id'].'&action=3" style="float:right;"><i class="fa fa-trash"></i></a>
						<a href="?id='.$yy['id'].'&action=2" style="float:right; margin-right:8px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						
					</li>
				';
				$x++;	
			}
		}
	
	?>
	

</ul>                           
      
</div> 


<?php require("includes/editor_texto.php"); ?>
<?php include("includes/rodape.php"); ?>