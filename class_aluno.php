<?php
class Aluno{
    //variaveis
    public $nome; 
    public $idade; 
    private $matricula;
    protected $turma;



    // Metodos
    public function estudar(){
        echo "$this->nome esta estudando";
    }
    public function fazerProva(){
        echo "$this->nome esta em prova";
    }
    public function assistirAula(){
        echo "$this->nome esta assistindo aula da: {$this -> turma}";
    }
    private function entregarTrabalho(){
        echo "$this->nome entregou o trabalho";
    } 
    private function faltarAula(){
        echo "$this->nome faltou a aula";
    }
    public function simulaEntregaTrabalho(){
        $this->entregarTrabalho();
    }
    public function simulaFaltaAula(){
        $this->faltarAula();
    }
}



?>

