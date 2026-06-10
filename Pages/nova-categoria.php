<?php
session_start();

// Verifica se o utilizador fez login
if (!isset($_SESSION['utilizador_id'])) {
    header('Location: login.php');
    exit;
}

require '../Config/database.php';

// Só executa quando o formulário é enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Guarda o nome enviado pelo formulário
    $nome = $_POST['nome'];

    // Comando SQL para inserir uma nova categoria
    $sql = "INSERT INTO categoria (nome)
            VALUES (:nome)";

    // Prepara o comando SQL
    $stmt = $pdo->prepare($sql);

    // Executa o INSERT
    $stmt->execute([
        'nome' => $nome
    ]);

    // Volta para a lista de categorias
    header('Location: categorias.php');
    exit;
}
?>
<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>
    <div class="container my-5">
        <div class="page-hero">
            <h1 class="fw-bold">Nova Categoria</h1>

            <div class="divider"></div>
            <p>Adicionar uma nova categoria</p>
        </div>

        <form method="POST">
            <div class="mb-4">
                <label class="form-label">Nome da Categoria</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <button type="submit" class="btn-simpa">Guardar Categoria</button>
        </form>
    </div>
</main>

<?php include 'content/footer.php'; ?>