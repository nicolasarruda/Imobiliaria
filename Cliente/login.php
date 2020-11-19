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
            <li style = "margin-left: 500px;color:white;"><p>|</p></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>            
            <li style = "margin-left: auto;color:white;"><a href = "login.php"><img src="imagens\perfil.png"></a></li>
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
    <div class="conteudo-login">
    <center><br><br>
<h1 style="color:white;font-family: 'Calibri';">Faça o login</h1><br>

<form name="form" id="form" action="validaLogin.php" method="POST">
<div class = "form2">
<input type="text" name="login" id="login" autocomplete="on" required>
<label for="login" class="label-name">
    <span class = "content-name">Login</span>
</label>
</div>
<br>
<div class = "form2">
<input type="password" name="senha" id="senha" autocomplete="on" required>
<label for="name" class="label-name">
    <span class = "content-name">Senha</span>
</label>
        </div>
        <br>
        <input style="padding:10px;border:1px solid white;border-radius: 10px;background-color:rgb(23,173,170);color:white;"type="submit" value="Entrar" onclick="entrar()"><br>
    </form>
        <br><br>
                <p style = "font-family: 'Calibri';color:white;font-size: 20px;">Ainda não tem conta nos Relapsos? Clique <a href="cadastro_Clientes.php" style = "font-weight: bold;color:white">aqui</a> para criar uma</p>
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


