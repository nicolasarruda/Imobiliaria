<?php
mysqli_connect('localhost', 'root','','testedoserv') or die("Erro de conexão ->".mysql_error());
mysqli_select_db('testedoserv') or die(mysqli_error());

$msg = FALSE;


    if (isset($_POST["login"])  && isset($_POST["senha"])){
    	$login = $_POST['login'];
    	$senha = $_POST['senha'];
		$get = mysqli_query('SELECT * FROM testedoserv WHERE nome = "$login" AND senha = "$senha"');
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