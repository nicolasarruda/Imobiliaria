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
            <li style="margin-left:250px;"><?php include("checkLogin.php");?></li>
            <li style = "margin-left: 150px;"><a>|</a></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li style = "font-size: 20px;margin-left: 60px;font-weight: bold;"><a href= 'sair.php'><img style='float:right' src='imagens\img_sair.jpg'>Sair</a></>
    </ul>
    </div>
    </header>
    <div class = "header-2">
            <ul>
            <li><img src="imagens\relapsoslogo.png"></li>
            <li style = "margin-left:150px;"><a href = "index.php">HISTÓRIA</a></li>
            <li><a href = "index.php">ALUGUEL</a></li>
            <li><a href = "index.php">COMPRA</a></li>
            <li><a href = "index.php">NOVOS IMÓVEIS</a></li>
            <li><a href = "index.php">CADASTRO DE IMÓVEIS</a></li>
            <li><a href = "index.php">CONTATOS</a></li>
            </ul>
    </div>
    <hr style = "margin:1px;border: 1px solid silver">
<div class ="img-1">
    <img src="imagens\imagem1.png">
    </div>
</body>
    
</html>