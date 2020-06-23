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
		$arquivo = $Images->Upload('../imagens/portfolio','foto',1024);

		if(!empty($arquivo)){
			$sel = $db->select("INSERT INTO cad_portifolio (foto, categoria, cliente, texto, servico, ano, entregue, tags, segmento) VALUES 
				('$arquivo','$categoria', '$cliente', '$texto', '$servico', '$ano', '$entregue', '$tags', '$segmento')");
		echo '<script>$("#sucesso_user").show();</script>';
		}


//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS	
} else if(isset($_GET['action']) && $_GET['action']==2){
	
	$x=1;
	
	$sel = $db->select("SELECT * FROM cad_portifolio WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);
	
	$foto = $ln['foto'];
	$categoria = $ln['categoria'];
	$cliente = $ln['cliente'];
	$texto = $ln['texto'];
	$servico = $ln['servico'];
	$ano = $ln['ano'];
	$entregue = $ln['entregue'];
	$tags = $ln['tags'];
	$segmento = $ln['segmento'];
		
//FAZ A exclusao NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM cad_portifolio WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
	
//FAZ A ALTERAÇAO NO BANCO DE DADOS		
} else if(isset($_GET['action']) && $_GET['action']==4){
	

		require('class/class.upload.php');
		$Images = new UploadArquivoSis();
	
		//PASSA OS PARAMETROS - PASTA DE UPLOAD, NOME DO CAMPO INPUT, LARGURA/ALTURA MÁXIMA PARA FOTOS
		$arquivo = $Images->Upload('../imagens/portfolio','foto',1024);

		if(!empty($arquivo)){
			$sel = $db->select("UPDATE cad_portifolio SET foto='$arquivo' WHERE id='$id' LIMIT 1");	
			echo '<script>$("#sucesso_user").show();</script>';
		}
			
			$sel = $db->select("UPDATE cad_portifolio SET categoria='$categoria', cliente='$cliente', texto='$texto', servico='$servico', ano='$ano', entregue='$entregue', tags='$tags', segmento='$segmento' WHERE id='$id' LIMIT 1");	
			
		echo '<script>$("#sucesso_user").show();</script>';
			
}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro de Portfólio</h4></h4>
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
                <label for="exampleInputEmail1">Cliente</label>
                <input type="text" class="form-control" name="cliente" required="required" value="<?php if($x==1){ echo $cliente;} ?>"/>
  
           </div>
        </div>

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Serviço</label>
                <input type="text" class="form-control" name="servico" required="required" value="<?php if($x==1){ echo $servico;} ?>"/>
           </div>
        </div>

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Segmento</label>
                <input type="text" class="form-control" name="segmento" required="required" value="<?php if($x==1){ echo $segmento;} ?>"/> 
           </div>
        </div>


    	

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Categoria</label>
                <select class="form-control" name="categoria" required="required">
     
                	<?php 

                   	$dbb = new DB();    
					$sell = $dbb->select("SELECT * FROM cad_categorias ORDER BY id ASC");
						if($dbb->rows($sell)){
								
							while($xx = $dbb->expand($sell)){
								
								echo'			
									<option value="'.$xx['id'].'">
										<a  data-toggle="collapse" style="text-transform:uppercase">'.$xx['titulo'].'</a>
									</option>			
								';								
						}

					}
					 $categoria = $xx['id'];
                   ?>

                </select>
           </div>
        </div>

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Entregue</label>
                <input type="date" class="form-control" name="entregue" required="required" value="<?php if($x==1){ echo $entregue;} ?>"/>
  
           </div>
        </div>

        <div class="col-md-4">
           <div class="form-group">
                <label for="exampleInputEmail1">Ano</label>
                <input type="int" class="form-control" name="ano" required="required" value="<?php if($x==1){ echo $ano;} ?>"/>
           </div>
        </div>

        
        

        <div class="col-md-6">
           <div class="form-group">
                <label for="exampleInputEmail1">Tags <small>(Tags separadas por vírgula)</small></label>
                 <input type="text" class="form-control" name="tags" required="required" value="<?php if($x==1){ echo $tags;} ?>"/> 
  
           </div>
        </div>

        <div class="col-md-6">
           <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
               	<input type="file" class="form-control" name="foto" <?php if($x==1){ echo 'required="required"';} ?> />
           </div>
        </div>

        <div class="col-md-12">
           <div class="form-group">
                <label for="exampleInputEmail1">Texto</label>
                <textarea rows="8" class="form-html" name="texto"  required="required"><?php if($x==1){ echo $texto;} ?></textarea>
  
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
		<h4 class="panel-title"><h4>Portfólios Cadastrados</h4></h4>
	</div>
				

<ul class="list-group">
					
	<?php
		$hoje=date("Y-m-d");
		$db = new DB();    
		$sel = $db->select("SELECT * FROM cad_portifolio ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				echo'
					
					<li class="list-group-item">
						<a  data-toggle="collapse" style="text-transform:uppercase">'.$yy['cliente'].' - '.$yy['servico'].'</a	>			
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