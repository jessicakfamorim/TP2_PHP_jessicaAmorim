<?php
require '../Config/database.php';
session_start();

// Só executa quando o formulário é enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Guarda os dados enviados pelo formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    // Procura um utilizador com o email informado
    $sql = "SELECT * FROM utilizadores WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'email' => $email
    ]);

    // Guarda os dados do utilizador encontrado
    $utilizador = $stmt->fetch(PDO::FETCH_ASSOC);

    /// Se o utilizador existir na BD
    if ($utilizador) {
        // Compara a password digitada com o hash guardado
        if (password_verify($password, $utilizador['password'])) {
            // Password correta
            // Cria a sessão do utilizador autenticado
            // Guarda o id do utilizador na sessão
            // Esta informação fica disponível enquanto o utilizador estiver autenticado
            // Sem o season, apos o login, o PHP esquece o utilizador. Com o season, o PHP guarda os dados durante a sessão.
            $_SESSION['utilizador_id'] = $utilizador['id'];
            // Guarda o nome do utilizador na sessão
            $_SESSION['nome'] = $utilizador['nome'];

            // Depois do login, envia o utilizador para a página de receitas
            header('Location: receitas.php');
            // Interrompe a execução do PHP
            exit;
        } else {
            // Password errada
            echo "PASSWORD INCORRETA";
        }
    } else {
        // Email não existe na BD
        echo "UTILIZADOR NÃO ENCONTRADO";
    }
    exit;
}
?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>

<main>

    <div class="container my-5">

        <div class="page-hero">
            <h1 class="fw-bold">Login</h1>
            <div class="divider"></div>
            <p>Área reservada</p>
        </div>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn-simpa"> Entrar </button>

            <p class="mt-3">Ainda não tem conta?
                <a href="registo.php">Registar</a>
            </p>

        </form>

    </div>
</main>

<?php include 'content/footer.php'; ?>