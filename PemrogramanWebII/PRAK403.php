<!DOCTYPE html>
<html>
<head>
    <style>
        .revisi {
            background-color: red;
        }
        .tidak-revisi {
            background-color: #008000;
        }
        table{
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 10px;
        }
        th{
            background-color: grey;
            border-color: black;
        }
    </style>
</head>
<body>
<?php
$data = array(
    array(
        "No" => "1",
        "Nama" => "Ridho",
        "Mata Kuliah diambil" => array("Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"),
        "SKS" => array(2, 1, 2, 3)
    ),
    array(
        "No" => "2",
        "Nama" => "Ratna",
        "Mata Kuliah diambil" => array("Basis Data I", "Praktikum Basis Data I", "Kalkulus"),
        "SKS" => array(3, 2, 1)
    ),
    array(
        "No" => "3",
        "Nama" => "Tono",
        "Mata Kuliah diambil" => array("Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"),
        "SKS" => array(3, 3, 3, 3)
    )
);

foreach ($data as &$item) {
    $item["Total SKS"] = array_sum($item["SKS"]);
    if ($item["Total SKS"] < 7) {
        $item["Keterangan"] = "Revisi KRS";
        $item["Warna"] = "revisi";
    } else {
        $item["Keterangan"] = "Tidak Revisi";
        $item["Warna"] = "tidak-revisi";
    }
}
unset($item);

echo "<table border='1'>";
echo "<tr><th rowspan='2'>No</th><th rowspan='2'>Nama</th><th rowspan='2'>Mata Kuliah Diambil</th><th rowspan='2'>SKS</th></tr>";
echo "<tr><th>Total SKS</th><th>Keterangan</th></tr>";

foreach ($data as $item) {
    $mk_count = count($item["Mata Kuliah diambil"]);
    echo "<tr>";
    echo "<td rowspan='" . $mk_count . "'>" . $item["No"] . "</td>";
    echo "<td rowspan='" . $mk_count . "'>" . $item["Nama"] . "</td>";
    
   
    for ($i = 0; $i < $mk_count; $i++) {
        echo "<td>" . $item["Mata Kuliah diambil"][$i] . "</td>";
        echo "<td>" . $item["SKS"][$i] . "</td>";
        if ($i == 0) {
            echo "<td rowspan='" . $mk_count . "'>" . $item["Total SKS"] . "</td>";
            echo "<td class='" . $item["Warna"] . "' rowspan='" . $mk_count . "'>" . $item["Keterangan"] . "</td>";
        }
        echo "</tr><tr>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>