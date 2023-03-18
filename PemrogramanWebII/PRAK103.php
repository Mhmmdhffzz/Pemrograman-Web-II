<?php
//$ Digunakan untuk menentukan variabel//
$Celcius_float = 37.841;
$Fahrenheit_float = (9/5) * $Celcius_float+32;
$Reamur_float = (4/5) * $Celcius_float;
$Kelvin_float = $Celcius_float+273.15;

//echo digunakan untuk menampilkan di layar
echo "Fahrenheit (F)=". $Fahrenheit_float. "<br>";//<br> di gunakan untuk membikin baris baru
echo "Reamur (R)=". $Reamur_float. "<br>";
echo "Kelvin (K)=". $Kelvin_float. "<br>";
?>