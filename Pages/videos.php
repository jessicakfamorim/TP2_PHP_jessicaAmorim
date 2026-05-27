<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Tutoriais";
$paginaAtual = "videos";
?>

<?php include 'content/head.php'; ?>
<?php include 'content/header.php'; ?>
<?php include 'content/nav.php'; ?>

<main>

    <!-- HERO -->
    <div class="page-hero">
        <h1 class="fw-bold">Tutoriais</h1>
        <div class="divider"></div>
        <p>Aprende passo a passo com as nossas técnicas de pastelaria</p>
    </div>

    <!-- FILTROS -->
    <div class="filtros-wrapper">
        <button class="filtro-btn ativo" data-filtro="todos">Todos</button>
        <button class="filtro-btn" data-filtro="decoracao">
            <i class="fa-solid fa-cake-candles me-1"></i>Decoração
        </button>
        <button class="filtro-btn" data-filtro="massas">
            <i class="fa-solid fa-bread-slice me-1"></i>Massas
        </button>
        <!--button class="filtro-btn" data-filtro="cremes">
                <i class="fa-solid fa-ice-cream me-1"></i>Cremes & Coberturas
            </!--button-->
        <!--button class="filtro-btn" data-filtro="tecnicas">
                <i class="fa-solid fa-star me-1"></i>Técnicas Base
            </!--button-->
    </div>

    <div class="container pb-5">

        <!-- ═══════════════════════════════════ -->
        <!--  CATEGORIA: DECORAÇÃO               -->
        <!-- ═══════════════════════════════════ -->
        <section class="categoria-section mb-5" data-categoria="decoracao">
            <h2 class="categoria-titulo" style="font-family:'Georgia',serif;">
                <i class="fa-solid fa-cake-candles me-2" style="color:#f2c4ce;"></i>Decoração
            </h2>
            <div class="categoria-linha"></div>
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="video-card card h-100" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-titulo="Flores em Pasta de Açúcar"
                        data-descricao="Aprende a fazer rosas, peónias e folhas delicadas para decorar os teus bolos."
                        data-duracao="2 min" data-nivel="Iniciante"
                        data-video="https://www.youtube.com/embed/2j-EJB_ghDI">
                        <div class="video-thumb">

                            <img src="https://images.unsplash.com/photo-1599334102985-f222a3512019?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHN1Z2FyJTIwcm9zZSUyMGNha2V8ZW58MHx8MHx8fDA%3D"
                                alt="Flores em pasta de açúcar">
                            <div class="thumb-overlay">
                                <div class="play-circle"><i class="fa-solid fa-play"></i></div>
                            </div>
                            <span class="duracao">2:00</span>
                        </div>
                        <div class="card-body">
                            <p class="nivel-badge mb-1">Iniciante</p>
                            <h5 class="card-title">Flores em Pasta de Açúcar</h5>
                            <p class="card-text">Rosas, peónias e folhas delicadas para decorar os teus bolos como
                                uma profissional.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="video-card card h-100" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-titulo="Cookies com gotas de chocolate"
                        data-descricao="A consistência certa para delinear e preencher cookies com gotas de chocolate."
                        data-duracao="6 min" data-nivel="Iniciante"
                        data-video="https://www.youtube.com/embed/lJ7Ec3bKrxM">
                        <div class="video-thumb">
                            <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=500&q=80"
                                alt="Cookies">
                            <div class="thumb-overlay">
                                <div class="play-circle"><i class="fa-solid fa-play"></i></div>
                            </div>
                            <span class="duracao">6:00</span>
                        </div>
                        <div class="card-body">
                            <p class="nivel-badge mb-1">Iniciante</p>
                            <h5 class="card-title">Cookies com gotas de chocolate</h5>
                            <p class="card-text">A consistência certa para delinear e preencher cookies com gotas de
                                chocolate.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="video-card card h-100" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-titulo="Bolo de 2 Andares: Estrutura"
                        data-descricao="Técnicas profissionais para montar um bolo de andares estável e elegante."
                        data-duracao="10 min" data-nivel="Avançado"
                        data-video="https://www.youtube.com/embed/N3PfcZhwpuI">
                        <div class="video-thumb">
                            <img src="../Assets/Imagens/Receitas/bolo-andares.png" alt="Bolo andares">
                            <div class="thumb-overlay">
                                <div class="play-circle"><i class="fa-solid fa-play"></i></div>
                            </div>
                            <span class="duracao">10:20</span>
                        </div>
                        <div class="card-body">
                            <p class="nivel-badge mb-1" style="color:#8b5a4a;">Avançado</p>
                            <h5 class="card-title">Bolo de 2 Andares: Estrutura</h5>
                            <p class="card-text">Técnicas profissionais para montar um bolo de andares estável e
                                elegante.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ═══════════════════════════════════ -->
        <!--  CATEGORIA: MASSAS                  -->
        <!-- ═══════════════════════════════════ -->
        <section class="categoria-section mb-5" data-categoria="massas">
            <h2 class="categoria-titulo" style="font-family:'Georgia',serif;">
                <i class="fa-solid fa-bread-slice me-2" style="color:#f2c4ce;"></i>Massas
            </h2>
            <div class="categoria-linha"></div>
            <div class="row g-4">

                <!-- Card 4 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="video-card card h-100" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-titulo="Pão Caseiro com sementes"
                        data-descricao="Aprende a fazer Pão Caseiro com sementes, com uma crosta perfeita e bem crocante."
                        data-duracao="9 min" data-nivel="Avançado"
                        data-video="https://www.youtube.com/embed/b5BFPu0NCN8">
                        <div class="video-thumb">
                            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=500&q=80"
                                alt="Massa folhada">
                            <div class="thumb-overlay">
                                <div class="play-circle"><i class="fa-solid fa-play"></i></div>
                            </div>
                            <span class="duracao">9:00</span>
                        </div>
                        <div class="card-body">
                            <p class="nivel-badge mb-1" style="color:#8b5a4a;">Avançado</p>
                            <h5 class="card-title">Pão Caseiro com sementes</h5>
                            <p class="card-text">Aprende a fazer Pão Caseiro com sementes, com uma crosta perfeita e
                                bem crocante.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="video-card card h-100" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-titulo="Macarons Franceses"
                        data-descricao="Do merengue à ganache, todos os passos para macarons perfeitos."
                        data-duracao="8 min" data-nivel="Intermédio"
                        data-video="https://www.youtube.com/embed/sBr2YBte7oQ">
                        <div class="video-thumb">
                            <img src="https://images.unsplash.com/photo-1702745571735-937e55652374?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="
                                    Macarons">
                            <div class="thumb-overlay">
                                <div class="play-circle"><i class="fa-solid fa-play"></i></div>
                            </div>
                            <span class="duracao">8:25</span>
                        </div>
                        <div class="card-body">
                            <p class="nivel-badge mb-1" style="color:#c49080;">Intermédio</p>
                            <h5 class="card-title">Macarons Franceses</h5>
                            <p class="card-text">Do merengue à ganache — a receita definitiva para macarons
                                perfeitos.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>



    <div class="modal fade" id="videoModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div id="videoContainer" class="video-container"></div>

                    <p id="modalDescricao" class="mt-3"></p>

                    <div id="modalMeta" class="modal-meta"></div>

                </div>

            </div>
        </div>
    </div>
</main>

<?php include 'content/footer.php'; ?>