<?php

session_start();
<<<<<<< HEAD
=======

include("checkLogin.php");
echo "<a href= 'sair.php'><img style='float:right' src='imagens\img_sair.jpg'></a></>";
?>

<?php
echo "<center><h1> O que deseja fazer?</h1></center>";

echo "
    <div class = 'header-2'>
    <ul>
    <li><img src=" . 'imagens\relapsoslogo.png' . "></li>
    <li style = 'margin-left:150px;'><a href =''>PATRIMÔNIO</a></li>
    <li><a href = 'index.php'>ALUGUEL</a></li>
    <li><a href = 'index.php'>COMPRA</a></li>
    <li><a href = 'index.php'>ATENDIMENTO</a></li>
    <li><a href = 'index.php'>TRANSFERÊNCIA</a></li>
    <li><a href = 'index.php'>PERFIL</a></li>
    </ul>
    </div>";
    
echo "<center>
        <h3 class=''>Contato:</h3><br>
        <a href='https://www.facebook.com/relapso.relapsus.5' target='_blank'><img src='imagens\logo_facebook.png'></a>
        <a href='https://www.instagram.com/liderrelapsos/' target='_blank'><img src='imagens\logo_instagram.png'></a>
        <a href='https://twitter.com/RelapsoR' target='_blank'><img src='imagens\logo_twitter.png'></a>
        <a href=''><img src='imagens\logo_whatsapp.png'></a>
        <br><br>
        <p>Endereço: Rua Relapsa número: 5</p>
        <p>CEP: 12345-123</p>
        <p>Bairro: Vila dos Relapsos</p>
    </center>
"
>>>>>>> d02b65de3308e3022668e9bdad75ed8f90f16d6c
?>

<html>

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
            <li style = "margin-left: 550px;"><a>|</a></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li style = "margin-left: 60px;"><a href = "index.html"><img src="imagens\perfil.png"></a></li>
            <li style = "font-size: 20px;font-weight: bold;"><a href="index.html"><?php include("checkLogin.php");?></a></li>
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
<footer>
        <center>
            <br>
            <h3 class="">Contato:</h3><br>
            <a href="https://www.facebook.com/relapso.relapsus.5" target="_blank"><img src="imagens\logo_facebook.png"></a>
            <a href="https://www.instagram.com/liderrelapsos/" target="_blank"><img src="imagens\logo_instagram.png"></a>
            <a href="https://twitter.com/RelapsoR" target="_blank"><img src="imagens\logo_twitter.png"></a>
            <a href=""><img src="imagens\logo_whatsapp.png"></a>
            <br><br>
            <p>Endereço: Rua Relapsa número: 5</p>
            <p>CEP: 12345-123</p>
            <p>Bairro: Vila dos Relapsos</p>
        </center>
    </footer>
    
</html>
        