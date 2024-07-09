<?php
$servername = "172.19.0.6";
$username = "senac";
$password = "aluno";
$dbname = "senac";

$db = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8", $username,$password);

$linhasAfetadas = $db->exec(
    "INSERT INTO usuarios (email, nome, senha)
    VALUES ('vovo@gmail.com', 'vovozinha', '123456')"
);
if ($linhasAfetadas > 0) {
    echo $linhasAfetadas . 'linhas afetadas';
}else{
    echo 'Nenhuma linha afetada';
}

$linhasAfetadas = $db->exec(
    "UPDATE usuarios SET email = 'vovo@gmail.com' WHERE id = 3"
);
if ($linhasAfetadas > 0) {
    echo $linhasAfetadas . 'linhas afetadas';
}else{
    echo 'Nenhuma linha afetada';
}

$linhasAfetadas = $db->exec(
    "DELETE FROM usuarios WHERE id = 3"
);
if ($linhasAfetadas > 0) {
    echo $linhasAfetadas . 'linhas afetadas';
}else{
    echo 'Nenhuma linha afetada';
}