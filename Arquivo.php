<?php
require_once('./classe/index.php');

$arquivo = new ManipulaArquivos('teste.txt');

$arquivo->escrever("Olá mundo!<br>");
$arquivo->escrever("Sesi Senai 2024");

echo $arquivo->ler();
?>