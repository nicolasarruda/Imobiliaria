<?php
session_start();
?>
<?php 
include 'checkLoginAdm.php'
?>
<?php
	include 'conexao.php'; 
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/eventoAdministracao.js"></script>
        <link rel = "stylesheet" href="css/style2.css" type = "text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
    </head>
    <body> 
              <nav class ="navbar">
            <ul class = "navbar-nav">
                <li class = "navbar-item">
                <a href="principal.php" class="nav-link">
                   <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-left" class="svg-inline--fa fa-arrow-circle-left fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class = "fa-secondary" fill="currentColor" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm28.9-143.6L209.4 288H392c13.3 0 24-10.7 24-24v-16c0-13.3-10.7-24-24-24H209.4l75.5-72.4c9.7-9.3 9.9-24.8.4-34.3l-11-10.9c-9.4-9.4-24.6-9.4-33.9 0L107.7 239c-9.4 9.4-9.4 24.6 0 33.9l132.7 132.7c9.4 9.4 24.6 9.4 33.9 0l11-10.9c9.5-9.5 9.3-25-.4-34.3z"></path></svg>
                    </path></svg>
                    <span class = "link-text">Voltar</a></span>
                </a>
            </li>          
            </ul>
            </nav>
            <center><h1>Consultar Cliente</h1>
            <form style = "color:rgb(23,127,135);" name="dados" method="post" action="consultabd.php" >
        	<p>Digite o ID do cliente<br>
        		<input  type="text" name="id" value="" maxlength="32"></p>
			<p>
			<input style="padding:10px;border:1px solid white;border-radius: 10px;background-color:rgb(23,173,170);color:white;margin:20px;" type="submit" name="acao" value="Pesquisar">
       	 <input style="padding:10px;border:1px solid white;border-radius: 10px;background-color:rgb(23,173,170);color:white;margin:20px;" type="submit" name="acao" value="Cancelar">
			</form>
			</center>
<?php
	mysqli_close($conexao);
?>