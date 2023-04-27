<?php 
#signup.php
require_once "../conf/config.php";

if ($_SESSION['user']['admin'] == 0) {
  header('Location:../index.php');
  exit();
} 

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$img="img/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../".$img);

$sql = "INSERT INTO competences(nom,description,imageC,altC) VALUES(:nom,:description,:imageC,:altC)";

//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("nom", htmlspecialchars($_POST['nom'], ENT_QUOTES,'utf-8'));
$pre->bindParam("description", htmlspecialchars( $_POST['description'], ENT_QUOTES,'utf-8'));
$pre->bindParam("imageC", $img);
$pre->bindParam("altC", htmlspecialchars( $_POST['altC'], ENT_QUOTES,'utf-8'));


//On execute la requête
$pre->execute();
header('Location:../admin_panel_comp.php');


?>