<?php
class BombaCombustivel{
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel){
        $this->alterarCombustivel($tipoCombustivel);
        $this->alterarValorLitro($valorLitro);
        $this->alterarQuantidadeCombustivel($quantidadeCombustivel);
    }

    public function pegarCombustivel(){
        echo 'o tipo do combustivel é: ' . $this->tipoCombustivel . '<br>';
    }

    public function pegarValorLitro(){
        echo 'o valor do litro é: R$ ' . $this->valorLitro . '<br>';
    }

    public function pegarQuantidadeCombustivel(){
        echo 'a quantidade de Combustivel é: ' . $this->quantidadeCombustivel . '<br>';
    }

    public function alterarCombustivel($tipoCombustivel){
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function alterarValorLitro($valorLitro){
        $this->valorLitro = $valorLitro;
    }

    public function alterarQuantidadeCombustivel($quantidadeCombustivel){
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function abastecerPorValor($valorAbastecido){
        if ($this->quantidadeCombustivel <= $valorAbastecido / $this->valorLitro) {
            $quantLitros = round($valorAbastecido / $this->valorLitro,2);
            $this->quantidadeCombustivel -= $quantLitros;
            echo 'a quantidade de litros foi: ' . $quantLitros . '<br>';
        } else {
            echo 'Não há combustível suficiente na bomba!<br>';
        }
    }

    public function AbastecerPorLitro($valorAbastecido){
        if ($this->quantidadeCombustivel >= $valorAbastecido) {
            $valorTotal = round($valorAbastecido * $this->valorLitro,2);
            $this->quantidadeCombustivel -= $valorAbastecido;
            echo 'o total a ser pago é: ' . $valorTotal . '<br>';
        } else {
            echo 'Não há combustível suficiente na bomba.<br>';
        }
    }

}

$b1 = new BombaCombustivel('gasolina', 3.5, 50);
$b1->pegarCombustivel();
$b1->pegarValorLitro();
$b1->pegarQuantidadeCombustivel();
$b1->abastecerPorValor(10);
$b1->AbastecerPorLitro(2);
$b1->pegarQuantidadeCombustivel();


echo'<br>';

$b2 = new BombaCombustivel('diesil', 4, 50);
$b2->pegarCombustivel();
$b2->pegarValorLitro();
$b2->pegarQuantidadeCombustivel();
$b2->abastecerPorValor(10);
$b2->AbastecerPorLitro(5);
$b2->pegarQuantidadeCombustivel();