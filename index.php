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

$prod2 = new Produto;
$prod2 -> titulo = "Itaipava";
$prod2 -> descricao = "cereveja brasileira";
$prod2 -> preco = 1.90;

var_dump ($prod1);
echo "<br>";
var_dump ($prod2);
echo "<br>";

$cli = new Cliente;
$cli -> nome = "João";
$cli -> idade = 40;
$cli -> endereco = "Rua A";
$cli -> telefone = "41-xxxx-xxxx";

$cli -> comprar();
echo "<br>";
var_dump($cli);
echo"<br>";

$nomeClasse = "Produto";

$instacia = $nomeClasse;
var_dump($instacia);
echo "<br>";

$cli2 = new $cli;
$nomeClasse2 = get_class($cli);
$cli3 = new $nomeClasse2;
$cli3 -> nome = "José";

var_dump($cli);
echo "<br>";
var_dump($cli2);
echo "<br>";
var_dump($cli3);