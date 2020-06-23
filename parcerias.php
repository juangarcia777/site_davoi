<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>

<div class="img-responsive">
	<img src="images/parceria.jpg" class="img-responsive" width="100%" height="550">
</div>

<link rel="stylesheet" href="css/aux_parcerias.css"/>

<section class="details-card" style="padding-bottom:50px">
    <div class="container">
    	
        <div class="row" style="margin-top:50px">

        <?php
            $sql = $db->select("SELECT * FROM parcerias ORDER BY id DESC ");
            while($row = $db->expand($sql)){
        ?>

            <div class="col-sm-4"  style="margin-top:20px">
                <a href="<?php echo $row['url']; ?>">
                <div class="card-content">
                    <div class="card-img">
                        <img src="./admin/img/<?php echo $row['img']; ?> " alt="">
                    </div>
                    <div class="card-desc">
                        <h3><?php echo $row['titulo'] ?></h3>
                        <p><?php echo $row['descricao'] ?></p>
                    </div>
                </div>
                </a>
            </div>

            <?php }?>

        </div>

     
    </div>
</section>

<?php require 'includes/form_contact_parc.php'; ?>
<?php require 'includes/footer.php'; ?>