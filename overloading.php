<?php
//Modelo -> entidade

// Determtna uma varivavel junto de uma classe
class Funcionario{
    // Atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos =  null;
    public $cargo = null;
    public $salario = null;

    //setter oveloading
    function __set($atributos, $valor){
        $this->$atributos = $valor;
    }
    
    // getter overloding
    function __get($atributos){
        return $this->atributos;
    }

    function resumirCadFunc(){
        //Esse é o resumo do cadastro do funcionario
        // return "$this->nome possui $this->numFilhos filho(s)
        return "$this->nome possui $this->numFilhos filhos(s)";
    }
}

$y = new Funcionario();
$y->__set("nome", 'Jose');
$y->__set("numFilhos", 7);
echo $y->resumirCadFunc();

?>