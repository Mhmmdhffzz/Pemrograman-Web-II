<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
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
            background-color: #a0a0a0;
        }
        td{
            background-color: #E8E8E8;
        }
    </style>
</head>
<body>
    <h2 style = "text-align:center">Peminjaman</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilPeminjaman();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="FormPeminjaman.php"><button>Tambah Peminjaman</button></a>
    </div>
</body>
</html>