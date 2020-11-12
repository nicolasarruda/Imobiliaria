<?php
session_start();

$login = array("Proprietario1", "Proprietario2");
$senha = array("123", "321");

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
    $_SESSION["admin"] = $_POST["login"];
    header("Location:proprietario.php");
}
else {
    header("Location:index.html");
}


?>