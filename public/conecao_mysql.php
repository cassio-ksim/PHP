<?php
$mysql = mysqli_connect("172.19.0.4","senac","aluno","senac");
 
$resultado = mysqli_query($mysql, "SELECT * from usuarios");
$linha = mysqli_fetch_assoc($resultado);
echo $linha['nome'];
?>