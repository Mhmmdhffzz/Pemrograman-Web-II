<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="PRAK201.php">
        Nama: 1<input type="text" name="nama1"><br>
        Nama: 2<input type="text" name="nama2"><br>
        Nama: 3<input type="text" name="nama3"><br>
        <input type="submit" name="Urutkan" value="Urutkan">;
</form>
<?php

$nama1 = $_POST['nama1'];
$nama2 = $_POST['nama2'];
$nama3 = $_POST['nama3'];

$nama_arr = array($nama1, $nama2, $nama3);
    
    sort($nama_arr);
//foreach di gunakan untuk menampilkan semua isi dalam sebuah array
    foreach($nama_arr as $value){
        echo $value. "<br>";
    }

?>


</body>
</html>