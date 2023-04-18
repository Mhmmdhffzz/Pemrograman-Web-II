<!DOCTYPE html>
<html>
  <head>
    <title>Mencetak Matriks</title>
  </head>
  <style>
    table,td {
        border-collapse: collapse;
        padding: 5px 5px;
    }
    </style>
  <body>
    <form method="post" action="">
      Panjang: 
      <input type="text" name="rows" id="rows" required><br>
      Lebar: 
      <input type="text" name="cols" id="cols" required><br>
      Nilai: 
      <input type="text" name="values" id="values" required><br>
      <input type="submit" value="Submit">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = $_POST["rows"];
    $cols = $_POST["cols"];
    $values = explode(" ", $_POST["values"]);
    $index = 0;

    $temp_value = count($values);
    $syarat = $rows * $cols;
    if($temp_value != $syarat){
        echo "<p style='color:red'>Jumlah nilai tidak sesuai.</p>";
    } else {
        echo "<table border=1 px>";
        for ($i = 0; $i < $rows; $i++) {
          echo "<tr>";
          for ($j = 0; $j < $cols; $j++) {
            if (isset($values[$index])) {
              echo "<td>" . $values[$index] . "</td>";
              $index++;
            } 
          }
          echo "</tr>";
        }
        echo "</table>";
    }
}
?>

  </body>
</html>