<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>

<style type="text/css">
@media screen and (max-width:400px) {
  div#cardDicas {
    padding-top: 10px;
    padding-bottom: 10px;
}
}
</style>

<div class="row">
  <img src="images/dica.png" width="100%">
</div>
<div class="container">

<div class="row">

<?php
            $sql = $db->select("SELECT * FROM dicas ORDER BY id DESC ");
            while($row = $db->expand($sql)){
        ?>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;margin-top:50px">
            <iframe width="350" class="card-img-top" height="200" src="<?php echo $row['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text"><?php echo $row['descricao'] ?></p>
            </div>
          </div>
          </div>

      <?php  }?>

  

  </div>
</div>


<?php require 'includes/footer.php'; ?>