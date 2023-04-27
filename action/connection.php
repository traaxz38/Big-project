<?php
require_once "../conf/config.php";
//requête sql
$sql = "SELECT * FROM utilisateur WHERE email = :email";
//on prepare la requête
$pre = $pdo->prepare($sql);
//on bind
$pre->bindParam("email", $_POST['email']);
$pre->execute();
$utilisateur = $pre->fetch(PDO::FETCH_ASSOC);

if(password_verify($_POST['password'], $utilisateur['password'])){
    //good password ! Logged in !
    $_SESSION['success'] = "Vous êtes connecté";
    $_SESSION['user'] = $utilisateur;
    header('Location:../index.php');
}else{
    //wrong password !
    $_SESSION['error'] = "Password inconnu";
    header('Location:../index.php');
}
?>