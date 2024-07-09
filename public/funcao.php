<!-- Formulário HTML -->
<form action="processa.php" method="post">
  <label for="numero1">Digite o primeiro número:</label>
  <input type="number" id="numero1" name="numero1"><br><br>
  <label for="numero2">Digite o segundo número:</label>
  <input type="number" id="numero2" name="numero2"><br><br>
  <input type="submit" value="Calcular Soma">
</form>

<!-- Script PHP (processa.php) -->
<?php
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];

  function soma($numero1,$numero2) {
    $result = $numero1 + $numero2;
    return $result;
  }

  echo "A soma dos números é:" . soma($numero1,$numero2);
?>