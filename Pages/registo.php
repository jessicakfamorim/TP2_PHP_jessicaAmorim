<?php include __DIR__ . '/../Config/database.php'; ?>

<?php
// Só processa os dados se o formulário foi submetido com o método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $passwordUtilizador = $_POST['password'];
    $confirmarPassword = $_POST['confirmar_password'];

    // Verifica se as duas passwords introduzidas são diferentes
    if ($passwordUtilizador !== $confirmarPassword) {

        // Mostra uma mensagem caso as passwords não coincidam
        echo "As passwords não coincidem.";
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

            // Mostra uma mensagem se o registo for inserido corretamente
            echo "Utilizador registado com sucesso.";
        } catch (PDOException $e) {

            // O código 23000 indica uma violação de integridade da base de dados.
            // Neste caso, ocorre quando tentamos inserir um email já registado.
            if ($e->getCode() == 23000) {
                echo "Este email já está registado.";
            } else {
                echo "Erro ao registar utilizador.";
            }
        }
    }
}

?>

<?php include 'content/head.php'; ?>
<?php include 'content/header.php'; ?>
<?php include 'content/nav.php'; ?>

<main>

    <form action="registo.php" method="post">

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="confirmar_password">Confirmar Password</label>
            <input type="password" id="confirmar_password" name="confirmar_password" required>
        </div>

        <button type="submit">Registar</button>

    </form>


</main>

<?php include 'content/footer.php'; ?>