
  <style type="text/css">
    @media screen and (max-width: 400px) {
        .col-md-6 {
            padding-bottom: 100px;
        }
        h3 {
            text-align: center;
        }
        span {
            font-size: 30px;
        }
    }
  </style>


  <!-- Content -->
  <div id="content" style="background-color: #FFF">

    <!-- Contact Us -->
    <section class="contact-us padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="row">

          <!-- Contact Form -->
          <div class="col-sm-12">
            <h3>Dados Pessoais<br></h3>
            <div class="contact-from">

              <!-- Form -->
              <form action="cart/" method="POST">
                <ul>
                  <li>
                    <label> Nome
                      <input type="text" name="nome" id="formContact1" class="form-control" >
                    </label>
                  </li>
                  <li>
                    <label> Telefone
                      <input type="text" name="tel" class="form-control">
                    </label>
                  </li>
                  <li>
                    <label> Endereço
                      <input type="text" name="endereco" class="form-control">
                    </label>
                  </li>
                  <li>
                    <label> Cidade
                    <select class="form-control" name="cidade" id="validationDefault04" required>
                    <?php
                        $sel = $db->select("SELECT * FROM cidades ORDER BY id ");
                        if($db->rows($sel)){
                            $x=1;
                            while($yy = $db->expand($sel)){
                                ?>
                   <option value="<?php echo $yy['nome'] ?>"><?php echo strtoupper($yy['nome']) ?></option>
                    <?php } } ?>
            </select>
                    </label>
                  </li>
                  <li>
                    <label> email
                      <input type="email" name="email" class="form-control" required>
                    </label>
                  </li>
                
                  <li>
                    <label> Verificador : <b id="soma"></b>
                      <input type="text" id="campo" class="form-control" required><br>
                      <a style="padding: 5px; color: #fff; background-color: cornflowerblue;margin-top:10px" onclick="confere()">Confere</a>
                    </label>
                  </li>


                  <input type="hidden" class="form-control" name="plan" value="<?php echo $_GET['plan']; ?>">
                  <input type="hidden" class="form-control" name="price" value="<?php echo $_GET['price']; ?>">
                  <input type="hidden" class="form-control" name="tipo_plano" value="<?php echo $_GET['type']; ?>">
                  <li class="text-center" id="input" style="display:none">
                    <button type="submit" class="btn" >Avançar <i class="fa fa-caret-right"></i></button>
                  </li>
                </ul>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- MAP -->
    <section class="map-block">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.5351053858567!2d-48.7918227850399!3d-22.596484585170455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c0b3f80113da9b%3A0xddfea251f3219c11!2sDavoi!5e0!3m2!1spt-BR!2sbr!4v1582894132722!5m2!1spt-BR!2sbr"
       width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
  </div>

 