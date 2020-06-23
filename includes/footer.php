<footer>
    <div class="container">

      <!-- FOOTER UP -->
      <div class="footer-up">
        <div class="row">

          <!-- Phone -->
          <div class="col-md-6 hidden-xs hidden-sm" > <img src="images/logo-davoi.png" alt="" >
          </div>

          <div class="col-md-12 hidden-lg hidden-md" style="text-align: center;"> <img src="images/logo-davoi.png" alt="" >
          </div>

          <div class="col-md-6" style="padding-top: 50px">
             <div class="media-left"> <i class="fa fa-phone" style="margin-left: 30px"></i> </div>
            <div class="media-body">
              <h5>Ligue para agente !</h5>
              <h3 style="color: #FFF"><span><a href="tel:143263-4658" style="color: #0167a1;">(14)3263-4658</a></span> </h3>
            </div>
          </div>

          <!-- NewsLwtter -->

          <!--<div class="col-md-6">

             NEWSLETTER
            <div class="newsletter text-right">
              <h6>Join Newsletter</h6>
              <form>
                <label>
                  <input type="search" placeholder="Your Email Address">
                </label>
                <button type="submit"><i class="fa fa-envelope-o"></i></button>
              </form>
            </div>
          </div>-->
        </div>
      </div>
      <div class="row">

        <!-- ABOUT -->
        <div class="col-md-6">
          <h6>Contato</h6>
          <ul class="personl-info">
            <li>
              <div class="media-left icons"> <i class="fa fa-home"></i> </div>
              <div class="media-body">
                <p>Rua Bartolomeu Bueno da Silva, 383
                  Pq. Res. São José<br>
                  Lençois Paulista -SP</p>
              </div>
            </li>
            <li>
              <div class="media-left icons"> <i class="fa fa-envelope-o"></i> </div>
              <div class="media-body"> <a href="mailto:contato@davoi.com.br">contato@davoi.com.br</a> </div>
            </li>
          </ul>
        </div>

        <!-- Our Services -->
        <div class="col-md-6">
          <h6>Serviços</h6>
          <ul class="service-link row">
            <li> <a href="home.php"><i class="fa fa-angle-right" aria-hidden="true"></i>A Davoi</a></li>
            <li> <a href="planos_internet.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Planos de Internet</a></li>
            <li> <a href="super_wifi.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Super Wifi</a> </li>
            <li> <a href="trabalhe_conosco.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Trabalhe Conosco</a></li>
            <li> <a href="dicas.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dicas</a> </li>
            <li> <a href="all_contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Contato</a> </li>
            <li> <a href="all_contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Formulário de Contato</a> </li>
          </ul>
        </div>
        <!--<div class="col-md-3">

           Social Icons
          <div class="social-icons">
            <h6>Find us elsewhere</h6>
            <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-google"></i></a>
            <h6 class="margin-top-30">accepted payments</h6>
            <img src="images/card-icons.png" alt=" "> </div>
        </div>-->
      </div>
    </div>
  </footer>
  <div class="rights">
    <p>Copyright 2020 ©. Desenvolvido por <a href="https://www.sisconnection.com.br">SIS Tecnologia</a></p>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/own-menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="js/map.js"></script>

<script type="text/javascript">

var html = $('#soma').html();
var a =  Math.floor(10* Math.random());
var b =  Math.floor(10* Math.random());
var r = a + b;
var conta = a +'+'+ b;
var campo=  $('#campo').val();

$('#soma').html(conta);

$('#input').on('click', function(e){
  e.preventDefault();

  var campo= $('#campo').val();

  if(campo == r) {
    $('#form').submit();
  } else {
    alert('Resposta Errada. Tente Novamente !');
  }

});



function mostraDiv() {
  $('.dropdown').show();
}

$( "#abre" ).on('click', function() {
  $( '.widget-header' ).trigger( "click" );
});

function trocaCidade() {
  let cidade = document.getElementById("troca").value;
  //fetch('../trocaCidade.php').then((response)=> console.log(response.json));
  window.location.href= "inicio/"+cidade;
}

</script>


</body>
</html>
