<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){
	
		
		$sel = $db->select("INSERT INTO cidades (nome) VALUES ( '$nome')");
		echo '<script>$("#sucesso_user").show();</script>';
			

//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM cidades WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$nome = $ln['nome'];

	
	
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM cidades WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	
			
			$sel = $db->select("UPDATE cidades SET  nome='$nome' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
	
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro de Cidades</h4></h4>
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
    
    	<div class="col-md-12">
           <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" required="required" value="<?php if($x==1){ echo $nome;} ?>"/>
           </div>
        </div> 


        <hr>
        
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">SALVAR</button>
        </div>   
        
        <div class="col-md-12">&nbsp;</div>
           
   </div>

</div>                            
      
</div>    



<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cidades Cadastrados</h4></h4>
	</div>
				

<ul class="list-group">
					
	<?php
		$hoje=date("Y-m-d");
		$db = new DB();    
		$sel = $db->select("SELECT * FROM cidades ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				echo'
					
					<li class="list-group-item">
						<a  data-toggle="collapse" style="text-transform:uppercase">'.$yy['nome'].'</a	>			
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



                    
<?php include("includes/rodape.php"); ?>