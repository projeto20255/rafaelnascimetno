
<?php
// Defina as credenciais de acesso ao banco de dados
$servername = "localhost";  // Ou o servidor do banco de dados, se não for local
$username = "root";  // Seu nome de usuário do banco de dados
$password = "";    // Sua senha do banco de dados
$dbname = "desafio";       // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


?>