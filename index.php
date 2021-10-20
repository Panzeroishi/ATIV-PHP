
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Home</title>
</head>
<body>
    <style>
        .flex-box{
            display: flex;
            border: black 2px solid;
            flex-direction: column;
        }
    </style>
    <div class="flex-box">

        <form action="conexao.php" method="post">
            
            <label for="name">Insira os nomes</label>
            <input type="text" name="nome_cliente">
            
            
            
            <label for="email">Insira o email</label>
            <input type="email" name="email_cliente">
            
            
            
            
            <label for="senha">Insira sua senha</label>
            <input type="password" name="senha_cliente">
            
            <button type="submit">Enviar</button>
        </form>
        <a href="lista.php">Listar dados</a>
    </div>

</body>
</html>





<?php






?>