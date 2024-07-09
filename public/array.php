<?php 
$nomes = array("Andre", "Bruno", "carlos", "Diego", "Eduardo");
$nomes = ["Andre", "Bruno", "carlos", "Diego", "Eduardo"];

#acrescentar um elemento no array
$nomes[] = "Cassio";
echo $nomes[5];
echo "<br>";

#alterar um elemento no array
$nomes[6] = "Valor grande";
echo $nomes[6];
echo "<br>";

#percorrer um array
for( $i= 0; $i <=6; $i++){
    echo "<li>$nomes[$i]</li>";
    echo "<br>";
}

#usando chaves
$chave = [
    "nome" => "Andre",
    "viculo" => "fusca",

];
#usando o foreach
foreach ($nomes as $nome) {
    echo "<li>$nome</li>";
    echo "<br>";
}

?>

