<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "eduflow"; // Pastikan nama DB di phpMyAdmin sama

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("❌ Gagal terhubung ke Database: " . mysqli_connect_error());
}
?>