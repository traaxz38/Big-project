<?php 
#signup.php
require_once "../conf/config.php";

if ($_SESSION['user']['admin'] == 0) {
  header('Location:../index.php');
  exit();
} 

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL


$sql = "INSERT INTO message(user,prenom,nom,objet,message) VALUES(:user,:prenom,:nom,:objet,:message)";
$user=$_SESSION['user']['ID'];
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("prenom", htmlspecialchars( $_POST['prenom'], ENT_QUOTES,'utf-8'));
$pre->bindParam("nom", htmlspecialchars( $_POST['nom'], ENT_QUOTES,'utf-8'));
$pre->bindParam("objet", htmlspecialchars( $_POST['objet'], ENT_QUOTES,'utf-8'));
$pre->bindParam("user", $user);
$pre->bindParam("message", htmlspecialchars(  $_POST['message'], ENT_QUOTES,'utf-8'));


//On execute la requête
$pre->execute();
header('Location:../livreDOR.php');


?>