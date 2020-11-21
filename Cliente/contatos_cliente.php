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
            <li style="margin-left:100px; font-size: 20px;"><?php include("checkLogin.php");?></li>
            <li style = "margin-left: 150px;"><a>|</a></li>
            <li style="margin-left:auto;"></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>            

    </ul>
    </div>
    </header>
    <div class = "header-2">
            <ul>
            <li><img src="imagens\relapsoslogo.png"></li>
            <li style = "margin-left:800px;"><a href = "cliente.php">VOLTAR</a></li>
            </ul>
    </div>
    <hr style = "margin:1px;border: 1px solid silver">
</body>
<footer style = "width: 100vw;">
<div style="background-color:  rgb(23,127,135) ;height:400;width:100%;">  
<div class= "contat">
        <center>
            <a href="https://www.facebook.com/relapso.relapsus.5" target="_blank"><img src="imagens\logo_facebook.png";border = "0"></a>
            <a href="https://www.instagram.com/liderrelapsos/" target="_blank"><img  src="imagens\logo_instagram.png";border = "0"></a>
            <a href="https://twitter.com/RelapsoR" target="_blank"><img src="imagens\logo_twitter.png";border = "0"></a>
            <a href=""><img src="imagens\logo_whatsapp.png";border = "0"></a> 
            <br>
            <p><a style = "color:white;text-decoration: none;" >Endereço: Rua Alseu valenca - número: 5</p>
            <p><a style = "color:white;text-decoration: none;" >CEP: 12345-123</p>
            <p><a style = "color:white;text-decoration: none;" >Bairro: Vila do florescer</p>
        </center>
  </footer>
</html>