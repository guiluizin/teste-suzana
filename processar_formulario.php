<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $servername = "127.0.0.1";
    $username = "guilhermeluis013@gmail.com";
    $password = "ironmaiden12";
    $dbname = "seu_banco_de_dados";

    // Conecta ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Captura os dados do formulário
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $contact_preference = $_POST['contact_preference'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO sua_tabela (name, phone, email, contact_preference) VALUES ('$name', '$phone', '$email', '$contact_preference')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>
