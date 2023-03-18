<?php
//$ Digunakan untuk membikin variabel//
$Tinggi_float = 5.4;
$Panjang_float = 8.9;
$Lebar_float = 14.7;
$LuasAlas_float = 130.83;
$Volume_float = 0.33 * $LuasAlas_float * $Tinggi_float ;

//echo Digunakan untuk menampilkan di layar//
//number_format sebagai function untuk menampilkan desimal yang akan kita tampilkan sesuai dengan apa yang kita gunakan//
echo number_format($Volume_float,3). " m3";
?>