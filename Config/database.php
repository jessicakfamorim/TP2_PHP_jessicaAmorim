<?php

$host = "127.0.0.1";
$user = "root";
$password = "Jeka.121826";
$database = "simpa_baker";

$ligacao = mysqli_connect($host, $user, $password, $database);

if (!$ligacao) {
    die("Erro na ligação à base de dados: " . mysqli_connect_error());
}

?>