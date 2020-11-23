<?php
session_start();
include ('conexao.php');



    if (isset($_POST['login'])  && isset($_POST['senha'])){
    	$login = $_POST['login'];
    	$senha = $_POST['senha'];
    
    	
    	$get_clientes = mysqli_query($conexao, "SELECT * FROM clientes WHERE login = '$login' AND senha = '$senha' ");
    	$row_clientes = mysqli_num_rows($get_clientes);
        
	    	if ($row_clientes == 1){
	    		$_SESSION['logado'] = TRUE;
	    		$_SESSION["user"] = $_POST['login'];
	    		header("Location:cliente.php");
	    		exit();
    		} else {
    			header("Location:login.php");
    			exit();
    		}
    	}
     
mysqli_close($conexao);
?>