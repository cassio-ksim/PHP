<?php 
class Produto{
    public $valor = 10;
    public $nome = 'Pão';
    public function colocarEmPromocao(){
        $this->valor = $this->valor*0.9;
    }

    public function recebeEmProgramacao($percentual){

        $this->valor = $this->valor*(100-$percentual) /100;
    }
}
$pao = new Produto();
$leite = new Produto();

$leite->nome = 'Leite';
echo $leite->nome;
echo  "<br>";


$coca_cola = new Produto();
$coca_cola->nome = 'Coca-Cola';
$coca_cola->valor = 5;
$coca_cola->colocarEmPromocao();

$guaranar = new Produto();
$guaranar->nome = 'guaranar';
$guaranar->valor = 6;
$guaranar->colocarEmPromocao();

$guaranar = new Produto();
$guaranar->nome = 'guaranar';
$guaranar->valor = 100;
$guaranar->recebeEmProgramacao(10);


echo '<br>';
echo $coca_cola->nome;
echo '<br>';
echo $coca_cola->valor;

echo '<br>';
echo $guaranar->nome;
echo '<br>';
echo $guaranar->valor;
?>