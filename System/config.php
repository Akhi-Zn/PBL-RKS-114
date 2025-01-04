<?php
// Konfigurasi database
$servername = "mysql.railway.internal";
$username = "root";
$password = "UGAzZouYjBGNNAjTqXKGHeJdyeONhQGz";
$database = "railway";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
