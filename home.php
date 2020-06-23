<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>
<?php require 'includes/banner.php'; ?>


<style type="text/css">
.pop-up-dicas {
    background-position: center;
    background-size: cover;
    width: 250px;
    position: fixed;
    z-index: 999;
    bottom: 20px;
    left: 20px;
    height: 313px;
}
.x{
    position: fixed;
    z-index: 9999;
    bottom: 333px;
    left: 245px;
    font-size: 17px;
    color: #fff;
    background: #ccc;
    padding: 4px 8px;
    cursor: pointer;
}

@media screen and (max-width:400px) {
  .pop-up-dicas {
    display:none;
  }
  .x{
    display:none;
  }
  footer span {
    font-size: 25px;
  }
}

</style>


  <?php
  $cidade= $_GET['cidade'];
  if(!empty($cidade)) {
    $_SESSION['cidade']= $cidade;
    print_r($cidade);
    } else {
      $cidade= $_SESSION['cidade'];
      print_r($cidade);
    }
  
  $sql = $db->select("SELECT * FROM pop_up WHERE cidade= '$cidade'");
  while($row = $db->expand($sql)){
  ?>

<a href="<?php echo $row['link'] ?>">
<div class="pop-up-dicas" style=" background-image: url('images/<?php echo $row['urli'] ?>'); "></div>
</a>

<div class="x">x</div>

<?php } ?>


  <!-- BOXES -->
  <section class="boxes-intro">
    <div class="container">
      <ul>

        <!-- Slide 1 -->
        <li>
          <div class="position-center-center"> <i class="fa fa-laptop"></i>
            <h5>Downloads + Rápidos</h5>
          </div>
        </li>

        <!-- Slide 1 -->
        <li>
          <div class="position-center-center"> <i class="fa fa-rocket"></i>
            <h5>Ultra Velocidade</h5>
          </div>
        </li>

        <!-- Slide 1 -->
        <li>
          <div class="position-center-center"> <i class="fa fa-gamepad"></i>
            <h5>Jogue com + velocidade</h5>
          </div>
        </li>

        <!-- Web Hosting -->
        <li>
          <div class="position-center-center"> <i class="fa fa-wifi"></i>
            <h5>Conexões Simultâneas</h5>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Content -->
  <div id="content">


   <?php require 'includes/plans.php'; ?>

   <?php require 'includes/banner2.php'; ?>

   <?php require 'includes/cards.php'; ?>
  </div>

  <div class="pop-up-dicas">
</div>

  <!-- FOOTER -->
  <?php require 'includes/footer.php'; ?>
<script type="text/javascript" src="https://davoi-isp.mktzap.com.br/webchat/2mxu4rk2behlo4m6vtzq?open=true"></script>
  

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
