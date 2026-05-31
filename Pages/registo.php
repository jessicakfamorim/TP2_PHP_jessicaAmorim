<?php
// Define o titulo da pagina
// O menu não terá nenhum link ativo porque o registo não faz parte da navbar
$tituloPagina = "Registar";
$paginaAtual = "registo";
?>

<?php include __DIR__ . '/../Config/database.php'; ?>

<?php

// Guarda a mensagem que será apresentada dentro do formulário
$mensagem = "";
// Define o tipo visual do alerta Bootstrap: success ou danger
$tipoMensagem = "";

// Só processa os dados se o formulário foi submetido com o método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Trim remove espaços desnecessários antes e depois do nome e do email
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);

    $passwordUtilizador = $_POST['password'];
    $confirmarPassword = $_POST['confirmar_password'];

    // Verifica no servidor se os campos obrigatórios foram preenchidos
    if (empty($nome) || empty($email) || empty($passwordUtilizador) || empty($confirmarPassword)) {
        $mensagem = "Preenche todos os campos obrigatórios.";
        $tipoMensagem = "danger";

        // Verifica se o email tem um formato válido
        // filter_var() aplica um filtro ao valor recebido e devolve false se o texto não tiver um formato de email válido.
        // FILTER_VALIDATE_EMAIL é uma constante nativa do PHP usada para validar se um texto tem o formato esperado de um email.
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Introduz um email válido.";
        $tipoMensagem = "danger";
    } elseif ($passwordUtilizador !== $confirmarPassword) {

        // Guarda a mensagem de erro para apresentar no formulário
        $mensagem = "As passwords não coincidem.";
        $tipoMensagem = "danger";

        // Verifica se a password possui pelo menos 8 caracteres
        // strlen() conta quantos caracteres existem num texto.
    } elseif (strlen($passwordUtilizador) < 8) {
        $mensagem = "A password deve ter pelo menos 8 caracteres.";
        $tipoMensagem = "danger";

    } else {

        // Cria um hash seguro da password antes de a guardar na base de dados
        // PASSWORD_DEFAULT utiliza o algoritmo recomendado pelo PHP
        $passwordHash = password_hash($passwordUtilizador, PASSWORD_DEFAULT);

        // Prepara o comando SQL para inserir um novo utilizador
        // Os pontos de interrogação são espaços reservados para receber os dados
        $sql = "INSERT INTO utilizadores (nome, email, password) VALUES (?, ?, ?)";

        try {
            // Prepara o comando SQL antes de enviar os valores para a base de dados
            $stmt = $pdo->prepare($sql);

            // Executa o comando SQL e associa os valores às interrogações pela mesma ordem
            $stmt->execute([$nome, $email, $passwordHash]);

            // Guarda a mensagem de sucesso para apresentar no formulário
            $mensagem = "Utilizador registado com sucesso.";
            $tipoMensagem = "success";
        } catch (PDOException $e) {

            // O código 23000 indica uma violação de integridade da base de dados.
            // Neste caso, ocorre quando tentamos inserir um email já registado.
            if ($e->getCode() == 23000) {
                // Guarda uma mensagem de erro caso o email já esteja registado
                $mensagem = "Este email já está registado.";
                $tipoMensagem = "danger";
            } else {
                // Guarda uma mensagem genérica caso ocorra outro erro na base de dados
                $mensagem = "Erro ao registar utilizador.";
                $tipoMensagem = "danger";
            }
        }
    }
}

?>

<?php include 'content/head.php'; ?>
<?php include 'content/header.php'; ?>
<?php include 'content/nav.php'; ?>

<main>
    <!-- Titulo da pagina -->
    <div class="page-hero">
        <h1 class="fw-bold">Criar conta</h1>
        <div class="divider"></div>
        <p>Regista-te para guardares as tuas receitas favoritas</p>
    </div>

    <!-- Formulario de registo -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">

                <div class="form-card">
                    <h4 class="section-title text-start mb-2">Registar</h4>

                    <p class="texto-formulario mb-4">
                        Preenche os campos abaixo para criar a tua conta.
                    </p>

                    <?php
                    // Verifica se a variável $mensagem contém algum texto. 
                    // Quando a página abre pela primeira vez, a variável está vazia e o alerta não é apresentado.
                    if (!empty($mensagem)):
                    ?>

                        <!-- Apresenta um alerta do Bootstrap.
                        A variável $tipoMensagem completa dinamicamente o nome da classe:
                        alert-success cria um alerta verde para sucesso;
                        alert-danger cria um alerta vermelho para erro. -->
                        <div class="alert alert-<?php echo $tipoMensagem; ?>" role="alert">
                            <!-- Apresenta o texto da mensagem de sucesso ou erro -->
                            <?php echo $mensagem; ?>
                        </div>
                    <?php
                    // Termina a condição iniciada acima.
                    endif; ?>

                    <form action="registo.php" method="post">

                        <div class="mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome"
                                name="nome" placeholder="O teu nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                name="email" placeholder="email@exemplo.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                name="password" placeholder="Escolhe uma password" required>
                        </div>

                        <div class="mb-4">
                            <label for="confirmar_password">Confirmar password</label>
                            <input type="password" class="form-control"
                                id="confirmar_password" name="confirmar_password"
                                placeholder="Repete a password" required>
                        </div>

                        <button type="submit" class="btn btn-enviar">
                            <i class="fa-solid fa-user-plus me-2"></i>
                            Registar
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'content/footer.php'; ?>