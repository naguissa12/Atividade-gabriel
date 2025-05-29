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

$prod2 = $prod1;
$prod2 -> preco = 4.50;
function alterarProduto($produto)
{
     $produto -> titulo = "Skol lata";
}
alterarProduto($prod1);
var_dump($prod1);
echo "<br>";
var_dump($prod2);







