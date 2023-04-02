<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="PRAK204.php">
        Nilai : <input type="text" name="input"><br>
        <input type="submit" name="Konversi" value="konversi"><br><br>
</form>
<?php
    if(isset($_POST['input'])){
        $a=$_POST['input'];
        if(($a<0)|| ($a> 999)){
            echo "<h2><b>Nilai angka yang diberikan salah<b></h2>";
            }   
            else
                {
                if (($a >= 0) && ($a <= 9))
                    {
                    echo "<h2><b>Hasil: Satuan<b></h2>";
                    }
                else if (($a >= 11) && ($a <= 19))
                    {
                    echo  "<h2><b>Hasil: Belasan<b></h2>";
                    }
                else if (($a >= 20) && ($a <= 99))
                    {
                    echo  "<h2><b>Hasil: Puluhan<b></h2>";
                    }
                else if (($a >= 100) && ($a <= 999))
                    {
                    echo  "<h2><b>Hasil: Ratusan<b></h2>";
                    }
                else if ($a == 10)
                    {  
                    echo  "<h2><b>Hasil: Satuan<b></h2>";
                    }
                }
    }

?>
</body>
</html>