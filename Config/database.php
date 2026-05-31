<?php

$host = "127.0.0.1";
$user = "root";
$password = "Jeka.121826";
$database = "simpa_baker";

try {
    // Cria a ligação entre o PHP e a base de dados
    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $user,
        $password
    );

    // Faz com que os erros da base de dados gerem exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    // Interrompe o programa se não for possível ligar à base de dados
    die("Erro na ligação à base de dados: " . $e->getMessage());
}
