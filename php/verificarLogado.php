<?php
    //Inicia a sessão
    session_start();
    //Verifica se existe uma sessão chamada admin
    if(!$_SESSION['ADMIN']){
        header('Location: ./index.html');
    }

?>