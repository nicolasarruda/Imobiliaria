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
            <li style = "margin-left: 500px;color:white;"><a>|</a></li>
            <li><img src="imagens\instagram.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>
            <li><img src="imagens\facebook.png"></li>
            <li style = "font-size: 20px;"><p>imorelapsos</p></li>      
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
        <table class = "lista-imoveis" style = "text-align: center;margin-top:10px;width:80%">
    <?php $link = "xml\imoveis.xml";
    $xml = simplexml_load_file($link) -> pasteis;
    foreach($xml -> sabores as $aula){
echo "<tr style = ''>";
echo "<th>";
echo "<img style = 'max-width:300px;border:3px solid gray;'src=' ".$aula -> imagem." '></img><br/>";
echo "</th>";
echo "<th style = 'background-color:white;border:2px solid gray;'>";
echo "<font color = 'gray' size = '6pt'>". utf8_decode($aula -> nome)."</font><br/>";
echo "Descrição <br/> <font color = 'gray'>".utf8_decode($aula -> descricao)."</font>";
echo "</th>";
}
    ?>

</table>
</body>
<footer>
        <center>
            <br>
            <hr>
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


