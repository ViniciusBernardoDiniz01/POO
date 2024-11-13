<?php

class Coordenador{
    public $nome; 
    public $departamento;
    private $cpf; 
    protected $salario;

    public function coordenarSala(){
        echo "$this->nome está supervisionando a sala para o professor";
    }
    public function planejarAula(){
        echo "$this->nome esta planejando aula para o professor";
    }
    public function auxiliarProfessor(){
        echo "$this->nome esta auxiliando o professor durante a aula";
    }
    private function definirHorario(){
        echo "$this->nome definiu os horarios de aula da quarta-feira"; 
    }
    private function organizarReunioes(){
        echo "$this->nome organiza reuniões de classe para conversar com o pais dos alunos";
    }
    public function simulaHorario(){
        $this->definirHorario();
    }
    public function simulaReunioes(){
        $this->organizarReunioes();
    }
}
?>