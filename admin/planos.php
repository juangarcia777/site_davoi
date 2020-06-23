<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informa��es salvas/alteradas com sucesso.
</div>   


<?php

$x=0;
$db = new DB();    
		

if(isset($_GET['action']) && $_GET['action']==3){
	
	$sel = $db->select("DELETE FROM news WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';
	
}


$db = new DB();    
//$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//$registros = 20;		
$contagem = $db->select("SELECT COUNT(*) as c FROM planos GROUP BY id");
$total['c'] = $db->rows($contagem);
//$numPaginas = ceil($total/$registros);
//$inicio = ($registros*$pagina)-$registros;

?>

<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-bottom:50px">
		CADASTRAR NOVO PLANO
		</button>
		<div class="collapse" id="collapseExample">
		<div class="well">
			
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Nome do Plano</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="NOME">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Valor do Plano</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="VALOR">
			</div>

			<button type="submit" class="btn btn-warning ">Cadastrar</button>
			</form>

		</div>
		</div>


<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Planos Cadastrados no site <small style="color:#FFF">(clique sobre o plano para mais detalhes)</small><br/>
		 <span >TOTAL: <?php echo $total['c'];?></span></h4>
	</div>
				

<ul class="list-group">
					
	<?php
		$x=0;
		
		

		$sel = $db->select("SELECT * FROM planos ORDER BY id ");
		if($db->rows($sel)){
			$x=1;	
			while($yy = $db->expand($sel)){
								
				?>
					
					<li class="list-group-item">
						<a href="#pro<?php echo $x ?>" data-toggle="collapse" style="text-transform:uppercase">
						<?php echo $yy['nome_plano'] ?> Valor <?php echo $yy['valor'] ?> </a>

						<a href="?id='<?php echo $yy['id'] ?>'&action=3" style="float:right;"><i class="fa fa-trash"></i></a>
						
						
						<div id="pro<?php echo $x ?>" class="collapse panel-collapse">
							<br>
							
							<form action="">
							<div class="input-group" style="padding-bottom: 10px">
								<span class="input-group-addon" id="basic-addon1">Nome</span>
								<input type="text" class="form-control" placeholder="<?php echo $yy['nome_plano'] ?>" aria-describedby="basic-addon1">
								</div>

								<div class="input-group" style="padding-bottom: 10px">
								<span class="input-group-addon" id="basic-addon2">Valor</span>
								<input type="text" class="form-control" placeholder="<?php echo $yy['valor'] ?>" aria-describedby="basic-addon2">
							</div>
							<input type="submit" class="btn btn-primary" value="Atualizar">

							</form>			
						
						</div>
						
					</li>
				
				<?php
				$x++;	
			}
									
			
		} else {
			
			echo'
					
					<li class="list-group-item">
						<a  data-toggle="collapse" style="text-transform:uppercase">NENHUM REGISTRO ENCONTRADO</a>				
						
						
					</li>
				';
			
		}
	
	?>
	

</ul>                           
      
</div>

<center>
<?php
	  	if($x>0){
			echo '<nav aria-label="Page navigation">
					  <ul class="pagination pagination" style="border:0;">';
			for($i = 1; $i < $numPaginas + 1; $i++) {
				
				if($pagina==$i){
					echo '<li class="page-item active"><a class="page-link" href="news.php?pagina='.$i.'">'.$i.'</a></li>';
				} else {
					echo '<li class="page-item"><a class="page-link" href="news.php?pagina='.$i.'">'.$i.'</a></li>';	
				}
				
        		
    		}	
			echo '</ul>
				</nav>';
		}
?> 
</center>


		
     
                     


<?php include("includes/rodape.php"); ?>