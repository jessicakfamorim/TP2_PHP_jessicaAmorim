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

    // Vai buscar o id da receita na URL
    $id = $_GET['id'];
    
// Busca a receita atual para obter a imagem guardada
$stmtImagem = $pdo->prepare(
    "SELECT imagem FROM receitas WHERE id = :id"
);

$stmtImagem->execute([
    'id' => $id
]);

$receitaAtual = $stmtImagem->fetch(PDO::FETCH_ASSOC);
    // Guarda os dados enviados pelo formulário
    $titulo = $_POST['titulo'];
    $ingredientes = $_POST['ingredientes'];
    $modo_preparo = $_POST['modo_preparo'];
    $tempo_preparo = $_POST['tempo_preparo'];
    $rendimento = $_POST['rendimento'];
    $origem = $_POST['origem'];
    $imagem = $receitaAtual['imagem'];
        // Se o utilizador escolheu uma nova imagem
        if (!empty($_FILES['imagem']['name'])) {
            $imagem = $_FILES['imagem']['name'];
            $pastaDestino = __DIR__ . "/../Assets/Imagens/Receitas/";
            move_uploaded_file(
                $_FILES['imagem']['tmp_name'],
                $pastaDestino . $imagem
            );
        }
    $categoria_id = $_POST['categoria_id'];

    // Comando SQL para atualizar a receita
    // Apenas a receita com o id recebido será alterada
    $sql = "UPDATE receitas
            SET
            titulo = :titulo,
            ingredientes = :ingredientes,
            modo_preparo = :modo_preparo,
            tempo_preparo = :tempo_preparo,
            rendimento = :rendimento,
            origem = :origem,
            imagem = :imagem,
            categoria_id = :categoria_id
            WHERE id = :id";

    // Prepara o comando SQL
    $stmt = $pdo->prepare($sql);
    // Executa o UPDATE substituindo os parâmetros
    $stmt->execute([
        'titulo' => $titulo,
        'ingredientes' => $ingredientes,
        'modo_preparo' => $modo_preparo,
        'tempo_preparo' => $tempo_preparo,
        'rendimento' => $rendimento,
        'origem' => $origem,
        'imagem' => $imagem,
        'categoria_id' => $categoria_id,
        'id' => $id
    ]);

    // Depois de guardar as alterações,
    // volta automaticamente para a página de receitas
    header('Location: receitas.php');
    // Interrompe a execução do PHP
    exit;
}

// Vai buscar o id que veio na URL
$id = $_GET['id'];



// Procurar apenas a receita com o id recebido
$sql = "SELECT * FROM receitas WHERE id = :id";

// Prepara o comando SQL
// O PHP analisa a query antes de executar
$stmt = $pdo->prepare($sql);

// Executa a query substituindo :id pelo valor guardado em $id
$stmt->execute([
    'id' => $id
]);

// Busca os dados da receita encontrada
// O PHP cria um array associativo
$receita = $stmt->fetch(PDO::FETCH_ASSOC);

// Busca todas as categorias para preencher o select
$categorias = $pdo->query(
    "SELECT * FROM categoria"
)->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>

    <div class="container my-5">

        <div class="page-hero">
            <h1 class="fw-bold">
                Nova Receita
            </h1>

            <div class="divider"></div>

            <p>Editar receita</p>
        </div>

        <!-- O method="POST" diz que vamos enviar dados.
        O enctype="multipart/form-data" diz que além de texto,vamos enviar ficheiros também -->
        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($receita['titulo']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ingredientes</label>
                <textarea name="ingredientes" class="form-control" rows="5" required><?= htmlspecialchars($receita['ingredientes']) ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Modo de Preparo</label>
                <textarea name="modo_preparo" class="form-control" rows="6" required><?= htmlspecialchars($receita['modo_preparo']) ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempo de Preparo</label>
                <input type="text" name="tempo_preparo" class="form-control" value="<?= htmlspecialchars($receita['tempo_preparo']) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Rendimento</label>
                <input type="text" name="rendimento" class="form-control" value="<?= htmlspecialchars($receita['rendimento']) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Origem</label>
                <input type="text" name="origem" class="form-control" value="<?= htmlspecialchars($receita['origem']) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Imagem</label>
                <input type="file" name="imagem" class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label">Categoria</label>
                <select name="categoria_id" class="form-select" required>
                    <option value="">Escolha uma categoria</option>

                    <?php foreach ($categorias as $categoria): ?>

                        <!-- Cria uma opção dentro do select -->
                        <!-- O valor da opção será o id da categoria -->
                    <option value="<?= $categoria['id'] ?>"

                        <?= $categoria['id'] == $receita['categoria_id'] ? 'selected' : '' ?>>
                        <!-- A linha acima verifica se esta categoria é a categoria da receita -->
                        <!-- Se for igual, adiciona automaticamente a palavra "selected" -->
                        <!-- Isso faz com que a categoria apareça selecionada -->

                        <!-- Mostra o nome da categoria ao utilizador -->
                        <!-- htmlspecialchars ransforma caracteres especiais em texto seguro. -->
                        <?= htmlspecialchars($categoria['nome']) ?>                       
                    </option>

                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn-simpa">Guardar Receita</button>
        </form>
    </div>
</main>

<?php include 'content/footer.php'; ?>