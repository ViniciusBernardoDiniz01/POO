<?php
require_once("class_aluno.php");

$aluno1 = new Aluno();

$aluno1->nome = ('João');
$aluno1->idade = (10);
$aluno1->estudar();
echo"<hr>";
$aluno1->fazerProva();
echo"<hr>";
$aluno1->assistirAula();
echo"<hr>";
$aluno1-> simulaEntregaTrabalho();
echo "<hr>";
$aluno1->simulaFaltaAula();
echo"<hr>";
?>