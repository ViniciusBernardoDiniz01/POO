<?php
//Modelo -> entidade

// Determtna uma varivavel junto de uma classe
class Funcionario{
    // Atributos -> Caracteristicas
    public $nome = null;
    public $telefone = null;
    public $numFilhos =  null;

    //Setters
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }
    
    //getter
    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function resumirCadFunc(){
        //Esse é o resumo do cadastro do funcionario
        return "$this->nome possui $this->numFilhos filho(s) ";
    }
}

$y = new Funcionario();
$y->setNome('Jose');
$y->setNumFilhos(6);
// echo $y->resumirCadFunc();
echo $y->getNome().' Possui '.$y->getNumFilhos().' filho(s) ';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
    <script>alert('Você é legal');</script>
</head>
<body>
    
</body>
</html>