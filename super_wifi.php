<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>

<?php

echo $_SESSION['cidade'];

?>

<div class="container">
<div class="row" id="areaRoteador">
	<div class="col-md-6">
		<h4>Super Roteador para mais velocidade.</h4><br/>
		
		<?php
              $sql = $db->select("SELECT * FROM roteador ORDER BY id ");
              while($row = $db->expand($sql)){
		   ?>
		   
		<p> <i class="fa fa-check"></i><?php echo $row['carac_roteador'] ?></p><br/>
			
		<?php } ?>
	</div>

	
	<div class="col-md-6">
	<?php
              $sql = $db->select("SELECT * FROM imagens_page_wifi ORDER BY id ");
              while($row = $db->expand($sql)){
		   ?>
		<img src="images/<?php echo $row['img_roteador'] ?>" class="img-responsive">
	<?php } ?>

	</div>
	
			 
</div>

	<div class= "row text-center" id="areaRoteador1">
		<h4>Controle na Palma da Sua Mão</h4>
		<?php
              $sql = $db->select("SELECT * FROM roteador ORDER BY id ");
              while($row = $db->expand($sql)){
		   ?>
		<p> <i class="fa fa-check"></i><?php echo $row['carac_app'] ?>.</p><br/>
		<?php } ?>
		<?php
              $sql = $db->select("SELECT * FROM imagens_page_wifi ORDER BY id ");
              while($row = $db->expand($sql)){
		   ?>
		<img class="img-responsive" src="images/<?php echo $row['img_app'] ?>">
		<?php } ?>
	</div>
	<br/>
</div>

<div class="container" id="areaRoteador2">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 text-center">
				<h2>Contrate agora, ja e assinante Davoi ?</h2>
				<a class="btn btn-primary" href="planos/">Não</a> <a class="btn btn-primary" href="contato/">Sim</a>
			</div>
			<div class="col-sm-2"></div>

		</div>
</div>
<?php require 'includes/footer.php'; ?>