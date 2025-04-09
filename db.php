<?php
session_start();
$host = "localhost";
$user = "root";
$passsword = "";
$dbname = "login_db";

$conn = new mysqli($host, $user, $passsword, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
