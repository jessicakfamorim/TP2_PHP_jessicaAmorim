<?php 
require_once '../Config/database.php';
?>

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
               
            </div>
        </div>

    
    </main>

    <?php include 'content/footer.php'; ?>