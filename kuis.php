<!DOCTYPE html>
<html>
<head>
    <body bgcolor="cornflower">
    <title>Penjualan Tiket</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            font-family: Arial;
        }
    </style>
</head>
<body>

<h2>Penjualan Tiket Bus XYZ</h2>

<!-- Tambahan: Daftar Potongan Ayam -->
<table>
    <tr>
        <th>Kode Jurusan</th>
        <th>Nama Kota</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>SBY</td>
        <td>Surabaya</td>
        <td> 300,000</td>
    </tr>
    <tr>
        <td>BL</td>
        <td>Bali</td>
        <td> 350,000</td>
    </tr>
    <tr>
        <td>LMP</td>
        <td>Lampung</td>
        <td>500,000</td>
    </tr>
</table>
<br>
<form method="post">
        <label for="Input Nama Pembeli[]">Input Nama Pembeli :</label><br>
        <input type="text" name="Input Nama Pembeli []" required><br>

        <label for="Input No. Handphone[]">Input No. Handphone :</label><br>
        <input type="number" name="Input No. Handphone[]"><br><br>

        <label for="Input Jurusan []">Input Jurusan [SBY/BL/LMP]:</label>
        <input type="radio" name="Jurusan" value="SBY">Surabaya
        <input type="radio" name="Jurusan" value="BL">Bali
        <input type="radio" name="Jurusan" value="LMP">Lampung<br><br>

        <label for="Masukkan Jumlah Beli[]">Masukkan Jumlah Beli:</label><br>
        <input type="number" name="Masukkan Jumlah Beli[]"required><br>

    </form>
<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
     $jurusan = [
        'SBY' => ['Nama Kota' => 'Surabaya', 'harga' => 300000],
        'BL' => ['Nama Kota' => 'Bali', 'harga' => 350000],
        'LMP' => ['Nama Kota' => 'Lampung', 'harga' => 500000],
    ];
     
    $KodeJurusan= $_POST['Input Jurusan'];
    $JumlahBeli=$_POST['Masukkan Jumlah Beli'];

    $totalbayar=0;


    echo"<h3>PENJUALAN TIKET BUS</h3>";
    echo"Nama Pembeli:$InputNamaPembeli";
    echo "No.Handphone :$InputNoHandphone";



}
?>