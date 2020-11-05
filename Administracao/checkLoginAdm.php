<?php

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
    header("Location:administracao.html");
}
else{
    echo "<center><p class=''>Seja bem-vindo, " . $_SESSION["admin"] . "</p></center>";
}

?>