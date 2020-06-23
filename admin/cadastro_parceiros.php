<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){
	
		$arquivo= $_FILES['img'];
		$nome= $arquivo['name'];
    	move_uploaded_file($arquivo['tmp_name'], 'img/'.$arquivo['name']);

		
		$sel = $db->select("INSERT INTO parcerias (img, titulo, descricao, urli ) VALUES ('$nome', '$titulo', '$descricao', '$url' )");
		echo '<script>$("#sucesso_user").show();</script>';
			

//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM parcerias WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$titulo = $ln['titulo'];
	$descricao = $ln['descricao'];
	$url = $ln['urli'];
	$img = $ln['img'];
	
	
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM parcerias WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	

		require('class/class.upload.php');
		$Images = new UploadArquivoSis();
	
		//PASSA OS PARAMETROS - PASTA DE UPLOAD, NOME DO CAMPO INPUT, LARGURA/ALTURA MÁXIMA PARA FOTOS
		$arquivo = $Images->Upload('img/','img',1024);

		
		if(!empty($arquivo)){
			$sel = $db->select("UPDATE parcerias SET img='$arquivo' WHERE id='$id' LIMIT 1");	
			echo '<script>$("#sucesso_user").show();</script>';
		}
			
			$sel = $db->select("UPDATE parcerias SET img='$arquivo', titulo= '$titulo',descricao= '$descricao', urli= '$url' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro de Parceiros</h4></h4>
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
    
    	<div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Titulo <span style="color: red;"> **</span></label>
                <input type="text" class="form-control" name="titulo" required="required" value="<?php if($x==1){ echo $titulo;} ?>"/>
  
           </div>
        </div>

        

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Descrição <span style="color: red;"> **</span></label>
                <input type="text" class="form-control" name="descricao" required="required" value="<?php if($x==1){ echo $descricao;} ?>"/>
  
           </div>
        </div>

        

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">URL</label>
                <input type="text" class="form-control" name="url" value="<?php if($x==1){ echo $url;} ?>"/>
  
           </div>
        </div>

        <div class="col-md-6">
           <div class="form-group">
                <label for="exampleInputEmail1">Imagem <small> (360x240)</small>  <span style="color: red;"> **</span></label>
                <input type="file" class="form-control" name="img" <?php if($x!=1){ echo 'required="required"';} ?> value="<?php if($x==1){ echo $img;} ?>" />
  
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
		<h4 class="panel-title"><h4>Parceiros Cadastrados</h4></h4>
	</div>
				

<ul class="list-group">
					
	<?php
		$hoje=date("Y-m-d");
		$db = new DB();    
		$sel = $db->select("SELECT * FROM parcerias ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				echo'
					
					<li class="list-group-item" style="padding-bottom:50px">
					
					<a href="'.$yy['url'].'">
					<div class="card-content">
						<div class="card-img">
							<img src="img/'.$yy['img'].'" height="150" alt="">
						</div>
						<div class="card-desc">
							<h3>'.$yy['titulo'].'</h3>
							<p>'.$yy['descricao'].'</p>
						</div>
					</div>
					</a>
								
						<a  href="?id='.$yy['id'].'&action=3" style="float:right;"><i class="fa fa-trash"></i></a>
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