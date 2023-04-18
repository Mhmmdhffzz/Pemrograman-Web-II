<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th {
        background-color: grey;
        padding: 8px;
        
    }
    table {
        border-collapse:collapse;
    }
    td{
        text-align:left;
        padding: 10px 10px;
        padding-top: 0px;
        
    }
    </style>
<body>
<?php
    $data = array(
        array(
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => 87,
        "Nilai UAS" => 65
        ),
        array(
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => 76,
        "Nilai UAS" => 79
        ),
        array(
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => 50,
        "Nilai UAS" => 41
        ),
        array(
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => 60,
        "Nilai UAS" => 75
        )
        );

    foreach ($data as &$item) {
    $item["Nilai Akhir"] = 0.4 * $item["Nilai UTS"] + 0.6 * $item["Nilai UAS"];
        if ($item["Nilai Akhir"] >= 80) {
        $item["Nilai Huruf"] = "A";
        } elseif ($item["Nilai Akhir"] >= 70) {
        $item["Nilai Huruf"] = "B";
        } elseif ($item["Nilai Akhir"] >= 60) {
        $item["Nilai Huruf"] = "C";
        } elseif ($item["Nilai Akhir"] >= 50) {
        $item["Nilai Huruf"] = "D";
        } else {
        $item["Nilai Huruf"] = "E";
    }
}
unset($item); 

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Nilai Huruf</th></tr>";
foreach ($data as $item) {
  echo "<tr>";
  echo "<td>".$item["Nama"]."</td>";
  echo "<td>".$item["NIM"]."</td>";
  echo "<td>".$item["Nilai UTS"]."</td>";
  echo "<td>".$item["Nilai UAS"]."</td>";
  echo "<td>".$item["Nilai Akhir"]."</td>";
  echo "<td>".$item["Nilai Huruf"]."</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>