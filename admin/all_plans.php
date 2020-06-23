<?php include("includes/topo.php"); ?>

<div class="alert alert-success" id="sucesso_user" style="display:none">
  <strong>Sucesso!</strong> Informações salvas/alteradas com sucesso.
</div>


<?php

$x=0;
$db = new DB();


//FAZ A INSERÇAO NO BANCO DE DADOS
if(isset($_GET['action']) && $_GET['action']==1){


		$sel = $db->select("INSERT INTO planos (nome_plano,valor,id_cidade,taxa_inst,valor_inst,tipo_plano,download, upload, instalacao, desc_boleto)
    VALUES ('$nome_plano','$valor_campo', '$id_cidade','$instalacao','$valor_inst','$tipo_plano','$download', '$upload', '$instalacao', '$desc_boleto' )");
		echo '<script>$("#sucesso_user").show();</script>';


//FAZ A PESQUISA PARA ALTERAÇAO NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==2){

	$x=1;

	$sel = $db->select("SELECT * FROM planos WHERE id='$id' LIMIT 1");
	$ln = $db->expand($sel);

	$nome_plano = $ln['nome_plano'];
	$valor = $ln['valor'];
	$id_cidade = $ln['id_cidade'];
   $descricao = $ln['descricao'];
   $taxa = $ln['taxa_inst'];
   $valor_inst = $ln['valor_inst'];
   $download = $ln['download'];
   $upload = $ln['upload'];
   $instalacao = $ln['instalacao'];
   $desc_boleto= $ln['desc_boleto'];


//FAZ A exclusao NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==3){

	$sel = $db->select("DELETE FROM planos WHERE id='$id' LIMIT 1");
	echo '<script>$("#sucesso_user").show();</script>';


//FAZ A ALTERAÇAO NO BANCO DE DADOS
} else if(isset($_GET['action']) && $_GET['action']==4){
			$sel = $db->select("UPDATE planos SET nome_plano='$nome_plano', valor='$valor_campo', id_cidade= '$id_cidade',taxa_inst='$instalacao',valor_inst='$valor_inst',tipo_plano= '$tipo_plano',download='$download', upload='$upload', instalacao='$instalacao', desc_boleto='$desc_boleto' WHERE id=$id LIMIT 1");

		echo '<script>$("#sucesso_user").show();</script>';


}
?>

<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Cadastro de Planos em Cidades</h4></h4>
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
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" name="nome_plano" required="required"
                 value="<?php if($x==1){ echo $nome_plano;} ?>"/>
           </div>
        </div>
        <div class="col-md-6">
           <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" name="valor_campo" required="required" value="<?php if($x==1){ echo $valor;} ?>"/>
           </div>
        </div>
        <div class="col-md-12">
           <div class="form-group">
               <select class="form-control" name="id_cidade" id="">
               <?php
                $sel = $db->select("SELECT * FROM cidades ORDER BY id ");
                if($db->rows($sel)){
                    $x=1;
                    while($yy = $db->expand($sel)){
                        ?>
                   <option <?php if($yy['id'] == $id_cidade){echo 'selected';} ?> value="<?php echo $yy['id'] ?>"><?php echo strtoupper($yy['nome']); ?></option>
                    <?php } } ?>
               </select>
           </div>
        </div><br>

        <div class="col-md-6">
          <label for="">Taxa de Instalação</label>
           <div class="form-group">
               <select class="form-control" name="instalacao" id="">
                 <option value="">--Selecione</option>
                 <option value="SIM">SIM</option>
                  <option value="NÃO">NÃO</option>
               </select>
           </div>
        </div>

        <div class="col-md-6">
          <label for="">Valor Instalação</label>
           <div class="form-group">
               <input type="text" name="valor_inst" class="form-control" value="<?php if($x==1){ echo $valor_inst;} ?>">
           </div>
        </div>

        <div class="col-md-12">
          <label for="">Tipo Plano</label>
           <div class="form-group">
               <select class="form-control" name="tipo_plano" required>
                 <option value="" >--Selecione</option>
                 <option value="RESIDENCIAL">RESIDENCIAL</option>
                  <option value="EMPRESARIAL">EMPRESARIAL</option>
               </select>
           </div>
        </div>

		<div class="col-md-3">
           <div class="form-group">
               <label for="valor">Download</label> - (Digite Somente números)
               <input type="text" class="form-control" name="download" required="required" value="<?php if($x==1){ echo $download;} ?>"/>
           </div>
      </div>

      <div class="col-md-3">
           <div class="form-group">
               <label for="valor">Upload</label> - (Digite Somente números)
               <input type="text" class="form-control" name="upload" required="required" value="<?php if($x==1){ echo $upload;} ?>"/>
           </div>
      </div>

      <div class="col-md-3">
           <div class="form-group">
               <label for="valor">Texto Instalação</label>
               <input type="text" style="text-transform:uppercase" class="form-control" name="instalacao" required="required" value="<?php if($x==1){ echo $instalacao;} ?>"/>
           </div>
      </div>

      <div class="col-md-3">
           <div class="form-group">
               <label for="valor">Descrição Boleto</label>
               <input type="text" style="text-transform:uppercase" class="form-control" name="desc_boleto" required="required" value="<?php if($x==1){ echo $desc_boleto;} ?>"/>
           </div>
      </div>


        <hr>

        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">SALVAR</button>
        </div>
        </form>
        <div class="col-md-12">&nbsp;</div>

   </div>

</div>

</div>



<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="panel-title"><h4>Planos Cadastrados- Clique para descrição</h4></h4>
	</div>


<ul class="list-group">

	<?php

		$sel = $db->select("SELECT *,(select cidades.nome from cidades where cidades.id = planos.id_cidade) as c FROM planos ORDER BY id DESC");
		if($db->rows($sel)){
			$x=1;
			while($yy = $db->expand($sel)){

				echo'

					<li class="list-group-item">
						<a  role="button" data-toggle="collapse" href="#collapseExample'.$yy['id'].'" aria-expanded="false" aria-controls="collapseExample">'.$yy['nome_plano'].' / '.$yy['valor'].' / '.$yy['c'].'</a>
						<div class="collapse" id="collapseExample'.$yy['id'].'">
							<div class="well">
								'.$yy['descricao'].'TAXA DE INSTALAÇÃO :'.$yy{'taxa_inst'}.'<br>
                 VALOR DA INSTALAÇÃO : '.$yy['valor_inst'].'<br>
                 TIPO DE PLANO : '.$yy['tipo_plano'].'
							</div>
							</div>
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






<?php include("includes/editor_texto.php"); ?>
<?php include("includes/rodape.php"); ?>
