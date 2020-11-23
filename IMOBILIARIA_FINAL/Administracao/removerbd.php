<?php

    include 'conexao.php'; 

    $idCliente=$_POST['id'];

        $sql = "DELETE FROM clientes 
            WHERE codigo='$idCliente'";

$tabela = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));            
    
    mysqli_close($conexao);
  header("Location: clientes.php");
?>
