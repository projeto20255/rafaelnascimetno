<?php
// Incluir a conexão com o banco de dados
include('sistema/config/conexao.php');

// Dados do novo usuário
$login = 'usuario_teste';  // Nome de usuário
$senha = 'senha123';  // Senha do usuário

// Criar o hash da senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Inserir o novo usuário no banco de dados
$sql = "INSERT INTO usuarios (login, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $senha_hash);
$stmt->execute();

// Verificar se o usuário foi inserido com sucesso
if ($stmt->affected_rows > 0) {
    echo "Usuário inserido com sucesso!";
} else {
    echo "Erro ao inserir o usuário!";
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>
