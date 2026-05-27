<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Simpa Baker";
$paginaAtual = "home";
?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>


    <!-- MAIN -->
    <main>
        <!-- HERO -->
        <div class="hero d-flex align-items-center text-white">
            <div class="container text-start">
                <!-- Título principal -->
                <h1 class="fw-bold">O meu livro digital de receitas</h1>
                <!-- Texto -->
                <p>Um espaço doce para revisitar receitas especiais</p>
                <!-- Botao -->
                <a href="receitas.html" class="btn btn-custom mt-3">Ver receitas</a>
            </div>
        </div>

        <!-- CATEGORIAS -->
        <div class="container text-center my-5">

            <!-- Titulo da secçao -->
            <h2 class="section-title">Categorias</h2>
            <div class="section-divider"></div>
            <!-- Grid -->
            <div class="row justify-content-center g-4">

                <!-- Categoria -->
                <div class="col-6 col-md-3">
                    <div class="categoria">
                        <i class="bi bi-cake2"></i>
                        <p>Bolos</p>
                    </div>
                </div>
                <!-- Repeticao -->
                <div class="col-6 col-md-3">
                    <div class="categoria">
                        <i class="bi bi-heart-fill"></i>
                        <p>Recheios</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="categoria">
                        <i class="bi bi-emoji-grin"></i>
                        <p>Sobremesas</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="categoria">
                        <i class="bi bi-cookie"></i>
                        <p>Cookies</p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <?php include 'content/footer.php'; ?>