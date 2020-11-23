<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária RELAP'S</title>
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
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
            <li style = "font-size: 20px;margin-left: 60px;font-weight: bold;"><a style = "color:white;text-decoration: none;" href= 'sair.php'><img style='float:right' src='imagens\img_sair.png'>Sair</a></>
    </ul>
    </div>
    </header>
    <div class = "header-2">
            <ul>
            <li><img src="imagens\relapsoslogo.png"></li>
            <li style = "margin-left:200px;"><a href = "cliente.php">HOME</a></li>
            <li><a href = "imoveis_venda.php">IMÓVEIS</a></li>
            <li><a href = "imoveis_cliente.php">CONSULTAS</a></li>
            <li><a href = "contatos_cliente.php">CONTATOS</a></li>
            </ul>
    </div>
    <hr style = "margin:1px;border: 1px solid silver">
<div class ="img-1">
    <img src="imagens\imagem1.png">
    </div>
    <div class ="img-2">
    <img src="imagens\imagem2.png">
    </div>
    <h1>Destaques</h1>
    <div class="slidershow middle" >

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="imagens/1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imagens/2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imagens/3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imagens/4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imagens/5.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
    <h1 style="margin-top: -160px;">Gostou do que viu? Acompanhe o nosso trabalho pelas nossas redes sociais!</h1>
</body>
<footer style = "width: 100vw;">
<div style="background-color:  rgb(23,127,135) ;height:400;width:100%;">  
<div class= "contat">
        <center>
            <a href="" target="_blank"><img src="imagens\logo_facebook.png";border = "0"></a>
            <a href="" target="_blank"><img  src="imagens\logo_instagram.png";border = "0"></a>
            <a href="" target="_blank"><img src="imagens\logo_twitter.png";border = "0"></a>
            <a href=""><img src="imagens\logo_whatsapp.png";border = "0"></a> 
            <br>
            <p><a style = "color:white;text-decoration: none;" >Endereço: Rua Alseu valenca - número: 5</p>
            <p><a style = "color:white;text-decoration: none;" >CEP: 12345-123</p>
            <p><a style = "color:white;text-decoration: none;" >Bairro: Vila do florescer</p>
        </center>
  </footer>
</html>