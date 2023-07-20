<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "usuarios_banca";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consultar o banco de dados
$sql = "SELECT * FROM tabela_cadastro WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciais corretas, redirecionar para a página desejada
    echo "Login bem-sucedido!";
} else {
    // Credenciais incorretas, exibir mensagem de erro
    echo "Credenciais inválidas!";
}

$conn->close();
?>
