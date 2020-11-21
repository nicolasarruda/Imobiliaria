<?php

	include 'conexao.php'; 

	 $pesquisar = $_POST['token'];
	 ?>
	  <table style="border:1px solid rgb(23, 127, 135)"class = "tabela-clientes" align=center width=80%>

    <td align="center"><b>Login</b></td>
    <td align="center"><b>Senha</b></td>

      </tr>
      <?php
		$sql = "SELECT * 
				FROM clientes 
				WHERE token LIKE '$pesquisar' LIMIT 32";
	    $consulta = mysqli_query($conexao, $sql);
		while ($linha = mysqli_fetch_array($consulta))
		{
?>
        <td align="center">
          <?php echo $linha['login']; ?>
        </td>
        <td align="center">
          <?php echo $linha['senha']; ?>
        </td>
      </tr>
       </table>
<?php
  }
?>
 

<?php
mysqli_close($conexao);
?>