    <?php
      $sql = $db->select("SELECT * FROM banner2 ORDER BY id DESC  ");
        while($row = $db->expand($sql)){
      ?>
      <img src="./admin/img/<?php echo $row['img'] ?>" class="img-responsive" >
        <?php } ?>