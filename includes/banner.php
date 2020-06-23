<script type="text/javascript">
  $('.carousel').carousel();
</script>
<style type="text/css">
@media screen and (max-width:400px) {
  .carousel {
    padding-bottom: 30px;
  }
}
</style>


<!-- Banner -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="max-width:100%" >

  <?php
    $active= true;
    $sql = $db->select("SELECT * FROM banners ORDER BY id DESC ");
     while($row = $db->expand($sql)){
  ?>


  <div class="item <?php echo  $active ? ' active' : ''; ?>">
      <img src="./admin/img/<?php echo $row['img']; ?>" width="100%" alt="">
    </div>
    

      <?php
    $active= false;
    } ?>
  
  </div>

</div>

  