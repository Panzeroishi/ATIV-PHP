<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "teste";
    $conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));
    mysqli_select_db($conexao, $banco) or die. "Erro ao conectar"; 
    ?>

    <?php
    $conectar = mysqli_query($conexao, "SELECT * FROM usuarios2") or die. "Falha ao conectar";

    foreach($conectar as $indice){
        foreach($indice as $indice2){

            echo $indice2."<br>";
        }
    }

   /* echo $conectar['name_cliente'];
    echo $conectar['senha_cliente'];
    echo $conectar['email_cliente'];
    echo $conectar['id_cliente'];*/
    ?>