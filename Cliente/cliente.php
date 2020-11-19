<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária RELAPSOS</title>
    <link rel = "stylesheet" href="css/style.css" type = "text/css">
    <script language="JavaScript" src="js/funcoes.js"></script>
</head>
<body>
    <header class = "header-1">
        <div class= "info">
        <ul>
            <li><img src="imagens\celularbranco.png"></li>
            <li><p>(11) 9 1234-5678</p></li>
            <li><img src="imagens\telefonebranco.png"></li>
            <li><p>(11) 4567-8901</p></li>
            <li style="margin-left:250px; font-size: 20px;"><?php include("checkLogin.php");?></li>
            <li style = "margin-left: 150px;"><a>|</a></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li style = "font-size: 20px;margin-left: 60px;font-weight: bold;"><a style = "color:white;text-decoration: none;" href= 'sair.php'><img style='float:right' src='imagens\img_sair.png'>Sair</a></>
    </ul>
    </div>
    </header>
    <div class = "header-2">
            <ul>
            <li><img src="imagens\relapsoslogo.png"></li>
            <li style = "margin-left:200px;"><a href = "index.php">HOME</a></li>
            <li><a href = "imoveis.php">IMÓVEIS</a></li>
            <li><a href = "cadastro_Clientes.php">CADASTRO DE USUÁRIOS</a></li>
            <li><a href = "contatos.php">CONTATOS</a></li>
            </ul>
    </div>
    <hr style = "margin:1px;border: 1px solid silver">
<div class ="img-1">
    <img src="imagens\imagem1.png">
    </div>
    <div class ="img-2">
    <img src="imagens\imagem2.png">
    </div>
    <div class = "final">

</body>

</html>