<?php
//Importação do arquivo Produto.php
require_once "src/Classes/Produto.php";
//Importação do arquivo Cliente.php
require_once "src/Classes/Clientes.php";

//Instancia do produto
$prod1 = new Produto;
$prod1 -> titulo = "Skol";
$prod1 -> descricao = "cerveja alemão";
$prod1 -> preco = 2.50;

$prod2 = clone $prod1;
$prod2 -> preco = 5.50;

function alterarProduto($produto)
{
    $produto -> titulo = "Skol litrão";
    return $produto;
}
$prod3 = alterarProduto(clone $prod1);

var_dumpa($prod1);
var_dumpa($prod2);
var_dumpa($prod3);



