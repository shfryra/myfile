<!DOCTYPE html>
<html>
<head>
    <title>Hasil Hitung Rumus</title>
</head>
<body>
    <h2>HASIL HITUNG RUMUS</h2>

    <?php
    $a = $_POST['nilai1'];
    $b = $_POST['nilai2'];
    $rumus = $_POST['rumus'];

    if ($a == 0 && $b == 0) {
        echo "Nilai 1 dan Nilai 2 adalah 0, tidak ada hasil perhitungan.";
    } else {
        echo "Nilai a adalah = $a <br>";
        echo "Nilai b adalah = $b <br>";

        if ($rumus == "segitiga") {
            $hasil = 0.5 * $a * $b;
            echo "Rumus Yang Dipilih adalah = Segitiga <br>";
        } elseif ($rumus == "persegi") {
            $hasil = $a * $b;
            echo "Rumus Yang Dipilih adalah = Persegi Panjang <br>";
        } else {
            echo "Tidak ada rumus yang dipilih.<br>";
            $hasil = null;
        }

        if ($hasil !== null) {
            echo "Hasil Perhitungan Rumus = $hasil";
        }
    }
    ?>
</body>
</html>
