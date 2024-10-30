<?php
//Cria uma classe livro e determina 3 variaveis
class Livro{
    public $titulo = "Jogos Vorazes";
    public $autor = "Suzanne Collins";
    public $anoPublicacao = 2009;
//Cria duas funçoes uma para exibir os detalhes do livro e troca o ano de publicação
    function exibirDetalhes(){
        return"O livro $this->titulo que foi publicado pela autor(a) $this->autor no ano de $this->anoPublicacao.";
    }
    function alterarAnoPublicacao($alterarAno){
        $this->anoPublicacao = $alterarAno;
    }
}
//exibe e executa as fuções
$y = new Livro();
echo $y-> exibirDetalhes();
echo "<hr>";
$y->alterarAnoPublicacao(2000);
echo $y-> exibirDetalhes();

?>