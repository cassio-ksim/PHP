<?php 
$idade = 35;
function modifica(&$valor){
    echo "internamente (antes):" . $valor . "<br>";
    $valor = 100;
    echo "internamente (depois):" . $valor . "<br>";
}
echo $idade . "<br>";
modifica($idade);
echo $idade . "<br>";
echo "<br>";
//echo 'a soma é ' .soma($a, $b);

$dobro = function ($x){
    return $x * 2;
};
echo $dobro(6);
echo "<br>";
echo array_map($dobro,[1,2,3]) == [2,4,6];

array_map(function($x){
    return $x * 2;
},[0,1,2])
?>