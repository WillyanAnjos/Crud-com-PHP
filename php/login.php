<?php

    //Dados recebidos do formulário Index.html
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    //Login do adm
    if($email == "adm@gmail.com" && $senha == '1234'){
        session_start();
        $_SESSION['ADMIN'] = 'ADMIN';
        header('Location: ../menu.php');
    }else{
        header('Location: ../index.html');  
    }

?>