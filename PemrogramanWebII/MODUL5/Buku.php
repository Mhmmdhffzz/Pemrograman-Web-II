<?php 
require('Model.php');
if (isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <style>
        body { 
            width: 900px;
            margin:auto;}
        table{
            border-collapse: collapse;
        }
        tr{
            border: black;
        }
        th{
            background-color: turquoise;
        }
        td{
            background-color: #E8E8E8;
        }
        
    </style>
</head>
<body >
<h2 style = "text-align:center;">Buku</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilBuku();
            ?>
        </tbody>
    </table>
    <br></br>

    <a href="FormBuku.php"><button>Tambah Buku</button></a>
    </div>
</body>
</html>