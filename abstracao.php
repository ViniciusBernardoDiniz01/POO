<?php
//Modelo -> entidade

// Determtna uma varivavel junto de uma classe
class Funcionario{
    // Atributos -> Caracteristicas
    public $nome = "José";
    public $telefone = null;
    public $numFilhos =  2;
    
    // Metodo -> Açoes
    function resumirCadFunc(){
        //Esse é o resumo do cadastro do funcionario
        return "$this->nome possui $this->numFilhos filho(s) ";
    }
    function modificarNumFilhos($filhos){
        //Afetar um atributo do objeto
        $this->numFilhos = $filhos;

    }
    function modificarNome($alterarNome){
        $this->nome = $alterarNome;
    }


}

//Objeto -> Identidade
$y = new Funcionario();
echo $y -> resumirCadFunc(); //Para acessar atributos ou metodos usamos o ->
echo '<hr>';
$y->modificarNumFilhos(3);
echo $y-> resumirCadFunc();
echo '<hr>';

$x = new Funcionario();
$x->modificarNome("Cabral");
echo $x-> resumirCadFunc();
echo '<hr>';

?>