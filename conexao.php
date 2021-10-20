
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




    <?php #conectando ao banco
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "teste";
    $conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));
    mysqli_select_db($conexao, $banco) or die. "Erro ao conectar"; 
    
    ?>





    <?php
    #capturando os dados via name dos input vindos do index.php
    $nome = $_POST["nome_cliente"];
    $email = $_POST["email_cliente"];
    $senha = $_POST['senha_cliente'];
    echo $nome;
    echo $email;
    echo $senha;

    #inserindo dentro do banco de dados
    $conectar = mysqli_query($conexao, "INSERT INTO usuarios2(name_cliente, senha_cliente, email_cliente)
    VALUES ('$nome','$email','$senha')");

    ?>

    <a href="index.php">Voltar</a>

</body>
</html>



