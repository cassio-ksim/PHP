<form method="GET">
    <input type="checkbox" name="sabores[]" id ="mussarela" value="mussarela">
    <label for="mussarela">Mussarela</label>
    <br>

    <input type="checkbox" name="sabores[]"id ="calabresa" value="calabresa">
    <label for="calabresa">Calabresa</label>
    <br>

    <input type="checkbox" name="sabores[]"id ="portuguesa" value="portuguesa">
    <label for="portuguesa">Portuguesa</label>
    <br>

    <button type="submit">enviar</button>
</form>
<?php 
$sabores = $_GET['sabores'];
if($sabores){
    foreach($sabores as $sabores_escolhido){
        echo "$sabores_escolhido<br>";
    }
}


?>