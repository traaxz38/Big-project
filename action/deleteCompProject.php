<?php 
#signup.php
require_once "../conf/config.php"; 

if ($_SESSION['user']['admin'] == 0) {
  header('Location:../index.php');
  exit();
}

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$ID=$_GET['id'];
$sql = "DELETE FROM competences_project where ID=$ID";
//On prépare la requête
$pre = $pdo->prepare($sql);

//On execute la requête
$pre->execute();

header('Location:../admin_panel_compProjet.php');
?>