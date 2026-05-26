<?php include 'content/head.php';?>

<?php include 'content/header.php';?>

<?php include 'content/nav.php';?>

    <main>

        <!-- HERO -->
          <div class="page-hero">
            <h1>Receita da semana</h1>
            <div class="divider"></div>
            <p>Uma receita especial para adoçar a sua semana</p>
        </div>

        <!-- Receita Principal -->
        <section class="container my-5">
            <div class="row align-items-center">

                <!-- Imagem da receita -->
                <div class="col-md-6">
                    <img src="../Assets/Imagens/Receitas/bolo-chocolate.jpg" class="img-fluid rounded"
                        alt="bolo de chocolate">
                </div>

                <!-- Informacoes sobre a receita -->
                <div class="col-md-6">
                    <h2 class="section-title text-start">Bolo de Chocolate</h2>
                    <p>Uma receita simples, perfeita para qualquer ocasião.</p>

                    <ul>
                        <li>⏱ Tempo: 40 min</li>
                        <li>👩‍🍳 Dificuldade: Fácil</li>
                        <li>🍰 Porções: 15</li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- Ingredientes e Preparo -->
        <section class="container my-5">
            <div class="row">

                <!-- Ingredientes -->
                <div class="col-md-6">
                    <h3>Ingredientes</h3>
                    <ul>
                        <li>4 ovos (200g)</li>
                        <li>200ml de óleo</li>
                        <li>170ml de leite integral</li>
                        <li>220g de açúcar</li>
                        <li>45g de cacau 100%</li>
                        <li>150g de maçã fuji</li>
                        <li>250g de farinha de trigo</li>
                        <li>10g de fermento em pó</li>
                        <li>5g de bicarbonato de sódio</li>
                    </ul>
                </div>

                <!-- Modo de Preparo -->
                <div class="col-md-6">
                    <h3>Modo de Preparo</h3>
                    <ol>
                        <li>Pré-aquecer o forno a 180 graus Celsius;</li>
                        <li>Bater no liquidificador os ovos, óleo,
                            açúcar, leite, cacau em pó e a maçã cortada em
                            pedaços pequenos.
                            Bata até ficar homogêneo e transfira a mistura
                            para uma vasilha. Por cima da mistura peneire a
                            farinha de trigo e mexa delicadamente até
                            envolver tudo, e por último, acrescente o fermento
                            em pó e o bicarbonato de sódio;</li>

                        <li>Assar por aproximadamente 35 minutos.</li>
                    </ol>
                </div>

            </div>
        </section>

        <!-- Dica -->
        <section class="container my-5 text-center">
            <div class="p-4 rounded" style="background-color: var(--verde);">
                <h4>Dica</h4>
                <p>Use cacau de boa qualidade para um sabor mais intenso.</p>
            </div>
        </section>

        <!-- CTA -->
        <section class="text-center my-5">
            <a href="receitas.html" class="btn-simpa">Ver mais receitas</a>
        </section>

    </main>

    <?php include 'content/footer.php'; ?>