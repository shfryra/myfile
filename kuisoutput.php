<?php
if (isset($_GET['back'])) {
    header("Location: input.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman Web</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
        }
        .struk {
            width: 350px;
            border: 1px solid black;
            padding: 10px;
        }
        h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        table {
            width: 100%;
        }
        td {
            vertical-align: top;
            padding: 2px;
        }
        .line {
            border-top: 1px solid black;
            margin: 10px 0;
        }
        .kembali {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="struk">
        <h3>KONSER AMAL INDAHNYA BERBAGI</h3>

        <?php
        $nama = $_POST['nama'];
        $studio = $_POST['studio'];
        $kelas = $_POST['kelas'];
        $jumlah = $_POST['jumlah'];

        if ($studio == "1") {
            $bintang = "Opick";
            $kodeStudio = "Studio 1";
        } else {
            $bintang = "Raihan";
            $kodeStudio = "Studio 2";
        }

        if ($kelas == "VIP") {
            $harga = 500000;
        } else {
            $harga = 250000;
        }

        $total = $harga * $jumlah;
        ?>

        <table>
            <tr><td>Nama Pemesanan</td><td>:</td><td><?php echo $nama; ?></td></tr>
            <tr><td>Kode Studio</td><td>:</td><td><?php echo $kodeStudio; ?></td></tr>
            <tr><td>Bintang Tamu</td><td>:</td><td><?php echo $bintang; ?></td></tr>
            <tr><td>Jenis Kelas</td><td>:</td><td><?php echo $kelas; ?></td></tr>
            <tr><td>Harga</td><td>:</td><td><?php echo number_format($harga, 0, ',', '.'); ?></td></tr>
            <tr><td>Jumlah Beli</td><td>:</td><td><?php echo $jumlah; ?></td></tr>
        </table>

        <div class="line"></div>

        <table>
            <tr><td><strong>Total Harga</strong></td><td>:</td><td><strong><?php echo number_format($total, 0, ',', '.'); ?></strong></td></tr>
        </table>

        <div class="line"></div>

        <div class="kembali">
           <a href="kuisinput.php">Kembali Ke Awal</a>

        </div>
    </div>
</body>
</html>
