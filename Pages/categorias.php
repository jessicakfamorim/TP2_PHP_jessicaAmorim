<?php

$tituloPagina = "Categorias";
$paginaAtual = "categorias";

require '../Config/database.php';

session_start();

// Busca todas as categorias
$sql = "SELECT * FROM categoria";

$stmt = $pdo->query($sql);

$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>
    <div class="container my-5">
        <div class="page-hero">

            <h1 class="fw-bold">Categorias</h1>

            <div class="divider"></div>
            <p>Gerir categorias</p>

        </div>

        <?php if (isset($_SESSION['utilizador_id'])): ?>
        <div class="mb-4 text-end">
            <br>
            <a href="nova-categoria.php" class="btn-simpa">Nova Categoria</a>
        </div>
        <?php endif; ?>

        <!-- Tabela -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>

                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td>
                                <?= $categoria['id'] ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($categoria['nome']) ?>
                            </td>
                            <td>
                                <a href="editar-categoria.php?id=<?= $categoria['id'] ?>"
                                class="btn-simpa">Editar</a>

                                <a href="eliminar-categoria.php?id=<?= $categoria['id'] ?>"
                                class="btn-simpa" onclick="return confirm('Tem certeza que deseja eliminar esta categoria?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</main>

<?php include 'content/footer.php'; ?>

    