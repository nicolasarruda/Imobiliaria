<?php
session_start();

$login = array("Corretor1", "Corretor2");
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
    header("Location:funcionario.php");
}
else {
    header("Location:administracao.html");
}


?>