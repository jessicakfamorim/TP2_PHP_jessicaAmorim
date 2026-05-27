<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Receitas";
$paginaAtual = "receitas";
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

            <!-- Lista de receitas -->

            <div id="listaReceitas" class="row g-4">


                <!-- Cards -->

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/bolo-chocolate.jpg" class="card-img-top"
                            alt="Bolo de chocolate">

                        <div class="card-body">
                            <h5 class="card-title">Bolo de Chocolate</h5>
                            <p class="card-text">Fofinho e com aquele gostinho da casa da vó.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/bolo-baunilha-morango.jpg" class="card-img-top"
                            alt="Bolo de morango">

                        <div class="card-body">
                            <h5 class="card-title">Bolo de morango</h5>
                            <p class="card-text">O equilíbrio perfeito entre doce e azedo.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/cupcake-framboesa.jpeg" class="card-img-top"
                            alt="Cupcake de framboesa">

                        <div class="card-body">
                            <h5 class="card-title">Cupcakes de Framboesa</h5>
                            <p class="card-text">Simples, fofinhos e perfeitos para qualquer ocasião.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/tarte-limao.jpg" class="card-img-top" alt="Tarte de Lima">

                        <div class="card-body">
                            <h5 class="card-title">Tarte de lima</h5>
                            <p class="card-text">Aquela sobremesa que surpreende em qualquer ocasião</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/cookies.jpg" class="card-img-top" alt="Cookies">

                        <div class="card-body">
                            <h5 class="card-title">Cookies</h5>
                            <p class="card-text">Com gotas de chocolate. Crocantes por fora e macios por dentro</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/brigadeiro.jpg" class="card-img-top" alt="Brigadeiro">

                        <div class="card-body">
                            <h5 class="card-title">Brigadeiro</h5>
                            <p class="card-text">Um clássico brasileiro que a criançada ama.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/bolo-cenoura.jpeg" class="card-img-top"
                            alt="Bolo de cenoura">

                        <div class="card-body">
                            <h5 class="card-title">Bolo de Cenoura</h5>
                            <p class="card-text">Com cobertura de chocolate. Tradicional, fofinho, húmido e delicioso.
                            </p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/pudim.jpg" class="card-img-top" alt="Pudim">

                        <div class="card-body">
                            <h5 class="card-title">Pudim de leite condensado</h5>
                            <p class="card-text">Com calda de caramelo. Suave e doce na medida.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/brownie.jpg" class="card-img-top" alt="Brownie">

                        <div class="card-body">
                            <h5 class="card-title">Brownie</h5>
                            <p class="card-text">Chocolate com sabor intenso de marcante.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/cheesecake.jpg" class="card-img-top" alt="Cheesecake">

                        <div class="card-body">
                            <h5 class="card-title">Cheesecake de Frutos Vermelhos</h5>
                            <p class="card-text">Simples, fofinhos e perfeitos para qualquer ocasião.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/apple-pie.jpg" class="card-img-top" alt="Apple pie">

                        <div class="card-body">
                            <h5 class="card-title">Tarte de Maça</h5>
                            <p class="card-text">Para servir quentinha, com gelado de baunilha ou chantily</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4 receita">
                    <div class="card h-100 shadow-sm">

                        <img src="../Assets/Imagens/Receitas/tarte-morango.jpeg" class="card-img-top"
                            alt="Tarte Morango">

                        <div class="card-body">
                            <h5 class="card-title">Tarte de morango e chocolate</h5>
                            <p class="card-text">A melhor dupla de sempre. Agrada a toda a gente.</p>
                            <a href="#" class="btn-simpa">Ver receita</a>
                        </div>

                    </div>
                </div>


                <!-- Botão "Ver mais" -->
                <div class="text-center mt-4">
                    <button id="verMais" class="btn-simpa mt-4">Ver mais</button>
                </div>


            </div>

        </div>
    </main>

    <?php include 'content/footer.php'; ?>