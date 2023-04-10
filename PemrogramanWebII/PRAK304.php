<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
<?php

$aset = "<img style='width: 70px;'

src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-
svg-wikimedia-commons-8.png' >";
$gambar = NULL;

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $gambar = $_POST['input'];
    }
    if( isset($_POST['incre']) ) {
    $gambar += 1;
    }
    if( isset($_POST['decre']) ) {
    $gambar -= 1;
    }
    if( empty($gambar) ) { ?>
    <form action="PRAK304.php" method="post">
        Jumlah Bintang : <input type="text" name="input"> </br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php } ?>

    <?php if( !empty($gambar) ) {
    echo "Jumlah Bintang : $gambar "; ?>
    <br><br>

        <?php for( $i = 0; $i < $gambar; $i++ ) {
         echo "$aset";
        } ?>

    <form action="PRAK304.php" method="post">
        <input type="text" name="input" value="<?= $gambar ?>" hidden>
        <button type="submit" name="incre" value="tambah">tambah</button>
        <button type="submit" name="decre" value="kurang">kurang</button>
    </form>
    <?php } ?>
</body>
</html>
