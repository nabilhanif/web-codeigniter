<?php
// Membuat variabel, ubah sesuai dengan nama host dan database pada hosting 
$host	= "localhost";
$user	= "root";
$pass	= "anomali";
$db	= "oemahcod_oemahproject";

//Menggunakan objek mysqli untuk membuat koneksi dan menyimpanya dalam variabel $mysqli	
$mysqli = new mysqli($host, $user, $pass, $db);

//Membuat variabel yang menyimpan url website dan folder website
$url_website = "http://localhost/ci_oemahproject";
$folder_website = "/ci_oemahproject";

//Menentukan timezone 
date_default_timezone_set('Asia/Jakarta'); 
?>
