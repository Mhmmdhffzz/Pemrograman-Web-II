<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>" : "<title>Tambah Buku</title>"; ?>
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

        input[type="text"] {
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
    <h2>Form Buku</h2>
    <form action="" method="post">
        <?php
        if (isset($_GET['id_buku'])) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($conn, $sql);

            foreach ($result as $res) :
                ?>
                <table>
                    <tr>
                        <td>ID Buku</td>
                        <td><input type="text" name="id_buku" value="<?php echo $res['id_buku']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td><input type="text" name="judul" value="<?php echo $res['judul_buku']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Nama Penulis</td>
                        <td><input type="text" name="penulis" value="<?php echo $res['penulis']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input type="text" name="penerbit" value="<?php echo $res['penerbit']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td><input type="text" name="thnterbit" value="<?php echo $res['tahun_terbit']; ?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="update">Edit</button>
                        </td>
                    </tr>
                </table>
                <?php
            endforeach;
        } else {
            ?>
            <table>
                <tr>
                    <td>ID Buku</td>
                    <td><input type="text" name="id_buku" required></td>
                </tr>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td>Nama Penulis</td>
                    <td><input type="text" name="penulis" required></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit" required></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="text" name="thnterbit" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Tambah</button>
                    </td>
                </tr>
            </table>
        <?php } ?>
    </form>
    <a href="Buku.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahBuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
        updateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    ?>
</body>
</html>
