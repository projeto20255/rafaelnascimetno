<?php
// Iniciar a sessão
session_start();

// Incluir a conexão com o banco de dados
include('conexao.php');

// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Validar se os campos não estão vazios
    if (empty($login) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
        exit();
    }

    // Preparar a consulta para verificar o login no banco de dados
    $sql = "SELECT * FROM usuarios WHERE login = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);  // "s" significa string
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o usuário existe
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar se a senha está correta (assumindo que a senha é armazenada de forma segura com hash)
        if (password_verify($password, $user['senha'])) {
            // Se as credenciais estiverem corretas, inicia a sessão e redireciona para a página do index.php dentro de config
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $user['login'];

            // Redirecionar para o arquivo index.php na pasta config
            header("Location: ../index.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    // Fechar a conexão
    $stmt->close();
} else {
    // Se não for um POST, redireciona para a página de login
    header("Location: login.php");
    exit();
}
?>
