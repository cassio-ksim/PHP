<?php 
session_start();
$ultimo_login = $_SESSION['ultimo_login'];

if (!$_SESSION['request_count']) {
    $_SESSION['request_count'] = 1;
}


if ($_SESSION['request_count'] == 5) {
    $_SESSION['request_count']++;
    echo "voce ganhou!";
} else {
   echo "você acessou a página " . $_SESSION['request_count'] . " vezes";
}

?>
