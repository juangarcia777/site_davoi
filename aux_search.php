<?php 
  if (!empty($_GET['cidade'])) {
    $cidade= $_GET['cidade'];
    $_SESSION['cidade']= $cidade;
    $y= $_SESSION['cidade'];
  }
  header("Location: home.php");
?>