<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editMember();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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
        input[type="datetime-local"],
        input[type="date"] {
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
    <h2>Form Member</h2>
    <form action="" method="post">
    <?php
    
        if( isset($_GET['id_member']) ) {
        $sql = "SELECT * FROM member WHERE id_member = " . $_GET['id_member'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>
        <table>
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" value="<?php echo $res['id_member']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" value="<?php echo $res['nama_member']; ?>" required></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" value="<?php echo $res['nomor_member']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $res['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td><input type="datetime-local" name="daftar" value="<?php echo $res['tgl_mendaftar']; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal bayar Terakhir</td>
                <td><input type="date" name="bayar" value="<?php echo $res['tgl_terakhir_bayar']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_member'])) {
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
                <td>ID Member</td>
                <td><input type="text" name="id_member" required></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" required></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td><input type="datetime-local" name="daftar" required></td>
            </tr>
            <tr>
                <td>Tanggal bayar Terakhir</td>
                <td><input type="date" name="bayar" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php 
                    if (isset($_GET['id_member'])) {
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
    <a href="Member.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahMember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updateMember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>
</body>
</html>
