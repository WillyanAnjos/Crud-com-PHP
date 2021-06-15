<?php
    //Verifica se está logado como adm
    include('./php/verificarLogado.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="topo">
            <a href="inserirAluno.php">Inserir aluno</a>
            <a href="./php/sair.php">Sair</a><br><br>
        </div>

        <div class="tabela">
            <table border="1px">

                <?php

                    //Inclui o arquivo de conexão com o banco de dados
                    include ('./php/conexao.php');
                    //Verifica se esta conectado
                    if($con){
                        //Executa uma instrução para pegar todos os itens da tabela
                        $sql = 'SELECT * FROM tb_alunos';
                        //Atribui os resultado a uma lista
                        $resultado = $con->query($sql);
                        //Verifica se existe mais de 1 linha
                        if($resultado->num_rows > 0){

                           echo'<tr>';
                           echo'<th>Cód</th>';
                           echo'<th>Nome</th>';
                           echo'<th>E-mail</th>';
                           echo'<th>Curso</th>';
                           echo'<th colspan="2">Opções</th>';
                           echo'</tr>';
                           //Transformar tudo dentro de uma lista
                            while($linha = $resultado->fetch_assoc()){
                                echo '<tr>';
                                echo '<td>'.$linha['codigo'].'</td>';
                                echo '<td>'.$linha['nome'].'</td>';
                                echo '<td>'.$linha['email'].'</td>';
                                echo '<td>'.$linha['curso'].'</td>';
                                echo '<td><a href="editarAluno.php?codigo='.$linha['codigo'].'">Editar</a></td>';
                                echo '<td><a href="./php/deletarAluno.php?codigo='.$linha['codigo'].'">Excluir</a></td>';
                                echo '</tr>';
                            }
                        }else{
                            echo '<h3>Sem dados no momento</h3>';
                        }

                    }
                ?>

            </table>
        </div>
    </section>
</body>

</html>