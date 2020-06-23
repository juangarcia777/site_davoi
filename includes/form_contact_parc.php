
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
          <div class="col-md-6">

          <?php if($success == true): ?>
          <div class="alert alert-info">
            Mensagem Enviada Com Sucesso !
          </div>
          <?php endif; ?>

            <h3>Participe<br></h3>
            <div class="contact-from">

              <!-- Form -->
              <form id="form" action="envios/envia_mail_parc.php" method="POST" >
                <ul>

                  <li>
                    <label> Nome
                      <input type="text" name="nome" id="formContact1" class="form-control" required >
                    </label>
                  </li>

                  <li>
                    <label> Telefone
                      <input type="text" name="telefone" class="form-control" required>
                    </label>
                  </li>

                  <li>
                    <label> email
                      <input type="email" name="email" class="form-control" required>
                    </label>
                  </li>

                  <li>
                    <label> sua mensagem
                      <input class="form-control" name="msg"  value="Quero cadastrar meu estabelecimento !!"/>
                    </label>
                  </li>
                  
                  <li>
                    <label> Verificador : <b id="soma"></b>
                      <input type="text" id="campo" class="form-control" required><br>
                    </label>
                  </li>

                  <li class="text-center"  id="input">
                    <button type="submit" class="btn" >Enviar Mensagem <i class="fa fa-envelope-o"></i></button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <!-- Contact Info -->
          <div class="col-md-4">
            <div class="contat-info">
              <h3>Escritório <br>
                 <span class="timing hidden-sm hidden-xs">Seg-Sex: <br/>9am-18pm</span> </h3>

              <!-- Phone Info -->
              <ul>
                <li><i class="fa fa-phone"></i>
                  <h6>Telefone</h6>
                  <h3><span><a href="tel:1432634658" style="font-size: 28px">(14) 3263-4658</a></span></h3>
                </li>
                <li><i class="fa fa-map-marker"></i>
                  <h6>Endereço</h6>
                  <h3><p>Rua Bartolomeu Bueno da Silva, 383
                    Pq. Res. São José
                    </p></h3>
                </li>
                <li style="padding-bottom:30px"><i class="fa fa-home"></i>
                  <h6>Cidade</h6>
                  <h3><p>Lençóis Paulista – SP<p></h3>
                </li>
              </ul>

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
