<?php require_once ('loginAction.php'); ?>

<?php
  unset( $_SESSION['logado'] );
  header("location:index.php");
?>