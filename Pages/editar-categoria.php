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

// Só executa este bloco quando o formulário é enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vai buscar o id da categoria na URL
    $id = $_GET['id'];

    // Guarda o nome enviado pelo formulário
    $nome = $_POST['nome'];

    // Comando SQL para atualizar a categoria
    // Apenas a categoria com o id recebido será alterada
    $sql = "UPDATE categoria
            SET nome = :nome
            WHERE id = :id";

    // Prepara o comando SQL
    $stmt = $pdo->prepare($sql);

    // Executa o UPDATE substituindo os parâmetros
    $stmt->execute([
        'nome' => $nome,
        'id' => $id
    ]);

    // Depois de guardar as alterações,
    // volta automaticamente para a página de categorias
    header('Location: categorias.php');

    // Interrompe a execução do PHP
    exit;
}

// Vai buscar o id que veio na URL
$id = $_GET['id'];

// Procurar apenas a categoria com o id recebido
$sql = "SELECT * FROM categoria WHERE id = :id";

// Prepara o comando SQL
// O PHP analisa a query antes de executar
$stmt = $pdo->prepare($sql);

// Executa a query substituindo :id pelo valor guardado em $id
$stmt->execute([
    'id' => $id
]);

// Busca os dados da categoria encontrada
// O PHP cria um array associativo
$categoria = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>
    <div class="container my-5">
        <div class="page-hero">
            <h1 class="fw-bold">Editar Categoria</h1>

            <div class="divider"></div>
            <p>Editar categoria</p>
        </div>

        <!-- O method="POST" diz que vamos enviar dados -->
        <form method="POST">
            <div class="mb-3">

                <label class="form-label">Nome da Categoria</label>

                <input type="text"  name="nome" class="form-control" value="<?= htmlspecialchars($categoria['nome']) ?>"required>
            </div>

            <button type="submit" class="btn-simpa">Guardar Categoria</button>
        </form>
    </div>
</main>

<?php include 'content/footer.php'; ?>