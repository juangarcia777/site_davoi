$('.produto').tooltip();

var planRot  = $('#roteadorPlan').is(':visible');
if (planRot) var roteador = ('#plan').text();
else var roteador = 0;

var a= $('#plan').text();
if($('#inst_value').text() === 'Grátis') {
  var b= 0;
}else {
var b= $('#inst_value').text();
}

var result= parseFloat(a) + parseFloat(b);
const n= result.toFixed(2).replace('.',',');


$("#total").text(n);

// Colocando produto no carrinho.
$('#addRot').on('click', function(){

    $('#roteadorPlan').css("display","flex");
    var produto = $(this).clone().addClass('remove').hide().fadeIn(500);
    var a= 19.90;
    var b= $('#plan').text();
    if($('#inst_value').text() === 'Grátis') {
      var c= 0;
    }else {
    var c = $('#inst_value').text();
    }

    var resultado= parseFloat(a) + parseFloat(b) + parseFloat(c);

    const n= resultado.toFixed(2).replace('.',',');


    $("#total").text(n);

});

// Retirando todos os produtos do carrinho.
$(document).on('click', '#limpar', function(){
    $('#itens').empty();
    $('#carrinho').append("<div class='alert alert-danger' id='carrinho-vazio' role='alert'>Carrinho Vazio</div>").fadeOut(2000);
    $('#total, #finalizar, #limpar').hide();
});

// Retirando um produto do carrinho.
$(document).on('click', '.remove', function(){
    $(this).css("display","none");
    var planRot  = $('#roteadorPlan').is(':visible');
    if (planRot) var roteador = ('#plan').text();
    else var roteador = 0;

var a= $('#plan').text();

if($('#inst_value').html() === 'Grátis') {
  var b= 0
} else {
var b= $('#inst_value').html();
}

var result= parseFloat(a)+parseFloat(b);
const n= result.toFixed(2).replace('.',',')

$("#total").text(n);


});

// Finalizando a compra.
$(document).on('click', '#btn', function(){

    var nome= $('#nome').val();
    var tel= $('#tel').val();
    var rua= $('#rua').text();
    var cidade= $('#cidade').text();
    var planEsc= $('#planEsc').text();
    var tipo_plano= $('#tipo_plano').val();
    var email= $('#email').val();
    var valor_total= $('#total').text();

    const planRot  = $('#roteadorPlan').is(':visible');
    if (planRot) var roteador = "SIM";
    else var roteador = "nao";

    $.ajax({
         url: 'envia.php',
         type: 'POST',
         data: {nome:nome, tel:tel, rua:rua, cidade:cidade, planEsc:planEsc,tipo_plano: tipo_plano, roteador: roteador, email: email, valor_total: valor_total},
         success: function(msg) {
            alert(msg);
            window.location.href= "home.php";
          }
        });

});
