<!DOCTYPE html>
<html>
<head>
    <title>Rumus - Rumus</title>
</head>
<body>
    <h2>Rumus - Rumus</h2>
    <form action="hasil_rumus.php" method="post">
        <table>
            <tr>
                <td><label for="nilai1">Nilai 1:</label></td>
                <td><input type="number" name="nilai1" id="nilai1"></td>
            </tr>
            <tr>
                <td><label for="nilai2">Nilai 2:</label></td>
                <td><input type="number" name="nilai2" id="nilai2"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="rumus" value="segitiga" id="segitiga">
                    <label for="segitiga">Segitiga</label><br>
                    <input type="radio" name="rumus" value="persegi" id="persegi">
                    <label for="persegi">Persegi Panjang</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Hitung">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
