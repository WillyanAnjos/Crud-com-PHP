<?php

    include('conexao.php');
    include('verificarLogado.php');

    //Recebe o código do aluno, via GET
    $codigo = htmlspecialchars($_GET['codigo']);

    if($con){
        //Executa o sql de Delete para deletar o aluno a partir do código passado
        $sql = "DELETE FROM tb_alunos WHERE codigo='$codigo'";
        if($con->query($sql) === true){
            //Chama outra página
            header('Location: ../menu.php');
        }
    }

?>