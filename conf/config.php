<?php
#config.php

session_start();

$pdo = new PDO(
    'mysql:host=mysql-matisbarbierdelaunay.alwaysdata.net;dbname=matisbarbierdelaunay_bigproject;',
    '298920',
    'SFb65ADFSURify5',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>