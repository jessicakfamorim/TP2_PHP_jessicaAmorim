<?php

$host = "127.0.0.1";
$user = "root";
$password = "Jeka.121826";
$database = "simpa_baker";


// Tenta executar o código seguinte. Se tudo correr bem, continua normalmente.
try {
    // Crimao um projeto PDO, que é a "ponte" entre o PHP e a base de dados.
    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8",
        $user,
        $password
    );

    // Ativar exceções para erros
    // O PDO gera uma exceção com uma mensagem clara e a torna mas fácil de corrigir.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Teste
    // echo "Ligacao realizada com sucesso!";

// Se houver um erro, salta para o catch.
// Mostra a mensagem e interrompe a execução do programa.
} catch (PDOException $e) {
    die("Erro na ligação " . $e->getMessage());
}