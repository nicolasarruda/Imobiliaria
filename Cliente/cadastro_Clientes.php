<?php
 include 'conexao.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script></script>   
    </head>
<body>
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
            <li style = "margin-left: 60px;"><a href = "login.php"><img src="imagens\perfil.png"></a></li>
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
    <hr style = "margin:1px;border: 1px solid silver">
    <div style = "display:flex;
justify-content: space-around;
align-items: middle;
flex-direction: column;
background-color:rgb(23, 127, 135);
width: 100%;
">
    <center><br><br>
    <h1 style = "color:white;"> Cadastro</h1><br><br>
    </center>
    <center>
    <form style = "color:white;" action="" name="">
        <p>Nome<input  type="text" name="nome" value=""></p>
        <p>E-mail<input type="text" name="email" value=""></p>
        <p>RG<input type="text" name="nome" value=""> </p>
        <p>CPF<input type="text" name="cpf" value=""></p>
        <p>Endereço<input type="text" name="endereco" value=""></p>
        <p>Telefone<input type="text" name="telefone" value=""></p>
        <p>Senha<input type="password" name="senha" value=""></p><br>
        <input style = "margin-bottom:30px;" type="submit" value="Cadastrar" onload="function cadastrar()">
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
    
</body>
</html>
<?php
mysqli_close($conexao);
?>