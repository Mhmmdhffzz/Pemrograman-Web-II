<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form method="POST" action="PRAK305.php">
        <input type="text" name="input">
        <input type="submit" name="submit" value="submit">
</form>
<?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $temp = $input;

        for ($i=1;$i <= strlen($temp); $i++ ){
            for($j = 1; $j <=strlen($temp); $j++){
                if($j ==1){
                    echo strtoupper($temp[$i-1]);
                }else {
                    echo strtolower($temp[$i-1]);
                }
            }
        }
    }
?>
</body>
</html>
