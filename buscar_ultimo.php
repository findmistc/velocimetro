<?php

include("conexao.php");

$sql = "SELECT * FROM dados
        ORDER BY id DESC
        LIMIT 1";

$result = $conn->query($sql);

if($result->num_rows > 0){

    $row = $result->fetch_assoc();

    echo json_encode([
        "velocidade" => $row["velocidade"],
        "rpm" => $row["rpm"],
        "data_hora" => $row["data_hora"]
    ]);
}
else{

    echo json_encode([
        "velocidade" => 0,
        "rpm" => 0
    ]);
}

$conn->close();

?>