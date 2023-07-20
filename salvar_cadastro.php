<?php
$nome = $_POST['nome'];
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

// Inserir os dados na tabela
$sql = "INSERT INTO usuarios_banca (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
