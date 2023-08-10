<?php
    //CONEXÃO COM O BANCO DE DADOS
    $host = "localhost";
    $dbname = "agenda";
    $user = 'root';
    $pass = '';

    try{ 
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //ATIVAR O MODO DE ERROS
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        //ERRO NA CONEXÃO
        $error = $e->getMessage();
        echo "ERROR : $error"; 
    }