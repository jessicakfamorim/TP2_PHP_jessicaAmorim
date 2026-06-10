<?php

require '../Config/database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM receitas WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id
]);

$receita = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>

    <div class="container my-5">

        <h1><?= htmlspecialchars($receita['titulo']) ?></h1>
        <div class="text-center">
            <img src="/TP2_PHP_jessicaAmorim/Assets/Imagens/Receitas/<?= htmlspecialchars($receita['imagem']) ?>"
            class="img-fluid mb-4" alt="<?= htmlspecialchars($receita['titulo']) ?>" style="max-width: 400px;">
        </div>
        <p>
            <strong>Origem:</strong>
            <?= htmlspecialchars($receita['origem']) ?>
        </p>

        <p>
            <strong>Tempo de Preparo:</strong>
            <?= htmlspecialchars($receita['tempo_preparo']) ?>
        </p>

        <p>
            <strong>Rendimento:</strong>
            <?= htmlspecialchars($receita['rendimento']) ?>
        </p>

        <h3>Ingredientes</h3>

        <p>
            <?= nl2br(htmlspecialchars($receita['ingredientes'])) ?>
        </p>

        <h3>Modo de Preparo</h3>

        <p>
            <?= nl2br(htmlspecialchars($receita['modo_preparo'])) ?>
        </p>
    </div>
</main>

<?php include 'content/footer.php'; ?>