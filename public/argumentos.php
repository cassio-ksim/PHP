<form action="" method="POST">
    <label for="numero">Digite o primeiro numero:</label>
    <input type="text" id="numero1" name="numero1"><br><br>
    <label for="numero">Digite o segundo numero:</label>
    <input type="text" id="numero2" name="numero2"><br><br>
    <label for="numero">Digite o terceiro numero:</label>
    <input type="text" id="numero3" name="numero3"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php 
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

function soma($numero1,$numero2,$numero3) {
    $soma = $numero1 + $numero2 + $numero3;
    echo $soma;
}
soma($numero1,$numero2,$numero3);

?>