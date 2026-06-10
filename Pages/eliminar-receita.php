<?php

// Inicia a sessão
session_start();

// Verifica se o utilizador fez login
if (!isset($_SESSION['utilizador_id'])) {

    // Se não fez login,
    // não pode aceder a esta página. Volta para a página de login
    header('Location: login.php');
    exit;
}

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