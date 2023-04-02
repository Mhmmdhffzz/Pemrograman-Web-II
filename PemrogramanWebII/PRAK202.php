<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="PRAK202.php">
        Nama: <input type="text" name="Nama" required title="Nama tidak boleh kosong"><br>
        Nim:  <input type="text" name="NIM" required title="NIM tidak boleh kosong"><br>
        Jenis Kelamin : <br>
        <input type="radio" name="Gender" value="Laki-Laki" required title="Jenis Kelamin tidak boleh kosong">Laki-Laki<br>
        <input type="radio" name="Gender" value="Perempuan" required title="Jenis Kelamin tidak boleh kosong">Perempuan<br>
        <input type="submit" name="Submit" value="submit">
        
</form>
<?php
if($_POST){

    echo $_POST['Nama']."<br>";
    echo $_POST['NIM']."<br>";
    if(isset($_POST['Gender'])){ //fugnsi isset untuk memastikan sebuah variabel tidak boleh NULL
        $gender = $_POST['Gender'];
        echo $gender;
    }
}
?>

</body>
</html>