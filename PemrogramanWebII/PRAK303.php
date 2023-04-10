<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form method="post" action="PRAK303.php">

        Batas Bawah : <input type="text" name="bawah"><br>
        Batas Atas  : <input type="text" name="atas"><br>
        <input type="submit" name="submit" value="Cetak"><br>
<br>
    </form>
    <?php 
    $j;
    $i;
if(isset($_POST['submit'])) { ?>
    <?php $j = $_POST['atas']; $i=$_POST['bawah'];
    ?>
    
    <?php do {?>
        <?php if( ($i+7) % 5 == 0) { ?>
            <img style="width: 20px;"src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png" 
            alt="">
        <?php } else {?>
            <?=$i;?>
        <?php } ?>
        <?php $i = 1+$i;?>
    <?php } while($i<=$j)?>
<?php } ?>   

</body>
</html>
