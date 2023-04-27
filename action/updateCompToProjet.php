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
$sql = "UPDATE competences_project SET id_projets=:id_projets,id_competences=:id_competences WHERE ID=$ID";

//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("id_projets",htmlspecialchars( $_POST['id_projets'], ENT_QUOTES,'utf-8'));
$pre->bindParam("id_competences", htmlspecialchars($_POST['id_competences'], ENT_QUOTES,'utf-8'));



//On execute la requête
$pre->execute();
header('Location:../admin_panel_compProjet.php');


?>