<?php

// Importa a ligação à base de dados
require '../Config/database.php';

// Vai buscar o id recebido na URL
$id = $_GET['id'];

// Comando SQL para apagar a receita
$sql = "DELETE FROM receitas WHERE id = :id";

// Prepara o comando SQL
$stmt = $pdo->prepare($sql);

// Executa o DELETE
$stmt->execute([
    'id' => $id
]);

// Volta para a página de receitas
header('Location: receitas.php');
exit;