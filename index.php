<?php
  if(!empty($_POST['cidade'])){
    $cidade= $_POST['cidade'];
    if($cidade){
      header("Location:inicio/".$cidade); 
    }
  }

  
?>

<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<script type="text/javascript" src="https://davoi-isp.mktzap.com.br/webchat/2mxu4rk2behlo4m6vtzq?open=true"></script>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/aux_index.css">

<style type="text/css">
.logo {
    margin-top: 40px;
    margin-left: 30px;
}
</style>


<?php require 'class/class.db.php' ?>
<?php require 'class/class.seguranca.php'

?>

<div class="main">

    <div class="container">


<div class="middle">
      <div id="login" style="padding-top:30px">

        <label for="">Selecione a cidade onde voçê mora:</label>

        

        <form method="POST">

          <fieldset class="clearfix">

            <p ><span class="fa fa-building"></span>
              <select class="form-control" name="cidade" id="validationDefault04" required>
              <?php
                $sel = $db->select("SELECT * FROM cidades ORDER BY id ");
                if($db->rows($sel)){
                    $x=1;
                    while($yy = $db->expand($sel)){
                        ?>
                   <option value="<?php echo $yy['id'] ?>"><?php echo strtoupper($yy['nome']) ?></option>
                    <?php } } ?>
            </select>
            </p> <!-- JS because of IE support; better: placeholder="Username" -->
            <!-- JS because of IE support; better: placeholder="Password" -->

             <div>
                <span style="width:100%; text-align:right;  display: inline-block;">
                <input type="submit" value="Avancar"></span>
              </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
          <img src="images/davoi_branco.png">
          <div class="clearfix"></div>
      </div>

      </div>
    </div>

</div>
