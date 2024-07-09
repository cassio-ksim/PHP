<form action="" method="POST">
    <label for="numero">Digite um numero:</label>
    <input type="text" id="numero1" name="numero1"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php 
$numero1 = $_POST['numero1'];


function verifica($numero1) {
    if($numero1 > 0){
        echo "P";
    }else{
        echo "N";
    }
}
verifica($numero1);


?>