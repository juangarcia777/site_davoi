<style>
#troca {
  text-transform: uppercase;
  color: #2d90e3;
  outline:none ;
  border: 0px;
}
.top-bar {
padding: 10px;
}

</style>

<!-- Wrap -->
<div id="wrap">

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">

      <!-- Social Icons -->


      <div class="container">
        <div class="col-sm-12">
          <div class="social hidden-md hidden-lg" style="float: none;" >
            <a  href="https://pt-br.facebook.com/DavoiProvedordeInternet/"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/Davoi9"><i class="fa fa-twitter"></i></a>
          </div>

        <div class="social hidden-sm hidden-xs" >
        <a href="https://pt-br.facebook.com/DavoiProvedordeInternet/"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/Davoi9"><i class="fa fa-twitter"></i></a>
      </div>

      <!-- Pull Right -->
      <div class="pull-right hidden-xs hidden-sm social">
        <ul class="login-info">

          <li> <a  href="mailto:contato@davoi.com.br">Contato@davoi.com.br </a> </li>

          <li> <a  href="http://boleto.davoi.com.br/">Área do Cliente </a> </li>

          <li> <a  href="https://davoi.speedtestcustom.com/">Teste de Conexão</a> </li>

          <li><form method="POST"> 
          <select class="form-control" id="troca" name="cidade" onchange="trocaCidade()">
          <?php
            $sql = $db->select("SELECT * FROM cidades ");
            while($row = $db->expand($sql)){
            ?>
            <option <?php if($row['id'] === $_GET['cidade']){echo 'selected';} ?> value="<?php echo $row['id'] ?>"><span id="opcao_city"><?php echo $row['nome'] ?></span></option>
            <?php } ?>

          </select></form></li>

        </ul>
      </div>

       </div>
      </div>



    </div>
  </div>

  <!-- header -->
  <header>
    <div class="sticky">
      <div class="container">

        <!-- Logo -->
        <div class="logo"> <a href="home.php"><img class="img-responsive" src="images/logo-davoi(Editado).png" alt="" ></a> </div>
        <!-- Navigation -->
        <nav class="navbar">
          <!-- NAV -->
          <ul class="nav ownmenu" >
            <li class="active"> <a href="<?php echo PATH; ?>inicio/" > A Davoi </a></li>
                <li> <a href="<?php echo PATH; ?>planos/"> Planos de Internet </a></li>
                <li> <a href="<?php echo PATH; ?>wifi/"> Super Wifi </a></li>
            <li> <a data-toggle="modal" data-target="#exampleModal"> Cobertura </a></li>
            <li> <a href="<?php echo PATH; ?>rh/" > Trabalhe Conosco </a></li>
            <li> <a href="<?php echo PATH; ?>parceiros/" > Parcerias </a></li>
            <li> <a href="<?php echo PATH; ?>dicas/" > Dicas </a></li>
            <li> <a href="<?php echo PATH; ?>contato/" onMouseOver="mostraDiv()" > Contato </a>
            

            <?php if(basename($_SERVER['PHP_SELF']) == 'all_contact.php'): ?>
            <ul class="dropdown">
            
                <li> <a href="inicio/" > Chat Online </a></li>
                <li> <a href="#contato"> Contato </a></li>
                <li> <a href="#contato2"> Escritorios </a></li>
                <li> <a href="#emails"> E-mails </a></li>
                <li> <a href="#contato2"> Telefones </a></li>
              
              </ul>

            <?php else: ?>

              <ul class="dropdown">
            
            <li> <a href="inicio/" > Chat Online </a></li>
            <li> <a href="contato/"> Contato </a></li>
            <li> <a href="contato/"> Escritorios </a></li>
            <li> <a href="contato/"> E-mails </a></li>
            <li> <a href="contato/"> Telefones </a></li>
          
          </ul>

            <?php endif; ?>


            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
