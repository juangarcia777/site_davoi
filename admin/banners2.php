<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){
	
		require('class/class.upload.php');
		$Images = new UploadArquivoSis();
	
		//PASSA OS PARAMETROS - PASTA DE UPLOAD, NOME DO CAMPO INPUT, LARGURA/ALTURA MÁXIMA PARA FOTOS
		$arquivo = $Images->Upload('./img','img',0);

		if(!empty($arquivo)){
			$sel = $db->select("INSERT INTO banner2 (img, link) VALUES ('$arquivo','$link')");
			echo '<script>$("#sucesso_user").show();</script>';
		}


//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM banner2 WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$banner = $ln['img'];
	$link = $ln['link'];

		
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM banner2 WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	

		require('class/class.upload.php');
		$Images = new UploadArquivoSis();
	
		//PASSA OS PARAMETROS - PASTA DE UPLOAD, NOME DO CAMPO INPUT, LARGURA/ALTURA MÁXIMA PARA FOTOS
		$arquivo = $Images->Upload('./img','img',0);

		if(!empty($arquivo)){
			$sel = $db->select("UPDATE banner2 SET img='$arquivo' WHERE id='$id' LIMIT 1");	
			echo '<script>$("#sucesso_user").show();</script>';
		}
			
			$sel = $db->select("UPDATE banner2 SET link='$link' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro de Banners</h4></h4>
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
                <label for="exampleInputEmail1">Link</label>
                <input type="text" class="form-control" name="link" required="required" value="<?php if($x==1){ echo $link;} ?>"/>
  
           </div>
        </div>

        <div class="col-md-6">
           <div class="form-group">
                <label for="exampleInputEmail1">Banner <small>(max: 2 MB)</small><span style="color: red;"> **</span>  </label>
               	<input type="file" class="form-control" name="img" <?php if($x!=1){ echo 'required="required"';} ?> />
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
		<h4 class="panel-title"><h4>Banners Cadastrados</h4></h4>
	</div>
				

<ul class="list-group">
<li class="list-group-item">
<div class="row">
	
					
	<?php
		$hoje=date("Y-m-d");
		$db = new DB();    
		$sel = $db->select("SELECT * FROM banner2 ORDER BY id DESC");
		
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				echo'
					
					
						<div class="col-md-3 text-center">
						<img src="./img/'.$yy['img'].'" class="img-responsive" ><br>
						<a href="?id='.$yy['id'].'&action=3" ><i class="fa fa-trash">Excluir</i></a> |	
						<a href="?id='.$yy['id'].'&action=2" ><i class="fa fa-pencil-square-o" aria-hidden="true">Editar</i></a>
						</div>											
					
				';
				$x++;	
			}
		} else {
			
			echo'
					
					
						<a  data-toggle="collapse" style="text-transform:uppercase">NENHUM REGISTRO ENCONTRADO</a>				
						
						
				
				';
			
		}
	
	?>

</div>	
</li>
</ul>                           
      
</div> 

<?php include("includes/rodape.php"); ?>