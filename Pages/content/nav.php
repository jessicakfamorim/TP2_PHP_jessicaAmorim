            <?php
            // Se a sessão não foi iniciada: session_start, se ja foi, não faz nada.
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
                }
            ?>
            
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg" data-bs-theme="light">
                <div class="container">
                    <!-- Botao mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menu -->
                    <div class="collapse navbar-collapse justify-content-center" id="menu">

                        <ul class="navbar-nav gap-4">

                            <!-- Links -->
                            <!-- Menu principal reutilizado em todas as paginas -->
                            <!-- A classe active e adicionada quando a pagina atual corresponde ao link -->

                            <li class="nav-item">
                                <!-- Se a variável $paginaAtual existir e corresponder ao link, adiciona a classe active -->
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "home") echo "active"; ?>"
                                    href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "sobre") echo "active"; ?>"
                                    href="sobre_nos.php">Sobre</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "receitas") echo "active"; ?>"
                                    href="receitas.php">Receitas</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "videos") echo "active"; ?>"
                                    href="videos.php">Tutoriais</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "receita_semana") echo "active"; ?>"
                                    href="receita-da-semana.php">Receita da semana</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if (isset($paginaAtual) && $paginaAtual == "contactos") echo "active"; ?>"
                                    href="contactos.php">Contacto</a>
                            </li>

                            <li class="nav-item">

                                <?php if (isset($_SESSION['utilizador_id'])): ?>
                                        <li class="nav-item">
                                            <span class="nav-link">Olá, <?= htmlspecialchars($_SESSION['nome']) ?></span>
                                        </li>

                                        <li class="nav-item">
                                            <a href="logout.php" class="btn-simpa">Logout</a>
                                        </li>
                                    <?php else: ?>
                                        <li class="nav-item">
                                            <a href="login.php" class="btn-simpa">Login</a>
                                        </li>
                                <?php endif; ?>

                            </li>                       
                        </ul>
                    </div>
                </div>
            </nav>
            </header>