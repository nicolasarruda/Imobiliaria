<?php
session_start();

$login = array("Cliente1", "Cliente2");
$senha = array("123", "321");

$lengthArray = count($login);

$msg = FALSE;


    if (isset($_POST["login"])  && isset($_POST["senha"])){
    	$login = $_POST['login'];
    	$senha = $_POST['senha'];
    	$msg = TRUE;

    }


if ($msg == TRUE){
    $_SESSION["logado"] = TRUE;
    $_SESSION["user"] = $_POST["login"];
    header("Location:cliente.php");
}
else {
    header("Location:login.php");
}


?>