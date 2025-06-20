<!DOCTYPE html>
<html>
<head>
    <title>Gerobak Fried Chicken</title>
</head>
<body>
    <h2>Gerobak Fried Chicken</h2>

    <form method="post">
        Dada: <input type="number" name="dada" value="0"><br>
        Paha: <input type="number" name="paha" value="0"><br>
        Sayap: <input type="number" name="sayap" value="0"><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dada = $_POST['dada'];
        $paha = $_POST['paha'];
        $sayap = $_POST['sayap'];

        $total = ($dada * 2500) + ($paha * 2000) + ($sayap * 1500);
        $pajak = $total * 0.1;
        $bayar = $total + $pajak;

        echo "<h3>Hasil:</h3>";
        echo "Dada: $dada<br>";
        echo "Paha: $paha<br>";
        echo "Sayap: $sayap<br>";
        echo "Total: $total<br>";
        echo "Pajak 10%: $pajak<br>";
        echo "<b>Total Bayar: $bayar</b>";
    }
    ?>
</body>
</html>