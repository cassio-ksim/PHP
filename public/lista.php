<form action="" method="POST">
    <label for="numero">Digite um numero:</label>
    <input type="text" id="numero" name="numero"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php 
$numero = $_POST['numero'];
function imprimirsequencia($numero) {
    for($i = 1; $i <= $numero; $i++){
        for($j = 1; $j <= $i; $j++){
            echo $j ;
        }
        echo"<br>";
    }
}
imprimirsequencia($numero);
?>