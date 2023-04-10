<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form method="post" action="PRAK301.php">
        Jumlah Peserta : <input type="text" name="input"><br>
        <input type="submit" name="submit" value="Cetak"><br>
</form>
<?php
    
    if(isset($_POST['input'])){

    
    $jumlah = $_POST['input'];
    $i=1;

    while ($i <= $jumlah){
        $warna = ($i % 2 ==0)? 'green' : 'red'; //menggunakan operator ternary
        echo "<span style='color: $warna'>Peserta ke-$i</span><br>"; 
        $i++;
    }
    }
?>
</body>
</html>
