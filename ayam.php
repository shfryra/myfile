<!DOCTYPE html>
<html>
<head>
    <body bgcolor="cornflower">
    <title>Gerobak Fried Chicken</title>
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

<h2>Gerobak Fried Chicken</h2>

<!-- Tambahan: Daftar Potongan Ayam -->
<table>
    <tr>
        <th>Kode</th>
        <th>Jenis Potong</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>D</td>
        <td>Dada</td>
        <td>Rp. 2500</td>
    </tr>
    <tr>
        <td>P</td>
        <td>Paha</td>
        <td>Rp. 2000</td>
    </tr>
    <tr>
        <td>S</td>
        <td>Sayap</td>
        <td>Rp. 1500</td>
    </tr>
</table>
<br>

<form method="post">
    <label for="kode[]">Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]" required><br><br>

    <label for="jumlah[]">Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1" required><br><br>

    <!-- Tambahan baris input bisa ditambahkan secara manual untuk contoh sederhana -->
    <label for="kode[]">Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]"><br><br>

    <label for="jumlah[]">Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1"><br><br>


    <label for="kode[]">Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]"><br><br>

    <label for="jumlah[]">Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1"><br><br>

    <input type="submit" name="submit" value="Hitung Total">
</form>
</body>
</html>
