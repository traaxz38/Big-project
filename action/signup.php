<?php 
#signup.php
require_once "../conf/config.php"; 

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$sql = "INSERT INTO utilisateur(email,password) VALUES(:email,:password)";
//On prépare la requête
$pre = $pdo->prepare($sql);
$passwordInput = $_POST['password'];
$passwordHash = password_hash($passwordInput, PASSWORD_BCRYPT);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("email", htmlspecialchars($_POST['email'], ENT_QUOTES,'utf-8'));
$pre->bindParam("password", htmlspecialchars($passwordHash, ENT_QUOTES,'utf-8'));

//On execute la requête
$pre->execute();
header('Location:../login.php');


?>