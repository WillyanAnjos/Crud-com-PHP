<?php

    //Destroi a sessão atual e apaga tudo
    session_start();
    session_destroy();
    //Volta para a página index
    header('Location: ../index.html');
?>