<?php 
#signup.php
require_once "../conf/config.php"; 

if ($_SESSION['user']['admin'] == 0) {
  header('Location:../index.php');
  exit();
}

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$img1="img/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../".$img1);

$img2="img/".$_FILES['image1']['name'];
move_uploaded_file($_FILES['image1']['tmp_name'],"../".$img2);

$img3="img/".$_FILES['image2']['name'];
move_uploaded_file($_FILES['image2']['tmp_name'],"../".$img3);

$img4="img/".$_FILES['image3']['name'];
move_uploaded_file($_FILES['image3']['tmp_name'],"../".$img4);

$ID=$_GET['id'];
$sql = "UPDATE projets SET nomProjet=:nomProjet,titre=:titre,presentation=:presentation,description1=:description1,description2=:description2,imageCarousel1=:imageCarousel1,alt1=:alt1,imageCarousel2=:imageCarousel2,alt2=:alt2,imageCarousel3=:imageCarousel3,alt3=:alt3,imageAccueil=:imageAccueil,altA=:altA WHERE ID=$ID";

//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("nomProjet", htmlspecialchars( $_POST['nomProjet'], ENT_QUOTES,'utf-8'));
$pre->bindParam("titre", htmlspecialchars(  $_POST['titre'], ENT_QUOTES,'utf-8'));
$pre->bindParam("presentation", htmlspecialchars( $_POST['presentation'], ENT_QUOTES,'utf-8'));
$pre->bindParam("description1", htmlspecialchars( $_POST['description1'], ENT_QUOTES,'utf-8'));
$pre->bindParam("description2", htmlspecialchars( $_POST['description2'], ENT_QUOTES,'utf-8'));
$pre->bindParam("imageCarousel1", $img1);
$pre->bindParam("alt1", htmlspecialchars( $_POST['alt1'], ENT_QUOTES,'utf-8'));
$pre->bindParam("imageCarousel2",  $img2);
$pre->bindParam("alt2", htmlspecialchars( $_POST['alt2'], ENT_QUOTES,'utf-8'));
$pre->bindParam("imageCarousel3", $img3);
$pre->bindParam("alt3", htmlspecialchars( $_POST['alt3'], ENT_QUOTES,'utf-8'));
$pre->bindParam("imageAccueil", $img4);
$pre->bindParam("altA", htmlspecialchars( $_POST['altA'], ENT_QUOTES,'utf-8'));



//On execute la requête
$pre->execute();
header('Location:../admin_panel_projets.php');


?>