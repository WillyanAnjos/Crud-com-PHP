<?php

    //Configurações de usuário e endereço
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "base_dados";
    //Conexão com o banco
    $con = new mysqli($host, $user, $pass,$db);

    //Verifica se está desconectado com o banco
    if(!$con){
        echo 'Não foi possível conectar ao banco de dados';
    }

?>