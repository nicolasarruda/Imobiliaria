<?php

	include 'conexao.php'; 

	$acao=$_POST["acao"];

	if ($acao == "Cancelar")
	{
		//break;
	}
	else
	{
	 $pesquisar = $_POST["id"];
		
		$sql = "SELECT * 
				FROM clientes 
				WHERE codigo=".$pesquisar;
	    $consulta = mysqli_query($conexao, $sql);
		//$linha = mysqli_fetch_array($tabela);
		//$tabela = mysqli_query($conexao,$sql);
		//$linha = mysqli_fetch_array($tabela);
		while ($linha = mysqli_fetch_array($consulta)) {
			echo "Nome: " . $linha['nome'] . "<br>";
			


		/*$nome=$linha['nome'];
		$fone=$linha['fone'];
		*/
	}
?>

 <center><h1>Cliente</h1></center>
    <table style="border:1px solid rgb(23, 127, 135)"class = "tabela-clientes" align=center width=80%>
      <td align="center">
          <b>ID</b>
        </td>
        <td align="center">
          <b>Nome</b>
        </td>
        <td align="center"><b>RG</b></td>
        <td align="center"><b>CPF</b></td>
		<td align="center"><b>Endereço</b></td>
		<td align="center"><b>Telefone</b></td>
    <td align="center"><b>Login</b></td>
    <td align="center"><b>Senha</b></td>
    <td align="center"><b>Token</b></td>
    </tr>
<?php
	//$tabela = mysqli_query($conexao,$sql);
	//$linha = mysqli_fetch_array($tabela);
    //while ($linha = mysqli_fetch_array($linha));
$acao=$_POST["acao"];

	if ($acao == "Cancelar")
	{
		//break;
	}
	else
	{
	 $pesquisar = $_POST["id"];
		
		$sql = "SELECT * 
				FROM clientes 
				WHERE codigo=".$pesquisar;
	    $consulta = mysqli_query($conexao, $sql);
		//$linha = mysqli_fetch_array($tabela);
		//$tabela = mysqli_query($conexao,$sql);
		//$linha = mysqli_fetch_array($tabela);
		while ($linha = mysqli_fetch_array($consulta))
		
?>
	<table>
      <tr>
        <td align="center">
          <?php echo $linha['codigo']; ?>
        </td>
        <td align="center">
          <?php echo $linha['nome']; ?>
        </td>
        <td align="center">
          <?php echo $linha['rg']; ?>
        </td>
        <td align="center"> 
          <?php echo $linha['cpf']; ?>
        </td>
		<td align="center">
          <?php echo $linha['endereco']; ?>
        </td>
		<td align="center">
          <?php echo $linha['telefone']; ?>
        </td>
        <td align="center">
          <?php echo $linha['login']; ?>
        </td>
        <td align="center">
          <?php echo $linha['senha']; ?>
        </td>
        <td align="center">
          <?php echo $linha['token']; ?>
        </td>
      </tr>
    </table>

<?php

?>
<?php

mysqli_close($conexao);
?>