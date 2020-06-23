<?php
if (!empty($_POST['nome'])) {

  $arquivo= $_FILES['curriculo'];
  move_uploaded_file($arquivo['tmp_name'], 'curriculos/'.$arquivo['name']);
  
  $nameArq= $arquivo['name'];
  $nome= $_POST['nome'];
  $area= $_POST['area'];

  $db= new DB();

  $insert= $db->select("INSERT INTO curriculos (urli,nome,area) VALUES ('$nameArq','$nome','$area')");
  if ($insert) {

  echo "<div class='alert alert-info'>Arquivo de <strong>&nbsp;".$_POST['nome']."&nbsp;</strong> enviado com sucesso.</div>";

  } else {
    echo "Falha ao enviar arquivo";
  }


}

?>
<style type="text/css">
  @media screen and (max-width:400px) {
    .col-md-12.hidden-lg.hidden-md {
    margin-top: 200px;
    }
    .col-md-6 {
    padding-bottom: 80px;
    }
    footer .col-md-6 {
    padding-bottom: 0;
    }
    span {
    color: white;
    font-size: 25px;
    padding-bottom: -50px;
    }
  }
  
</style>

<section class="contact-us padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row"> 
          
          <!-- Contact Form -->
          <div class="col-md-6">
            <h3>Trabalhe Conosco</h3>
            <div class="contact-from"> 
              
              <!-- Form -->
              <form method="POST" id="form" enctype="multipart/form-data">
                <ul>
                  <li>
                    <label> Nome Completo
                      <input type="text" name="nome" class="form-control" >
                    </label>
                  </li>
                  <li>
                    <label> Telefone
                      <input type="text"  class="form-control">
                    </label>
                  </li>
                  <li>
                    <label> E-mail
                      <input type="email" class="form-control">
                    </label>
                  </li>
                  <li>
                    <label> Área Desejada
                      <select class="form-control" name="area">
                        <option value="Outros">- Selecione -</option>
                        <option value="Serviços Gerais">- Serviços Gerais -</option>
                        <option value="Manutenção">- Manutenção -</option>
                        <option value="Técnico">- Técnico -</option>
                        <option value="Engenharia">- Engenharia -</option>
                        <option value="Outros">- Outros -</option>
                      </select>
                    </label>
                  </li>
                  <li>
                    <label> Currriculo
                      <input type="file"  name="curriculo" >
                    </label>
                  </li>

                  <li>
                    <label> Verificador : <b id="soma"></b>
                      <input type="text" id="campo" class="form-control" required><br>
                    </label>
                  </li>

                  <li class="text-center"  id="input">
                    <button  class="btn btn-block" >Enviar <i class="fa fa-envelope-o"></i></button>
                  </li>

                 

                </ul>
              </form>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <!-- Contact Info -->
          <div class="col-md-4">
            <div class="contat-info">
              <h3>sobre o time davoi</h3>
              <?php
              $sql = $db->select("SELECT * FROM desc_trabalhe_conosco ORDER BY id ");
              while($row = $db->expand($sql)){
		          ?>
              <p><?php echo $row['descricao'] ?></p>
		        <?php } ?>

            </div>
          </div>
        </div>
</div>
    </section>





   