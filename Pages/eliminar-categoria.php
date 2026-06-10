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

// Importa o ficheiro responsável pela ligação à base de dados
require '../Config/database.php';

// Vai buscar o id da categoria na URL
$id = $_GET['id'];

// Comando SQL para eliminar a categoria
$sql = "DELETE FROM categoria
        WHERE id = :id";

// Prepara o comando SQL
$stmt = $pdo->prepare($sql);

// Executa o DELETE substituindo :id pelo valor recebido
$stmt->execute([
    'id' => $id
]);

// Depois de eliminar,
// volta automaticamente para a página de categorias
header('Location: categorias.php');

// Interrompe a execução do PHP
exit;