<?php
header('Content-Type: application/json');

// Verificar se os dados foram enviados via POST
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar com o banco
    $conn = new mysqli ("localhost","root","","cadastro");

    if($conn->connect_error) {
        die(json_encode(["erro" => "Erro ao conectar"]));
    }

    //Receber e limpar os dados
    $nome = $conn -> real_escape_string($_POST['nome']);
    $funcao = (int) $_POST['funcao'];
    $matricula = (float) $_POST['matricula'];

    //Inserir no banco
    $sql = "INSERT INTO produtos (nome, funcao, matricula) VALUES('$nome', $funcao, $matricula)";
    if($conn -> query($sql)){
        echo json_encode(["sucesso" =>true,"mensagem" =>"Produto inserido com sucesso!"]);
    } else {
        echo json_encode(["erro" => "Erro ao inserir produto."]);
    }
    $conn->close();
} else {
    echo json_encode(["erro" => "Requisição inválida."]);
}