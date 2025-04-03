<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: ../sistema/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>
    login encontrado!
</body>
</html>
