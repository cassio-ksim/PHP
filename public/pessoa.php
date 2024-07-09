<?php 
class Pessoa{
    private $nome;
    private $idade;
    private $altura;

    public function __construct($nome, $idade, $altura)
    {
        $this->alterarNome($nome);
        $this->alterarIdade($idade);
        $this->alterarAltura($altura);
        
    }

    public function pegarIdade(){
        echo'a idade é: '. $this->idade . '<br>';
    }

    public function pegarNome(){
        echo 'o nome é: '. $this->nome .'<br>';
    }

    public function pegarAltura(){
        echo'a altura: '. $this->altura . '<br>';
    }

    public function alterarIdade($idade){
         $this->idade = $idade;
    }

    public function alterarNome($nome){
         $this->nome = $nome ;
    }

    public function alterarAltura($altura){
        $this->altura = $altura ;
   }

   public function evenlhecer($qtdAnos){
    echo 'envelheceu ' . $qtdAnos . 'anos <br>';
    for($i=0;$i<$qtdAnos;$i++){
        $this->crescer();
        $this->idade++;
    }
   }
   public function crescer(){
    if($this->idade < 21){
        $this->altura = $this->altura + 0.5;
   }
 }
}

$pessoa = new Pessoa('cassio', 18, 1.78);
$pessoa->pegarAltura();
$pessoa->pegarIdade();
$pessoa->crescer();
$pessoa->evenlhecer(2);

?>