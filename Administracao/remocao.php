<?php
session_start();
?>
<?php 
include 'checkLoginAdm.php'
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/eventoAdministracao.js"></script>
        <link rel = "stylesheet" href="css/style2.css" type = "text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel = "stylesheet">
    </head>
    <body> 
<?php
  include 'conexao.php'; 
?>
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
        <main>
          <center><h1>Remoção de Clientes</h1></center>
          <center>
          <form name="dados" method="post" action="removerbd.php" style="margin-left: -15px;">
      <p>
        ID: <input style="margin-left: 5px;" type="text" name="id" value="">

        <input style="margin-left:15px;"type="submit" name="acao" value="Remover">
      </p>
    </form>
            <center>


          </form>
    
        </main>


    </body>
    <footer>
        
    </footer>

</html>
<?php
  mysqli_close($conexao);
?>