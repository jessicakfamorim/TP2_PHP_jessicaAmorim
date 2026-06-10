<?php

require '../Config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $titulo = $_POST['titulo'];
    $ingredientes = $_POST['ingredientes'];
    $modo_preparo = $_POST['modo_preparo'];
    $tempo_preparo = $_POST['tempo_preparo'];
    $rendimento = $_POST['rendimento'];
    $origem = $_POST['origem'];
    $imagem = $_FILES['imagem']['name'];
    $categoria_id = $_POST['categoria_id'];

    $sql = "INSERT INTO receitas
    (
        titulo,
        ingredientes,
        modo_preparo,
        tempo_preparo,
        rendimento,
        origem,
        imagem,
        categoria_id
    )

    VALUES
    (
        :titulo,
        :ingredientes,
        :modo_preparo,
        :tempo_preparo,
        :rendimento,
        :origem,
        :imagem,
        :categoria_id
    )";

    $stmt = $pdo->prepare($sql);

    // Guarda a imagem enviada pelo utilizador na pasta Assets/Imagens/Receitas
    $pastaDestino = __DIR__ . "/../Assets/Imagens/Receitas/";

    move_uploaded_file(
    $_FILES['imagem']['tmp_name'],
    $pastaDestino . $imagem
    );

    $stmt->execute([
        'titulo' => $titulo,
        'ingredientes' => $ingredientes,
        'modo_preparo' => $modo_preparo,
        'tempo_preparo' => $tempo_preparo,
        'rendimento' => $rendimento,
        'origem' => $origem,
        'imagem' => $imagem,
        'categoria_id' => $categoria_id
    ]);

    // Ao clicar em Guardar, a receita é gravada, encaminhar automaticamente para a página de receitas e a receita aparece.
    header('Location: receitas.php');
    exit;
}

$categorias = $pdo->query("SELECT * FROM categoria")->fetchAll(PDO::FETCH_ASSOC);

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

            <p>Adicionar uma nova receita</p>
        </div>

        <!-- O method="POST" diz que vamos enviar dados.
        O enctype="multipart/form-data" diz que além de texto,vamos enviar ficheiros também -->
        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ingredientes</label>
                <textarea name="ingredientes" class="form-control" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Modo de Preparo</label>
                <textarea name="modo_preparo" class="form-control" rows="6" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempo de Preparo</label>
                <input type="text" name="tempo_preparo" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Rendimento</label>
                <input type="text" name="rendimento" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Origem</label>
                <input type="text" name="origem" class="form-control">
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

                        <option value="<?= $categoria['id'] ?>"><?= htmlspecialchars($categoria['nome']) ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn-simpa">Guardar Receita</button>
        </form>
    </div>
</main>

<?php include 'content/footer.php'; ?>
