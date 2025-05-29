<?php
//Importancia do arquivo Produto.php
require_once "src/Classes/Clientes.php";

//Instancia do produto
$prod1 = new Produto;
$prod1 -> titulo = "Skol";
$prod1 -> descricao = "cerveja alemão";
$prod1 -> preco = 2.50;

foreach ($prod1 as $nome => $valor) {
    echo "$nome: $valor <br>";
}