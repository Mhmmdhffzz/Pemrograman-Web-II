<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="PRAK203.php">
        Nilai : <input type="text" name="suhu"><br>
        Dari : <br>
        <input type="radio" name="satuan_awal" value="°C">Celcius<br>
        <input type="radio" name="satuan_awal" value="°F">Fahrenheit<br>
        <input type="radio" name="satuan_awal" value="°R">Rheamur<br>
        <input type="radio" name="satuan_awal" value="°K">Kelvin<br>


        Ke : <br>
        <input type="radio" name="satuan_akhir" value="°C">Celcius<br>
        <input type="radio" name="satuan_akhir" value="°F">Fahrenheit<br>
        <input type="radio" name="satuan_akhir" value="°R">Rheamur<br>
        <input type="radio" name="satuan_akhir" value="°K">Kelvin<br>
        <input type="submit" name="konversi" value="konversi">
</form>
<?php
    if(isset($_POST['konversi'],$_POST['satuan_akhir'],$_POST['hasil'])) {
        $suhu = $_POST['suhu'];
		$satuan_awal = $_POST['satuan_awal'];
		$satuan_akhir = $_POST['satuan_akhir'];
		$hasil = 0;
    
        switch($satuan_awal) {
            case "°C":
                switch($satuan_akhir) {
                    case "°C":
                        $hasil = $suhu;
                        break;
                    case "°F":
                        $hasil = $suhu * 9/5 + 32;
                        break;
                    case "°R":
                        $hasil = $suhu * 4/5;
                        break;
                    case "°K":
                        $hasil = $suhu + 273.15;
                        break;
                }
                break;
            case "°F":
                switch($satuan_akhir) {
                    case "°C":
                        $hasil = ($suhu - 32) * 5/9;
                        break;
                    case "°F":
                        $hasil = $suhu;
                        break;
                    case "°R":
                        $hasil = ($suhu - 32) * 4/9;
                        break;
                    case "°K":
                        $hasil = ($suhu + 459.67) * 5/9;
                        break;
                }
                break;
            case "°R":
                switch($satuan_akhir) {
                    case "°C":
                        $hasil = $suhu * 5/4;
                        break;
                    case "°F":
                        $hasil = $suhu * 9/4 + 32;
                        break;
                    case "°R":
                        $hasil = $suhu;
                        break;
                    case "°K":
                        $hasil = $suhu * 5/4 + 273.15;
                        break;
                }
                break;
            case "°K":
                switch($satuan_akhir) {
                    case "°C":
                        $hasil = $suhu - 273.15;
                        break;
                    case "°F":
                        $hasil = $suhu * 9/5 - 459.67;
                        break;
                    case "°R":
                        $hasil = ($suhu - 273.15) * 4/5;
                        break;
                    case "°K":
                        $hasil = $suhu;
                        break;
                }
                break;
                
        }
    
        // echo "<h2><b>Hasil konversi: $hasil $satuan_akhir</b></h2>";
        // echo "<p>{$suhu} {$awal} sama dengan {$hasil} {$akhir}</p>";
        echo "<h2><b>Hasil konversi: $hasil $satuan_akhir</b></h2>";

    }
    

?>
</body>
</html>