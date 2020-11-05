<?php
session_start();

$login = array("Relapso1", "Relapso2");
$senha = array("rel123", "rel321");

$lengthArray = count($login);
$msg = FALSE;

for($i = 0; $i < $lengthArray; $i++){
    if ($_POST["login"] == $login[$i] && $_POST["senha"] == $senha[$i]){
        $msg = TRUE;
    break;
    }
}

if ($msg == TRUE){
    $_SESSION["logado"] = TRUE;
    $_SESSION["user"] = $_POST["login"];
    header("Location:cliente.php");
}
else {
    header("Location:index.html");
}


?>