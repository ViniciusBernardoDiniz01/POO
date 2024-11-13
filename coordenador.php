<?php
require_once("class_coordenador.php");

$coord = new Coordenador();

$coord-> nome = ('Melina');
$coord -> coordenarSala();
echo"<hr>";
$coord -> planejarAula();
echo"<hr>";
$coord -> auxiliarProfessor();
echo"<hr>";
$coord -> simulaHorario();
echo "<hr>";
$coord->simulaReunioes();
echo"<hr>";
?>