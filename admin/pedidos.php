<?php include("includes/topo.php"); ?>
<style type="text/css">
	.col-sm-6 {
    padding: 30px;
}
select.form-control {
    font-weight: 900;
}
#aberto {
    background-color: yellow;
    width: 100px;
    padding: 5px;
    color: white;
}
#fechado {
    background-color: green;
    width: 100px;
    padding: 5px;
    color: white;
}
#cancelado {
    background-color: red;
    width: 100px;
    padding: 5px;
    color: white;
}
</style>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>


<?php

$x=0;
$db = new DB();

if (!empty($_POST['status'])) {

	$status= $_POST['status'];
	$id= $_POST['id'];

	$update = $db->select("UPDATE pedidos SET status_pedido='$status' WHERE id='$id' LIMIT 1");

	echo '<script>$("#sucesso_user").show();</script>';

}


//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){


		$sel = $db->select("INSERT INTO emails (descricao) VALUES ('$texto')");
		echo '<script>$("#sucesso_user").show();</script>';


//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==2){

	$x=1;

	$sel = $db->select("SELECT * FROM emails WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);

	$texto = $ln['descricao'];


//FAZ A exclusao NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==3){

	$sel = $db->select("DELETE FROM emails WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';


//FAZ A ALTERAÇAO NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==4){

			$sel = $db->select("UPDATE emails SET descricao='$texto' WHERE id='$id' LIMIT 1");

		echo '<script>$("#sucesso_user").show();</script>';

}
?>




<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Gerenciamento de pedidos</h4></h4>
	</div>


</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" onclick="abertos()">PEDIDOS EM ABERTO</a></li>
    <li class="page-item"><a class="page-link" onclick="fechados()">PEDIDOS FECHADOS</a></li>
    <li class="page-item"><a class="page-link" onclick="cancelados()">PEDIDOS CANCELADOS</a></li>
  </ul>
</nav>


<ul class="list-group" id="abertos" style="display:none">

	<?php
		$hoje=date("Y-m-d");
		$db = new DB();
		$sel = $db->select("SELECT * FROM pedidos WHERE status_pedido='EM ABERTO' ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;
			while($yy = $db->expand($sel)){

				if($yy['status_pedido']=="EM ABERTO") {
					$css= "aberto";
				} if ($yy['status_pedido']=="FECHADO") {
					$css= "fechado";
				}
				if($yy['status_pedido']=="CANCELADO") {
					$css= "cancelado";
				}

				?>
				<div class="row" style="border-bottom: 3px solid blue;">
					<div class="col-sm-6">
						<strong class="text text-danger"><?php echo strtoupper($yy['nome']) ?></strong><br>
						<b class="text text-primary">TELEFONE: </b><p><?php echo strtoupper($yy['tel']) ?></p>
						<b class="text text-primary">ENDEREÇO: </b><p><?php echo strtoupper($yy['endereco']) ?></p>
						<b class="text text-primary">CIDADE: </b><p><?php echo strtoupper($yy['cidade']) ?></p>
						<b class="text text-primary">PLANO: </b><p><?php echo strtoupper($yy['plano']) ?></p>
						<b class="text text-primary">ROTEADOR: </b><p><?php echo strtoupper($yy['roteador']) ?></p>
						<b class="text text-primary">TIPO DE PLANO: </b><p><?php echo $yy['tipo'] ?></p>
						<b class="text text-primary">STATUS: </b><p id="<?php echo $css ?>"><?php echo $yy['status_pedido'] ?></p>
					</div>
					<div class="col-sm-6 ">
						<h4 style="font-weight: 800">ATUALIZAR STATUS:</h4>
						<form method="POST" >
						<select class="form-control" style="margin-top: 20px" name="status">
							<option class="text text-success" value="EM ABERTO"><strong>EM ABERTO</strong></option>
							<option class="text text-primary" value="FECHADO"><strong>FECHADO</strong></option>
							<option class="text text-danger" value="CANCELADO"><strong>CANCELADO</strong></option>
						</select>
						<input type="hidden" value="<?php echo $yy['id'] ?>" name="id">
						<input type="submit" value="ATUALIZAR" class="btn btn-info btn-block" style="margin-top: 25px">
						</form>
					</div>
					<hr/>
				</div>

				<?php
				$x++;
			}
		}

	?>


</ul>

<ul class="list-group" id="fechados" style="display:none">

	<?php
		$hoje=date("Y-m-d");
		$db = new DB();
		$sel = $db->select("SELECT * FROM pedidos WHERE status_pedido='FECHADO' ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;
			while($yy = $db->expand($sel)){

				if($yy['status_pedido']=="EM ABERTO") {
					$css= "aberto";
				} if ($yy['status_pedido']=="FECHADO") {
					$css= "fechado";
				}
				if($yy['status_pedido']=="CANCELADO") {
					$css= "cancelado";
				}

				?>
				<div class="row" style="border-bottom: 3px solid blue;">
					<div class="col-sm-6">
						<strong class="text text-danger"><?php echo strtoupper($yy['nome']) ?></strong><br>
						<b class="text text-primary">TELEFONE: </b><p><?php echo strtoupper($yy['tel']) ?></p>
						<b class="text text-primary">ENDEREÇO: </b><p><?php echo strtoupper($yy['endereco']) ?></p>
						<b class="text text-primary">CIDADE: </b><p><?php echo strtoupper($yy['cidade']) ?></p>
						<b class="text text-primary">PLANO: </b><p><?php echo strtoupper($yy['plano']) ?></p>
						<b class="text text-primary">ROTEADOR: </b><p><?php echo strtoupper($yy['roteador']) ?></p>
						<b class="text text-primary">TIPO DE PLANO: </b><p><?php echo $yy['tipo'] ?></p>
						<b class="text text-primary">STATUS: </b><p id="<?php echo $css ?>"><?php echo $yy['status_pedido'] ?></p>
					</div>
					<div class="col-sm-6 ">
						<h4 style="font-weight: 800">ATUALIZAR STATUS:</h4>
						<form method="POST" >
						<select class="form-control" style="margin-top: 20px" name="status">
							<option class="text text-success" value="EM ABERTO"><strong>EM ABERTO</strong></option>
							<option class="text text-primary" value="FECHADO"><strong>FECHADO</strong></option>
							<option class="text text-danger" value="CANCELADO"><strong>CANCELADO</strong></option>
						</select>
						<input type="hidden" value="<?php echo $yy['id'] ?>" name="id">
						<input type="submit" value="ATUALIZAR" class="btn btn-info btn-block" style="margin-top: 25px">
						</form>
					</div>
					<hr/>
				</div>

				<?php
				$x++;
			}
		}

	?>


</ul>


<ul class="list-group" id="cancelados" style="display:none">

	<?php
		$hoje=date("Y-m-d");
		$db = new DB();
		$sel = $db->select("SELECT * FROM pedidos WHERE status_pedido='CANCELADO'  ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;
			while($yy = $db->expand($sel)){

				if($yy['status_pedido']=="EM ABERTO") {
					$css= "aberto";
				} if ($yy['status_pedido']=="FECHADO") {
					$css= "fechado";
				}
				if($yy['status_pedido']=="CANCELADO") {
					$css= "cancelado";
				}

				?>
				<div class="row" style="border-bottom: 3px solid blue;">
					<div class="col-sm-6">
						<strong class="text text-danger"><?php echo strtoupper($yy['nome']) ?></strong><br>
						<b class="text text-primary">TELEFONE: </b><p><?php echo strtoupper($yy['tel']) ?></p>
						<b class="text text-primary">ENDEREÇO: </b><p><?php echo strtoupper($yy['endereco']) ?></p>
						<b class="text text-primary">CIDADE: </b><p><?php echo strtoupper($yy['cidade']) ?></p>
						<b class="text text-primary">PLANO: </b><p><?php echo strtoupper($yy['plano']) ?></p>
						<b class="text text-primary">ROTEADOR: </b><p><?php echo strtoupper($yy['roteador']) ?></p>
						<b class="text text-primary">TIPO DE PLANO: </b><p><?php echo $yy['tipo'] ?></p>
						<b class="text text-primary">STATUS: </b><p id="<?php echo $css ?>"><?php echo $yy['status_pedido'] ?></p>
					</div>
					<div class="col-sm-6 ">
						<h4 style="font-weight: 800">ATUALIZAR STATUS:</h4>
						<form method="POST" >
						<select class="form-control" style="margin-top: 20px" name="status">
							<option class="text text-success" value="EM ABERTO"><strong>EM ABERTO</strong></option>
							<option class="text text-primary" value="FECHADO"><strong>FECHADO</strong></option>
							<option class="text text-danger" value="CANCELADO"><strong>CANCELADO</strong></option>
						</select>
						<input type="hidden" value="<?php echo $yy['id'] ?>" name="id">
						<input type="submit" value="ATUALIZAR" class="btn btn-info btn-block" style="margin-top: 25px">
						</form>
					</div>
					<hr/>
				</div>

				<?php
				$x++;
			}
		}

	?>


</ul>



<?php require("includes/editor_texto.php"); ?>
<?php include("includes/rodape.php"); ?>

<script type="text/javascript">
function abertos() {
	$('#abertos').show();
	$('#fechados').hide();
	$('#cancelados').hide();


}

function fechados() {
	$('#abertos').hide();
	$('#fechados').show();
	$('#cancelados').hide();
}

function cancelados() {
	$('#abertos').hide();
	$('#fechados').hide();
	$('#cancelados').show();
}
</script>
