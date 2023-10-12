<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do banco de dados
    $servername = "localhost"; // Nome do servidor
    $username = "seu_usuario"; // Nome de usuário do banco de dados
    $password = "sua_senha"; // Senha do banco de dados
    $dbname = "seu_banco_de_dados"; // Nome do banco de dados

    // Crie uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Recupere as credenciais do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar as credenciais (substitua isso com sua própria lógica)
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Credenciais válidas, redirecione para a página de painel
        header("Location: painel.php");
    } else {
        // Credenciais inválidas, exiba uma mensagem de erro
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
