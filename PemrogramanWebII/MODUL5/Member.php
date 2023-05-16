<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            max-width: 900px;
            margin: auto;
        }
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
    <title>Member Perpus</title>
</head>
<body>
    <h2 style= "text-align:Center">Member</h2>
    <table border = "1">
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
    <br></br>
    <a href="FormMember.php"><button>Tambah Member</button></a>
    </div>
</body>
</html>