<?php
require_once("class_professor.php");

$prof = new Professor();

$prof -> nome = ('Valter');
$prof -> ensinar();
echo"<hr>";
$prof -> corrigirProva();
echo"<hr>";
$prof -> prepararAula();
echo"<hr>";
$prof -> simulaChamada();
echo "<hr>";
$prof->simulaTarefa();
echo"<hr>";
?>