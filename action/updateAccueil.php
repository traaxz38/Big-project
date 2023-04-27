<?php 
#signup.php
require_once "../conf/config.php";

if ($_SESSION['user']['admin'] == 0) {
  header('Location:../index.php');
  exit();
} 

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL

$sql = "UPDATE accueil SET titre=:titre,presentation=:presentation,nom1=:nom1,bioNom1=:bioNom1,bioFooter=:bioFooter";

//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("titre", htmlspecialchars( $_POST['titre'], ENT_QUOTES,'utf-8'));
$pre->bindParam("presentation", htmlspecialchars($_POST['presentation'], ENT_QUOTES,'utf-8'));
$pre->bindParam("nom1", htmlspecialchars($_POST['nom1'], ENT_QUOTES,'utf-8'));
$pre->bindParam("bioNom1", htmlspecialchars($_POST['bioNom1'], ENT_QUOTES,'utf-8'));
$pre->bindParam("bioFooter", htmlspecialchars($_POST['bioFooter'], ENT_QUOTES,'utf-8'));


//On execute la requête
$pre->execute();
header('Location:../admin_panel_accueil.php');


?>