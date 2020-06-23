<?php require 'includes/topo.php'; ?>
<?php require 'includes/menu.php'; ?>

<section class="sub-baner" id="contato">
    <div class="container">
      <h3>Contato</h3>
     
    </div>
  </section>

<?php require 'includes/contacts.php'; ?>
<?php require 'includes/emails.php'; ?>
<?php require 'includes/form_contact1.php'; ?>


<?php require 'includes/footer.php'; ?> 

<script type="text/javascript">

$('.nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 500);
	$('.dropdown').hide();
});

</script>

