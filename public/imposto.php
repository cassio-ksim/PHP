<form action="" method="POST">
    <label for="numero">preço do produto:</label>
    <input type="text" id="numero1" name="preco"><br><br>
    <label for="numero">taxa do produto:</label>
    <input type="text" id="numero1" name="taxa"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php 
$preco = $_POST['preco'];
$taxa = $_POST['taxa'];


function somaimposto($taxaimposto, $preco) {
   $taxapercentual = ($taxaimposto/100) +1;
   $resultado = $preco * $taxapercentual;
   echo $resultado;
}
somaimposto($taxa,$preco);

?>