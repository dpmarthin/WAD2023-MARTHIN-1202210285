<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "modul4";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// 
 
?>