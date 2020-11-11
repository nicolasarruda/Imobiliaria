<?php


if((!isset($_SESSION["logado"])) || ($_SESSION["logado"] != TRUE)){
     header("Location:index.html");
}
else{
    echo "<center><p class=''>Seja bem-vindo, " . $_SESSION["user"] . "</p></center>";
}

?>