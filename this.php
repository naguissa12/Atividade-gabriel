<?php
//Importação do arquivo Cliente.php
require_once "src/Classes/Clientes.php";

$cli = new Cliente;
$cli -> nome = "Gabriel";
$cli -> idade = 27;
$cli -> endereco = "Rua B";
$cli -> telefone = "41-xxxx-xxxx";
$cli -> comprar();

echo "<br>";

$cli2 = new Cliente;
$cli2 -> definirNome("joão");
$cli2 -> idade = 30;
$cli2 -> endereco = "Rua a";
$cli2 -> telefone = "41-xxxx-xxxx";
$cli2 -> comprar();