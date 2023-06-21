<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member Perpus</title>
    <style>
        body{
            max-width: 900px;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        
        h2{
            text-align: center;
        }
        
        table{
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td{
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th{
            background-color: turquoise;
            color: #fff;
        }
        
        tr:nth-child(even){
            background-color: #E8E8E8;
        }
        
        .button-container{
            text-align: center;
            margin-top: 20px;
        }
        
        .button-container a{
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .button-container a:hover{
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Member</h2>
    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilMember();
            ?>
        </tbody>
    </table>
    <div class="button-container">
        <a href="FormMember.php">Tambah Member</a>
    </div>
</body>
</html>
