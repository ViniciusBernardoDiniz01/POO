<?php
//Declaraçao da classe manipular arquivos
class ManipulaArquivos {
  public $caminho_arquivo;
  private $arquivo;
  
  public function __construct($caminho_arquivo){
    $this->caminho_arquivo = $caminho_arquivo;
    
    $this->arquivo = fopen($caminho_arquivo, 'w+');
  }
  public function escrever($texto){
    fwrite($this->arquivo, $texto .PHP_EOL);
  }
  
  public function ler(){
    fseek($this->arquivo, 0);
    echo "O arquivo esta aberto <br> ";
    
    return fread($this->arquivo, filesize($this->caminho_arquivo)?: 1);
  }
  )
  //fecha o arquivo
  public function __destruct(){
    fclose($this->arquivo);
    echo "$this->caminho_arquivo foi fechado";
  }
}
?>