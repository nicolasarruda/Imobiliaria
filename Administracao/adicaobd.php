<?php
$acao=$_POST['acao'];

	if ($acao == "Cancelar")
	{
		header("Location: principal.php");
	}
	else
	{
		include 'conexao.php'; 

		$nome=$_POST['nome'];
		$rg=$_POST['rg']; 
		$cpf=$_POST['cpf']; 
		$endereco=$_POST['endereco']; 
		$telefone=$_POST['telefone'];
		$email=$_POST['email']; 
		$login=$_POST['login']; 
		$senha=$_POST['senha']; 
		$token = (md5(uniqid(mt_rand(),true)));

		$sql = "INSERT INTO clientes
            (nome, rg, cpf, endereco, telefone, email, login, senha, token) 
            VALUES 
            ('$nome','$rg', '$cpf', '$endereco', '$telefone', '$email', '$login', '$senha', '$token')";
            $tabela = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
            mysqli_close($conexao);
            header("Location: clientes.php");
          }
          

?>