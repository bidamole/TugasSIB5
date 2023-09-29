<?php
require 'KonversiSuhu.php';

$konversi1 = new KonversiSuhu("Celcius", 100, "Fahrenheit");
$konversi2 = new KonversiSuhu("Celcius", 180, "Fahrenheit");
$konversi3 = new KonversiSuhu("Fahrenheit", 212, "Celcius");
$konversi4 = new KonversiSuhu("Fahrenheit", 100, "Celcius");
$konversi5 = new KonversiSuhu("Celcius", 100, "Rheamur");
$konversi6 = new KonversiSuhu("Celcius", 200, "Rheamur");
$konversi7 = new KonversiSuhu("Rheamur", 80, "Celcius");
$konversi8 = new KonversiSuhu("Rheamur", 100, "Celcius");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Konversi Suhu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tabel Konversi Suhu</h2>
    <table>
        <tr>
            <th>Satuan Suhu Awal</th>
            <th>Besaran Suhu</th>
            <th>Satuan Suhu Tujuan</th>
            <th>Hasil Konversi Suhu</th>
        </tr>
        <tr>
            <td><?php echo $konversi1->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi1->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi1->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi1->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi2->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi2->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi2->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi2->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi3->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi3->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi3->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi3->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi4->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi4->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi4->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi4->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi5->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi5->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi5->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi5->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi6->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi6->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi6->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi6->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi7->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi7->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi7->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi7->konversi(); ?></td>
        </tr>
        <tr>
            <td><?php echo $konversi8->getSatuanSuhuAwal(); ?></td>
            <td><?php echo $konversi8->getBesaranSuhu(); ?></td>
            <td><?php echo $konversi8->getSatuanSuhuTujuan(); ?></td>
            <td><?php echo $konversi8->konversi(); ?></td>
        </tr>
    </table>
</body>

</html>

