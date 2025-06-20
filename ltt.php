<!DOCTYPE html>
<html>
    <head>
        <title>Gerobak Fried Chicken</title>
        <body bgcolor="cornflower">
            <style>
                table {
                    border-color: collapse;
                    width: 60%
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
                    font-family: arial;
                }
            </style>
        </body>
    </head>
    <h2>Gerobak Fried Chicken</h2>
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
            <td> Rp. 1500</td>
        </tr>
    </table>
    <br>
    <form method="post">
        <label for="kode[]">Kode Potong (D/P/S):</label><br>
        <input type="text" name="kode[]" required><br><br>

        <label for="jumlah[]">Jumlah:</label><br>
        <input type="number" name="jumlah[]" min="1" required><br><br>

            <!---->
        <label for="kode[]">Kode Potong (D/P/S):</label><br>
        <input type="text" name="kode[]"><br><br>

        <label for="jumlah[]">Jumlah:</label><br>
        <input type="number" name="jumlah[]" min="1"><br><br>

            <!---->
        <label for="kode[]">Kode Potong (D/P/S):</label><br>
        <input type="text" name="kode[]"><br><br>

        <label for="jumlah[]">Jumlah:</label><br>
        <input type="number" name="jumlah[]" min="1"><br><br>

        <input type="submit" name="submit" value="Hitung Total">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && ISSET($POST['SUBMIT'])) {
        $_menu = [
            'D'=> ['Jenis'=> 'Dada', 'Harga'=>2500],
            'P'=> ['Jenis'=> 'Paha', 'Harga'=>2000],
            'S'=> ['Jenis'=> 'Sayap', 'Harga'=>1500],
        ];

        $KodeList=$_POST['kode'];
        $Jumlah=$_POST['jumlah'];

        $totalbayar=0;

        echo "<h3>Rincian Pembelian</h3>";
        echo "<table border='1', cellpadding= '5'>";
        echo "<tr><th>Jenis Potong</th></tr><tr><th>Harga Satuan</tr></th><tr><th>Jumlah Beli</th></tr><tr><th>Total</tr?</th?";

        foreach ($KodeList as $i=> $kode) {
            $kode= strtoupper(string: trim(string: $kode));
            $Jumlah= (int) $jumlahList[$i];
        
            if ($Jumlah > 0 && isset ($menu[$kode])) {
                $jenis= $menu [$kode['jenis']];
                $harga= $menu [$kode['harga']];
                $total=$kode*$harga;
                $totalbayar +=$total;
            }
        }
    }
    ?>
</html>
