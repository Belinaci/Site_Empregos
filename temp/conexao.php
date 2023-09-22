<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'athon';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    // {
    //    echo "Erro ao conectar no banco de dados";
    // }
    // else
    // {
    //    echo "Conexão efetuada com sucesso";
    // }

?>