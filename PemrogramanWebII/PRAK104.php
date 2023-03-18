<?php 
$Seri = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Xcover 5");
//array disini digunakan sebagai isi dari data yang ada pada tabel
?>
<!-- tag awal untuk html -->
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>                     /*styling yang digunakan pada tabel agar terlihat seperti pada contoh */
        table,td {
            border:1px solid;
        }
        th{
            font: bold;
            border: 1px solid;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <th><?php echo "Daftar Smartphone Samsung"; ?></th>    
    </tr>
    <tr>
        <td><?php echo $Seri[0]; ?></td>   <!--proses pemanggilan dan mencetak nilai array pada tabel yang telah dibuat -->
    </tr>
    <tr>
        <td><?php echo $Seri[1]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Seri[2]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Seri[3]; ?></td>    
    </tr>
</table>
</body>
</html>