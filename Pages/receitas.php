<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Receitas";
$paginaAtual = "receitas";
?>

<?php
// Importa o ficheiro database.php
// Esse ficheiro cria a ligação entre o PHP e a base de dados MySQL
require '../Config/database.php';
// Guarda numa variável o comando SQL que queremos executar
// Neste caso estamos a pedir todas as receitas da tabela receitas
$sql = "SELECT * FROM receitas";
// Executa o comando SQL na base de dados
// O resultado fica guardado na variável $stmt
$stmt = $pdo->query($sql);
// Busca todos os registos encontrados
// Cada receita será guardada num array associativo
$receitas = $stmt->fetchAll(PDO::FETCH_ASSOC); 

?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

    <main>

        <div class="container my-5">

            <div class="page-hero">
                <h1 class="fw-bold">
                    Receitas
                </h1>
                <div class="divider"></div>
                <p>Descobre receitas deliciosas para todas as ocasiões</p>
            </div>
            <div class="section-divider"></div>

            <input type="text" id="pesquisaReceita" placeholder="Pesquisar por bolo, cookies, brigadeiro..."
                class="form-control mb-4">

            <div class="d-flex justify-content-end mb-4">
                <a href="nova-receita.php" class="btn-simpa">Adicionar Receita</a>
            </div>

                

            <!-- Lista de receitas -->
                <!-- Cards -->
            
            <div id="listaReceitas" class="row g-4">

                <?php foreach ($receitas as $receita): ?>

                    <div class="col-12 col-md-4 receita">

                        <div class="card h-100 shadow-sm">

                            <img src="../Assets/Imagens/Receitas/<?= htmlspecialchars($receita['imagem']) ?>"
                                class="card-img-top"
                                alt="<?= htmlspecialchars($receita['titulo']) ?>">

                            <div class="card-body">

                                <h5 class="card-title">
                                    <?= htmlspecialchars($receita['titulo']) ?>
                                </h5>

                                <p class="card-text">
                                    <?= htmlspecialchars($receita['origem']) ?>
                                </p>
                                <p><?= $receita['imagem'] ?></p>

                                <a href="ver-receita.php?id=<?= $receita['id'] ?>" class="btn-simpa">Ver receita</a>               
                                <a href="editar-receita.php?id=<?= $receita['id'] ?>" class="btn-simpa">Editar</a>
                                <a href="eliminar-receita.php?id=<?= $receita['id'] ?>"class="btn-simpa">Eliminar</a>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

                <!-- Botão "Ver mais" -->
                <div class="text-center mt-4">
                    <button id="verMais" class="btn-simpa mt-4">Ver mais</button>
                </div>


            </div>

        </div>
    </main>

    <?php include 'content/footer.php'; ?>