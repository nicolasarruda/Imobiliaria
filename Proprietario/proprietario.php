<?php
session_cache_expire(180);
session_start();

include("checkLogin.php");


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
?>

<html>

<footer>
<link rel = "stylesheet" href="css/styleProprietario.css" type = "text/css">
</footer>
</html>