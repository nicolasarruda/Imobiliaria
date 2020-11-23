<?php

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE){
    header("Location:index.html");
}
else{

}

?>