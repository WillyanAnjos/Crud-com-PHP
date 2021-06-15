<?php
    //Conexão com o banco de dados
    include('conexao.php');
    //Verifica se o usuário está logado como admin
    include('verificarLogado.php');

    //Dados recebidos do formulário de edição
    $codigo = htmlspecialchars($_POST['codigo'  ]);
    $nome   = htmlspecialchars($_POST['nome'    ]);
    $email  = htmlspecialchars($_POST['email'   ]);
    $curso  = htmlspecialchars($_POST['curso'   ]);

    //Query de atualização no banco de dados
    $sql = "UPDATE tb_alunos SET nome='$nome', email='$email', curso='$curso' WHERE codigo =$codigo";
    //Verifica se foi aprovada a inserção
    if($con->query($sql) === true){
        header('Location: ../menu.php');
    }
    
?>