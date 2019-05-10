<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=cms","root","");
$sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
$sql->execute( array($_POST['email'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: post.php");
}else{
    header("Location: ../login");
}