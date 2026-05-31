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

        // Prepara o comando antes de enviar os valores para a base de dados
        $stmt = mysqli_prepare($ligacao, $sql);

        // Associa os valores recebidos às interrogações (?) do comando SQL preparado.
        // Os valores são associados pela mesma ordem em que aparecem no INSERT:
        // 1.º ? recebe $nome, 2.º ? recebe $email e 3.º ? recebe $passwordHash.
        // "sss" indica que os três valores enviados são strings, ou seja, textos.
        // Esta abordagem ajuda a evitar ataques de SQL Injection.
        mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $passwordHash);

        // Executa o comando SQL e insere o utilizador na base de dados
        if (mysqli_stmt_execute($stmt)) {

            // Mostra uma mensagem se o registo for inserido corretamente
            echo "Utilizador registado com sucesso.";
        } else {

            // O erro 1062 indica que foi inserido um valor duplicado 
            // numa coluna definida como UNIQUE, neste caso, o email
            if (mysqli_stmt_errno($stmt) == 1062) {
                echo "Este email já está registado.";
            } else {
                // Mostra uma mensagem genérica para outros erros
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