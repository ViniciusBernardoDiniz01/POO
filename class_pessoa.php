<?php

class Pessoa{
    public $nome; 
    public $idade;
    protected $cpf; 
    protected $endereco;

    public function apresentar(){
        echo "$this->nome está apresentando neste momento";
    }
    public function caminhar(){
        echo "$this->nome esta caminhando até sua casa";
    }
    public function falar(){
        echo "$this->nome esta falando";
    }
    private function comer(){
        echo "$this->nome esta comendo neste momento"; 
    }
    private function dormir(){
        echo "$this->nome está dormindo agora";
    }
    public function simulaComer(){
        $this->comer();
    }
    public function simulaDormir(){
        $this->dormir();
    }
}
?>