<?php
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

      

        <div class="formulario">
            <form action="./php/inserirAluno.php" method="post">
                <p>Nome</p>
                <input type="text" name="nome" id="nome"> <br>
                <p>E-mail</p>
                <input type="email" name="email" id="email"> <br>
                <p>Curso</p>
                <input type="text" name="curso" id="curso"> <br><br>

                <input type="submit" value="Cadastrar Aluno">
                <a href="menu.php">Cancelar</a>
            </form>
        </div>
    </section>
</body>
</html>