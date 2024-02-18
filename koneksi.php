<?php

$server="localhost";
$user="root";
$password="";
$database="pengaduan_masyarakat";

$conn = mysqli_connect($server, $user, $password, $database);
if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
?>

