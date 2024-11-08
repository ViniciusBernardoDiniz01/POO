<?php
class Aluno{
    //variaveis
    public $nome; $idade; 
    private $matricula;
    protected $turma;



    // Metodos
    public function estudar(){
        echo $this->nome "esta estudando";
    }
    public function fazerProva(){
        echo $this -> nome "esta em prova";
    }
    public function assistirAula(){
        echo $this -> nome "esta assistindo aula da:" $this -> turma;
    }
    private function entregarTrabalho(){

    } 
    private function faltarAula(){

    }
}

$aluno1 = new Aluno();

$aluno1 -> nome = ('João');
$aluno1-> idade = (10);
$aluno1->estudar();
echo"<hr>"
?>

