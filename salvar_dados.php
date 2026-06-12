<?php
$servername = "localhost"; // Mude se o seu servidor for online
$username = "SEU_USUARIO";
$password = "SUA_SENHA";
$dbname = "NOME_DO_BANCO";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega a velocidade direta que o ESP32 calculou
    $velocidade = floatval($_POST["velocidade"]);

    // Salva direto no banco de dados
    $sql = "INSERT INTO registro_velocidade (velocidade) VALUES ('$velocidade')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Velocidade salva!";
    } else {
        echo "Erro ao salvar";
    }
}
$conn->close();
?>
