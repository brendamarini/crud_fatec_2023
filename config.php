<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20457711_brendalauramarini"; // usuário do MySQL
$pass = "p~fJpQj3RZhplSOu"; // senha do MySQL
$dbname = "id20457711_bancobrenda"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
