<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "prontuario";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}
?>

<!-- Codificação utilizada para ter acesso ao BD criado, tanto no MySql como no PHPMyAdmin -->