<?php
require_once("class_pessoa.php");

$pessoa = new Pessoa();

$pessoa -> nome = ('Gustavo');
$pessoa -> apresentar();
echo"<hr>";
$pessoa -> caminhar();
echo"<hr>";
$pessoa -> falar();
echo"<hr>";
$pessoa -> simulaComer();
echo "<hr>";
$pessoa->simulaDormir();
echo"<hr>";
?>