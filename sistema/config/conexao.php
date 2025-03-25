
<?php
// Defina as credenciais de acesso ao banco de dados
$servername = "localhost";  // Ou o servidor do banco de dados, se não for local
$username = "seu_usuario";  // Seu nome de usuário do banco de dados
$password = "sua_senha";    // Sua senha do banco de dados
$dbname = "Bradesco";       // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


?>