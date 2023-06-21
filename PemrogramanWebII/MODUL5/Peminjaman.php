<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <style>
        body { 
            width: 900px;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        
        h2 {
            text-align: center;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: turquoise;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background: linear-gradient(to right, #ff0000, #ff7f00, #ffff00, #00ff00, #0000ff, #4b0082, #8b00ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        
        .button-container a {
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .button-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Peminjaman</h2>
    <table>
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
    <div class="button-container">
        <a href="FormPeminjaman.php">Tambah Peminjaman</a>
    </div>
</body>
</html>
