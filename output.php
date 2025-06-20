<!DOCTYPE html>
<html>
<head>
    <title>Struk Pemesanan Tiket</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }
        .struk {
            width: 380px;
            border: 2px dashed #333;
            background-color: #fff;
            padding: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            color: #4A148C;
        }
        table {
            width: 100%;
        }
        td {
            vertical-align: top;
            padding: 3px;
        }
        .line {
            border-top: 2px dashed #999;
            margin: 12px 0;
        }
        .kembali {
            text-align: center;
            margin-top: 15px;
        }
        .kembali a {
            text-decoration: none;
            color: white;
            background-color: #4A148C;
            padding: 6px 12px;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }
        .kembali a:hover {
            background-color: #6A1B9A;
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
            <a href="input.php">Kembali Ke Awal</a>
        </div>
    </div>
</body>
</html>
