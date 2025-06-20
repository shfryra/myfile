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

    <input type="submit" name="submit" value="Hitung Total">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $menu = [
        'D' => ['jenis' => 'Dada', 'harga' => 2500],
        'P' => ['jenis' => 'Paha', 'harga' => 2000],
        'S' => ['jenis' => 'Sayap', 'harga' => 1500],
    ];

    $kodeList = $_POST['kode'];
    $jumlahList = $_POST['jumlah'];

    echo "<h3>Rincian Pembelian</h3>";
    echo "<table>";
    echo "<tr><th>Jenis Potong</th><th>Harga Satuan</th><th>Jumlah</th><th>Total</th></tr>";

    $totalBayar = 0;

    for ($i = 0; $i < count($kodeList); $i++) {
        $kode = strtoupper(trim($kodeList[$i]));
        $jumlah = (int)$jumlahList[$i];

        if ($jumlah > 0 && isset($menu[$kode])) {
            $jenis = $menu[$kode]['jenis'];
            $harga = $menu[$kode]['harga'];
            $total = $harga * $jumlah;
            $totalBayar += $total;

            echo "<tr>";
            echo "<td>$jenis</td>";
            echo "<td>Rp. " . number_format($harga, 0, ',', '.') . "</td>";
            echo "<td>$jumlah</td>";
            echo "<td>Rp. " . number_format($total, 0, ',', '.') . "</td>";
            echo "</tr>";
        }
    }

    $pajak = $totalBayar * 0.10;
    $totalAkhir = $totalBayar + $pajak;

    echo "<tr><td colspan='3'><strong>Subtotal</strong></td><td><strong>Rp. " . number_format($totalBayar, 0, ',', '.') . "</strong></td></tr>";
    echo "<tr><td colspan='3'><strong>Pajak 10%</strong></td><td><strong>Rp. " . number_format($pajak, 0, ',', '.') . "</strong></td></tr>";
    echo "<tr><td colspan='3'><strong>Total Bayar</strong></td><td><strong>Rp. " . number_format($totalAkhir, 0, ',', '.') . "</strong></td></tr>";
    echo "</table>";
}
?>

</body>
</html>