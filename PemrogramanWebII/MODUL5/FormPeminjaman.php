<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
        }

        input[type="text"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #4CAF50;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h2>Form Peminjaman</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_peminjaman']) ) {
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" value="<?php echo $res['id_peminjaman']; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="datetime-local" name="pinjam" value="<?php echo $res['tgl_pinjam']; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="datetime-local" name="kembali" value="<?php echo $res['tgl_kembali']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php 
            endforeach; 
        } else {
        ?>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" required></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="datetime-local" name="pinjam" required></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="datetime-local" name="kembali" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php } ?>
    </form>
    <br>
    <a href="Peminjaman.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>
