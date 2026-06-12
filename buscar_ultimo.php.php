<?php
$conn = new mysqli("localhost", "SEU_USUARIO", "SUA_SENHA", "NOME_DO_BANCO");

$sql = "SELECT velocidade FROM registro_velocidade ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["velocidade" => round($row["velocidade"], 1)]);
} else {
    echo json_encode(["velocidade" => 0]);
}
$conn->close();
?>
