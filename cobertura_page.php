<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>
<?php require 'includes/banner.php'; ?>


<style type="text/css">
  article h4 {
    background-color: #2d90e3;
    color: #FFF;
    border-radius: 5px 5px 0px 0px;
  }
</style>

<style type="text/css">
  article h4 {
    background-color: #2d90e3;
    color: #FFF;
    border-radius: 5px 5px 0px 0px;
  }
  .col-sm-6 {
    text-align: center;
    background-color: #2d90e3;
    line-height: 40px;
    margin-bottom: 40px;
    border-radius: 10px;
    padding: 10px;
}
#link {
    color: white;
    font-size: 20px
}
#link:hover{
    color: yellow;
}

</style>

<style type="text/css">
  article h4 {
    background-color: #2d90e3;
    color: #FFF;
    border-radius: 5px 5px 0px 0px;
  }
  #plan {
    text-align: center;
    background-color: #2d90e3;
    line-height: 40px;
    margin-bottom: 40px;
    border-radius: 10px;
    padding: 10px;
}
#link {
    color: white;
    font-size: 20px
}
#link:hover{
    color: yellow;
}
#desc {
  padding: 25px;
  text-align: -webkit-match-parent;
}
#download {
  font-size: 25px;
  color: #2d90e3;
}
.col-sm-8 {
  text-transform: uppercase;
}

</style>

    <!-- Choose Services -->
    <section class="padding-top-100 padding-bottom-50 ">
      <div class="container">



        <!-- Tittle -->
        <div class="heading">
          <h2>Nossos Planos</h2>

        </div>

        <div class="row">
            <a id="link" onclick="residencial()" ><div class="col-sm-12" id="plan">
                PLANOS RESIDENCIAIS
            </div></a> 
        </div>

        <!-- Choose Plan -->
        <div class="choose-plan" id="residencial">
          <ul class="row">

          <?php
              $sql = $db->select("SELECT * FROM planos WHERE id_cidade=$cidade AND tipo_plano= 'RESIDENCIAL'");
                while($row = $db->expand($sql)){
              ?>
            <!-- Bronze -->
            <li class="col-md-4" style="padding-bottom:15px;">
              <article>
                <h4><?php echo $row['nome_plano'] ?></h4>
                <!-- Price -->
                <div class="price-head"> R$ <?php echo $row['valor']; ?> <span>/mês</span> </div>
                <!-- Price -->

                <!------ LINHA -------->

                <?php if($row['download'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-download"></i>
                </div>
                <div class="col-sm-8 text-left">DOWNLOAD: <?php echo $row['download'] ?> MB</div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['upload'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-upload"></i>
                </div>
                <div class="col-sm-8 text-left">UPLOAD: <?php echo $row['upload'] ?> MB</div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['instalacao'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-cogs"></i>
                </div>
                <div class="col-sm-8 text-left"> <?php echo $row['instalacao'] ?></div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['desc_boleto'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-file"></i>
                </div>
                <div class="col-sm-8 text-left"><?php echo $row['desc_boleto'] ?></div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <!-- Choose -->

                <a href="finalizando/<?php echo $row['tipo_plano'] ?>/<?php echo $row['nome_plano']?>/<?php echo $row['valor']?>" class="btn">Selecionar Plano</a> </article>

            </li>
                <?php } ?>

          </ul>
        </div>

        <br><br>


        <?php
        $sql = $db->select("SELECT * FROM planos WHERE id_cidade= $cidade AND tipo_plano='EMPRESARIAL'");
        if($db->rows($sql)) {
        ?>

        <div class="row">

            <a  id="link" onclick="empresarial()" ><div class="col-sm-12" id="plan">
                PLANOS EMPRESARIAIS
            </div></a>


        </div>

        <!-- Choose Plan -->
        <div class="choose-plan" id="residencial">
          <ul class="row">

          <?php
              $sql = $db->select("SELECT * FROM planos WHERE id_cidade= $cidade AND tipo_plano= 'EMPRESARIAL'");
                while($row = $db->expand($sql)){
              ?>
            <!-- Bronze -->
            <li class="col-md-4" style="padding-bottom:15px;">
              <article>
                <h4><?php echo $row['nome_plano'] ?></h4>
                <!-- Price -->
                <div class="price-head"> R$ <?php echo $row['valor']; ?> <span>/mês</span> </div>
                <!-- Price -->

                <!------ LINHA -------->

                <?php if($row['download'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-download"></i>
                </div>
                <div class="col-sm-8 text-left">DOWNLOAD: <?php echo $row['download'] ?> MB</div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['upload'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-upload"></i>
                </div>
                <div class="col-sm-8 text-left">UPLOAD: <?php echo $row['upload'] ?> MB</div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['instalacao'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-cogs"></i>
                </div>
                <div class="col-sm-8 text-left"> <?php echo $row['instalacao'] ?></div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <?php if($row['desc_boleto'] != ''): ?>
                <div class="row" id="desc">
                <div class="col-sm-4 text-right">
                <i id="download" class="fa fa-file"></i>
                </div>
                <div class="col-sm-8 text-left"><?php echo $row['desc_boleto'] ?></div>
                </div>
                <?php endif; ?>

                <!------------------------------------------>

                <!-- Choose -->

                <a href="finalizando/<?php echo $row['tipo_plano'] ?>/<?php echo $row['nome_plano']?>/<?php echo $row['valor']?>" class="btn">Selecionar Plano</a> </article>

            </li>
                <?php } ?>

          </ul>
        </div>

      <?php } ?>


      </div>
    </section>


    <script type="text/javascript">
  $('.x').on('click',function(){
    $('.x').hide();
    $('.pop-up-dicas').hide();
  });

  function residencial() {
    $('#residencial').show();
    $('#empresarial').hide();
  }

  function empresarial() {
    $('#residencial').hide();
    $('#empresarial').show();
  }

</script>

<?php require 'includes/banner2.php'; ?>
<br/>
<?php require 'includes/cards.php'; ?>
<?php require 'includes/footer.php'; ?>
<?php require 'includes/aux_search.php'; ?>
