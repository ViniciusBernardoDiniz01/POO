<?php
class Aluno{
    public $nome = "Carlos";
    public $idade = 16;
    public $curso = "Desenvolvimento de sistemas";

    function exibirDadosAluno(){
        return "O(a)$this->nome possui $this->idade anos de idade e participa do curso $this->curso";
    }
    function alterarCurso($alteraCurso){
        $this->curso = $alteraCurso;
    }
}
$y = new Aluno();
echo $y -> exibirDadosAluno();
echo'<hr>';
$y-> alterarCurso("Multimidia");
echo  $y-> exibirDadosAluno();
?>