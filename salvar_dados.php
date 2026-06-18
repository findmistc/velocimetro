<?php

include("conexao.php");

if(isset($_POST['velocidade']) && isset($_POST['rpm'])){

    $velocidade = intval($_POST['velocidade']);
    $rpm = intval($_POST['rpm']);

    $sql = "INSERT INTO dados(velocidade,rpm)
            VALUES($velocidade,$rpm)";

    if($conn->query($sql)){
        echo "OK";
    } else {
        echo "ERRO";
    }
}

$conn->close();

?>