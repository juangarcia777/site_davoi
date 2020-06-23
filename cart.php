<?php require 'includes/topo.php' ?>
<?php require 'includes/menu.php' ?>
<link rel="stylesheet" href="css/aux_cart.css">


<?php
if (!empty($_POST['plan'])) {
  $nome= $_POST['nome'];
  $plan= $_POST['plan'];
  $price= $_POST['price'];
  $type= $_POST['type'];
  $tel= $_POST['tel'];
  $endereco= $_POST['endereco'];
  $cidade= $_POST['cidade'];

  $email= $_POST['email'];
  $type= $_POST['tipo_plano'];

  $db= new DB();
  $sel= $db->select("SELECT * FROM planos WHERE nome_plano= '$plan'");
  if($y= $db->expand($sel)){
    $taxa= $y['valor_inst'];
}
}

?>
<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
<input type="hidden" name="tipo_plano" id="tipo_plano" value="<?php echo $type; ?>">
<div class="bodyCard">
    <div class="container">
        <div class="row" id="cardTopo">
            <div class="col-md-12" id="boxTopo">
                <div class="col-sm-3 d-flex justify-content-center" height="100%">
                    <a href="finalizando/" class="btn btn-primary btn-outline">Alterar</a>
                </div>
                <div class="col-sm-6" >
                    <div class="col-sm-12"><b>Endereço da Assinatura:</b></div>
                    <div class="col-sm-12" id="rua"><?php echo $endereco ?></div>
                    <div class="col-sm-12" id="cidade"><?php echo $cidade ?>- SP</div>
                    </div>
                    <div class="col-sm-3">
                      <input type="hidden" id="nome" value="<?php echo $nome; ?>" >
                      <input type="hidden" id="tel" value="<?php echo $tel; ?>" >
                    <div class="col-sm-12"><b>Acesso:</b></div>
                    <div class="col-sm-12"><b>Não sou cliente</b></div>
                    </div>
            </div>
        </div>



    <div class="row">
        <div class="col-sm-7">


            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <h3><i class="fa fa-wifi" style="color: #1b669d" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;PLANOS DE INTERNET</h3>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <div class="row">
            <div class="col-sm-12 text-center" id="planoSelec">
                <div class="col-sm-4" style="font-size: 30px;color: #FFF;font-weight: 600"><?php echo $plan ?></div>
                <div class="col-sm-5" style="font-size: 25px;color: #FFF;font-weight: 700">R$ <bold><?php echo $price ?></bold> /mês</div>
                <div class="col-sm-3"><a href="planos/"  class="btn btn-primary btn-block">ALTERAR</a></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12 text-left text-danger" id="instalacao">
              <div class="col-sm-6  text-danger"  style="font-size: 16px;font-weight: 600"><bold id="taxa">TAXA DE INSTALAÇÃO</bold></div>
                <div class="col-sm-6 text-danger"  style="font-size: 16px;font-weight: 600">
                  <bold id="inst_value"><?php if(!empty($taxa)){echo $taxa;}else{echo "Grátis";} ?></bold>
                </div>
            </div>

        </div>

         <div class="row">
            <div class="col-sm-12 " id="planoAdic">
                <div class="col-sm-5">
                  <div class="col-sm-12" id="planoAdic1"><i class="fa fa-server"></i>
                  Tp-link TL-WR940</div>
                  <div class="col-sm-12 text-center">Super roteador para uma melhor cobertura</div>
                </div>
                <div class="col-sm-4" style="font-size: 20px;color:#1b669d ;font-weight: 700">R$ <bold>19,90</bold> /mês</div>
                <div class="col-sm-3"><a id="addRot" class="btn btn-primary"><i class="fa fa-plus"></i></a></div>
            </div>
        </div>



      </div>
    </div>
  </div>

</div>
</div>

<div class="col-sm-5 position-sticky"  style="padding-bottom: 100px;">
    <div class="col-sm-12 d-flex justify-content-center text-center" id="cardResumo">
        <h4><b>RESUMO DO PEDIDO</b></h4>
    </div>
<form  method="post" id="formContato" >
    <div class="col-sm-12" style="background-color: #FFF;padding: 5px;" id="planos_set">
        <div class="col-sm-5">
          <p><i class="fa fa-wifi" aria-hidden="true"></i><br>&nbsp;&nbsp;&nbsp;<b id="planEsc"><?php echo $plan ?></b></p>
        </div>
        <div class="col-sm-7" style="background-color: rgb(238, 234, 234)">
            <div class="col-sm-2 align-items-center text-center"><p id="cifra">R$</p></div>
            <div class="col-sm-8 d-flex justify-content-center text-right">
              <div class="col-6 padding-top-10"><strong data-preco="99.90" id="plan"><?php echo $price ?></strong></div>
            </div>
            <div class="col-sm-2 d-flex justify-content-end"><p><a><i class="fa fa-times-circle"></i></a></p></div>
        </div>
    </div>


    <div class="col-sm-12 remove" style="background-color: #FFF;padding: 5px;" id="roteadorPlan">
        <div class="col-sm-5">
          <p><i class="fa fa-server" aria-hidden="true"></i><br>&nbsp;&nbsp;&nbsp;<b id="planRoteador">TP-LINK</b></p>
        </div>
        <div class="col-sm-7" style="background-color: rgb(238, 234, 234)">
            <div class="col-sm-2 align-items-center text-center"><p id="cifra">R$</p></div>
            <div class="col-sm-8 d-flex justify-content-center text-right">
              <div class="col-6 padding-top-10"><strong data-preco="19.90" id="priceRoteador">19.90&nbsp;&nbsp;</strong></div>
            </div>
            <div class="col-sm-2 d-flex justify-content-end"><p><a ><i class="fa fa-times-circle"></i></a></p></div>
        </div>
    </div>


     <div class="col-sm-12" style="background-color: #FFF;padding: 5px;" >

    </div>

    <div class="col-sm-12" style="background-color: #FFF;padding: 5px;" >
        <div class="col-sm-5 text-right" id="totalText" style="background-color: rgb(238, 234, 234)">
          <p >&nbsp;&nbsp;&nbsp;<b>TOTAL</b></p>
        </div>
        <div class="col-sm-7 text-right" >
            <p style="font-weight: 900" id="total"></p>

        </div>
    </div>

    <div class="col-sm-12 text-center" id="ultimoCard">
        <a  class="btn btn-primary" id="btn" name="btn">Finalizar Contratação</a>
    </div>
</form>

</div>

    </div>
</div>
</div>

<?php require 'includes/footer.php' ?>
<script type="text/javascript" src="js/aux_cart.js"></script>
