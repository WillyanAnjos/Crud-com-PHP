<?php
    include('conexao.php');
    include('verificarLogado.php');

    
    if($con){
        //Dados recebidos do outro formulário
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $curso = htmlspecialchars($_POST['curso']);

        //Query que faz a inserção dos dados na tabela
        $sql = "INSERT INTO tb_alunos (nome,email, curso) VALUES ('$nome','$email','$curso')";
        //Verifica se a inserção foi concluida
        if($con->query($sql) === true){
            header('Location: ../menu.php');
        }
    }

?>