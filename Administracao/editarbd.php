<?php
		include 'conexao.php'; 

		$id=$_POST['id'];
		$nome=$_POST['nome'];
 		$rg=$_POST['rg'];
 		$cpf=$_POST['cpf'];
 		$endereco=$_POST['endereco'];
 		$telefone=$_POST['telefone'];
 		$login=$_POST['login'];
 		$senha=$_POST['senha'];

				$sql = "UPDATE clientes SET 
						nome='$nome', 
						rg='$rg',
						cpf='$cpf',
						endereco='$endereco',
						telefone='$telefone',
						login='$login',
						senha='$senha' 
						WHERE codigo='$id'";

		$tabela = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));            
		
		mysqli_close($conexao);
	header("Location: clientes.php");
?>
