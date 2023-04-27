<?php
require_once "../conf/config.php";
$objet = $_POST['objet'];
$content = $_POST['message'];
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

if(mail('mgermanaz@guardiaschool.fr',$objet,$content,$headers)){
    //le mail est bien parti ! Pas d'erreur
    header('Location:../index.php');
}else{
    //on a une erreur quelque part
}

?>