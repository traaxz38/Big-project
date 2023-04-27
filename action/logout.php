<?php
  require "../conf/config.php"
?>
<?php 
unset($_SESSION['user']);
header('Location:../index.php');
?>