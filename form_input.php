<!DOCTYPE html>
<html>
<head>
    <title>Gerobak Fried Chicken</title>
    <style>
        body { background-color: cornflowerblue; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        h2 { font-family: Arial; }
    </style>
</head>
<body>

<h2>Gerobak Fried Chicken</h2>

<form method="post" action="hasil_pembelian.php">
    <label>Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]" required><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1" required><br><br>

    <label>Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]"><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1"><br><br>

    <label>Kode Potong (D/P/S):</label><br>
    <input type="text" name="kode[]"><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah[]" min="1"><br><br>

    <input type="submit" name="submit" value="Hitung Total">
</form>

</body>
</html>


