<?php
 include 'conexao.php';
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
            <li style="margin-left:auto;"></li>
            <li style = "margin-left: 500px;color:white"><p>|</p></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelaps</p></li>      
            <li style = "margin-left: auto;"><a href = "login.php"><img src="imagens\perfil.png"></a></li>
            <li style = "font-size: 20px;font-weight: bold;"><a style = "color:white;text-decoration: none;" href="login.php">Login</a></li>
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
   <div class = "cadastrarcliente" style = "
background-color:rgb(23, 127, 135);
width: 100%;
height: 100%;
">
    <center>
    <h1 style = "color:white;margin-top: 20px;"> Cadastro</h1><br><br>
    </center>
    <center>
    <form style = "color:white;" action="" name="">
        <p style="margin-left: 25px">Nome<input  type="text" name="nome" value=""></p>
        <p style="margin-left: 22.5px">E-mail<input type="text" name="email" value=""></p>
        <p style="margin-left: 44px;">RG<input type="text" name="nome" value=""> </p>
        <p style="margin-left: 36px;">CPF<input type="text" name="cpf" value=""></p>
        <p style="margin-left: 0px;">Endereço<input type="text" name="endereco" value=""></p>
        <p style="margin-left: 8px;">Telefone<input type="text" name="telefone" value=""></p>
        <p style="margin-left: 22px;">Senha<input type="password" name="senha" value=""></p><br>
        <input style="padding:10px;border:1px solid white;border-radius: 10px;background-color:rgb(23,173,170);color:white;margin:20px;margin-left:85px;" type="submit" value="Cadastrar" onload="function cadastrar()">
    </form>
</center>
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



<?php
mysqli_close($conexao);
?>