<?php
class Conta{
    private $nomeTitular;
    private $numeroConta;
    private $saldo;
    

    public function __construct($nomeTitular,$numeroConta, $saldo=0)
    {   
        $this->alterarNome($nomeTitular);
        $this->alterarNumeroConta($numeroConta);
        $this->alterarSaldo($saldo);

    }
    public function pegarNome(){
        echo 'o titular da conta é: ' . $this->nomeTitular . '<br>';
    }
    public function pegarNumeroConta(){
        echo 'o numero da conta é: ' . $this->numeroConta . '<br>';
    }
   
   public function pegarSaldo(){
        echo 'o saldo da conta é: R$ '. $this->saldo . '<br>';
   }
   public function alterarNome($nomeTitular){
    $this->nomeTitular = $nomeTitular ;
   }
   public function alterarNumeroConta($numeroConta){
    $this->numeroConta = $numeroConta ;
   }
   public function alterarSaldo($saldo){
        $this->saldo = $saldo ;
   }
   public function depositar($valor){
    echo 'depositar dinheiro... <br>';
    return $this->saldo = $this->saldo + $valor;
   }
   public function sacar($valor){
    if($this->saldo < $valor ){
        echo 'saldo insuficiente... <br>';
    }else{
    echo 'sacar dinheiro... <br>';
    return $this->saldo = $this->saldo - $valor;
    }
   }

   public function transferencia($contaDestino, $valor){
    echo 'transferir dinheiro... <br>';

   }

   
}

$conta = new Conta('Cassio Lima',007);
$conta2 = new Conta('wesley',008);

$conta->pegarNome();
$conta->pegarNumeroConta();
$conta->pegarSaldo();
$conta->depositar(10);
$conta->sacar(50);
$conta->pegarSaldo();


