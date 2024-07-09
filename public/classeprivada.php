<?php 
class Produto{
    private $valor = 10;
    private $nome = 'Pão';

    public function __construct($nome, $valor)
    {
        $this->alterarNome($nome);
        $this->alterarValor($valor);
        
    }

    public function pegarValor(){
        echo'valor: '. $this->valor . '<br>';
    }

    public function pegarNome(){
        echo 'Produto: '. $this->nome .'<br>';
    }

    public function alterarValor($valor){
         $this->valor = $valor;
    }

    public function alterarNome($nome){
         $this->nome = $nome ;
    }


    public function colocarEmPromocao(){
        $this->valor = $this->valor * 0.9;
    }
}

$beju = new Produto('beju', 5);
$misto = new Produto('misto', 4.5);
$beju->pegarNome();
$beju->pegarValor();

$misto->pegarNome();
$misto->pegarValor();
?>