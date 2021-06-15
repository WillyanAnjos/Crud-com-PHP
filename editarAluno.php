
<?php  
    include('./php/conexao.php');
    include('./php/verificarLogado.php');
    
    $codigo = htmlspecialchars($_GET['codigo']);
    $nome   = "";
    $email  = "";
    $curso  = "";

    if($con){
        $sql = "SELECT * FROM tb_alunos WHERE codigo=$codigo";

        $resultado = $con->query($sql);

        if($resultado->num_rows > 0){
            while($linha = $resultado->fetch_assoc()){
                $nome   = $linha['nome' ];
                $email  = $linha['email'];
                $curso  = $linha['curso'];
            }
        }
    }

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
            <form action="./php/salvarEdicao.php" method="post">

                <input type="hidden" name="codigo" value="<?php echo $codigo;?>">
                <p>Nome</p>
                <input type="text" name="nome" value="<?php echo $nome;?>" id="nome"> <br>
                <p>E-mail</p>
                <input type="email" name="email"  value="<?php echo $email;?>" id="email"> <br>
                <p>Curso</p>
                <input type="text" name="curso"  value="<?php echo $curso;?>"id="curso"> <br><br>

                <input type="submit" value="Salvar Edição">
                <a href="menu.php">Cancelar</a>
            </form>
        </div>
    </section>
</body>
</html>