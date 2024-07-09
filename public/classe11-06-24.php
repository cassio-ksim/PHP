<?php 
class Bola{
    private $cor;
    private $material ;
    private $circunferencia;

    public function __construct($cor, $material, $circunferencia)
    {
        $this->alterarCor($cor);
        $this->alterarMaterial($material);
        $this->alterarCircuferencia($circunferencia);
    }
    public function pegarCor(){
        echo'cor: '. $this->cor . '<br>';
    }
    public function alterarCor($cor){
       return $this->cor = $cor;

    }
    public function pegarMaterial(){
        echo'material: '. $this->material . '<br>';
    }
    public function alterarMaterial($material){
        return $this->material = $material;

    }
    public function pegarCircuferencia(){
        echo'circuferencia: '. $this->circunferencia . '<br>';
    }
    public function alterarCircuferencia($circunferencia){
        return $this->circunferencia = $circunferencia;

    }
}

$bola1 = new Bola('branca', 'couro', 68);
$bola1->pegarCor();
$bola1->pegarMaterial();
$bola1->pegarCircuferencia();
?>