<?php

class Professor{
    public $nome; 
    public $diciplina;
    private $cpf; 
    protected $salario;

    public function ensinar(){
        echo "$this->nome está ensinando os alunos";
    }
    public function corrigirProva(){
        echo "$this->nome esta corrigindo a prova dos alunos";
    }
    public function prepararAula(){
        echo "$this->nome esta preparando aulas para os seus alunos";
    }
    private function fazerChamada(){
        echo "$this->nome registrou a chamada na folha"; 
    }
    private function corrigirTarefa(){
        echo "$this->nome está corrigindo tarefas";
    }
    public function simulaChamada(){
        $this->fazerChamada();
    }
    public function simulaTarefa(){
        $this->corrigirTarefa();
    }
}
?>