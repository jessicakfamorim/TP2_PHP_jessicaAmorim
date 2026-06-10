<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Sobre";
$paginaAtual = "sobre";
?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

    <main>

        <section class="sobre-hero container">
            <div class="sobre-texto">
                <h1>O meu livro de receitas <em>especiais</em></h1>
                <p>Este é o meu cantinho doce, onde guardo e partilho receitas que fazem parte da minha história, aquelas que marcaram momentos especiais e que continuam a trazer conforto em cada preparo.</p>
                <p>Simples, prático e sempre disponível.</p>
                <a href="receitas.php" class="btn btn-simpa" style="margin-top:1rem;">Ver Receitas</a>
            </div>
            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80" alt="Baker" />
        </section>

        <!-- VALORES -->
        <section class="valores">
            <h2>Os Nossos Valores</h2>
            <div class="divider"></div>
            <div class="valores-grid">
                <div class="valor-card">
                    <div class="valor-icon"><i class="fa-solid fa-heart"></i></div>
                    <h3>Com Amor</h3>
                    <p>Cada receita é testada com cuidado e partilhada com genuíno afeto.</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icon"><i class="fa-solid fa-seedling"></i></div>
                    <h3>Ingredientes Simples</h3>
                    <p>Valorizamos o uso de produtos naturais e locais.</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icon"><i class="fa-solid fa-users"></i></div>
                    <h3>Comunidade</h3>
                    <p>Queremos criar uma comunidade calorosa onde todos aprendem e se inspiram mutuamente.</p>
                </div>
            </div>
        </section>

        <!-- NÚMEROS -->
        <section class="numeros">
            <div class="numeros-grid">
                <div class="numero-item">
                    <h3>120+</h3>
                    <p>Receitas publicadas</p>
                </div>
                <div class="numero-item">
                    <h3>50k</h3>
                    <p>Seguidores</p>
                </div>
                <div class="numero-item">
                    <h3>30+</h3>
                    <p>Tutoriais em vídeo</p>
                </div>
                <div class="numero-item">
                    <h3>5★</h3>
                    <p>Avaliação média</p>
                </div>
            </div>
        </section>

        <!-- EQUIPA -->
        <section class="equipa container">
            <h2>A Nossa Equipa</h2>
            <div class="divider"></div>
            <div class="equipa-grid">

                <div class="membro">
                    <img src="../Assets/Imagens/Equipa/jessica.jpg" alt="Jessica" />
                    <h3>Jessica Amorim</h3>
                    <span>Fundadora</span>
                </div>
                <div class="membro">
                    <img src="../Assets/Imagens/Equipa/cleiton.jpeg" alt="Cleiton" />
                    <h3>Cleiton Domazak</h3>
                    <span>Desgustador</span>
                </div>
            </div>
        </section>

    </main>

    <?php include 'content/footer.php'; ?>