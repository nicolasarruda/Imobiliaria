<?php
session_start();

//mysqli_connect('localhost', 'root','','imobiliaria') or die("Erro de conexão ->".mysql_error());
//mysqli_select_db('testedoserv') or die(mysqli_error());

$login = array("Corretor1", "Corretor2");
$senha = array("123", "321");

$lengthArray = count($login);
$msg = FALSE;

for($i = 0; $i < $lengthArray; $i++){
    if ($_POST["login"] == $login[$i] && $_POST["senha"] == $senha[$i]){
    	//$get = mysqli_query('SELECT * FROM imobiliaria WHERE login = "$login" AND senha = "$senha"');
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
    header("Location:index.html");
}


?>