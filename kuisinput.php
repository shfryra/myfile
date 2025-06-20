<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman Web</title>
</head>
<body>
    <h2>KONSER AMAL INDAHNYA BERBAGI</h2>
    <form action="kuisoutput.php" method="post">
        <table>
            <tr>
                <td><label>Nama Pemesanan</label></td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label>Kode Studio</label></td>
                <td>:</td>
                <td>
                    <select name="studio">
                        <option value="1">Studio 1</option>
                        <option value="2">Studio 2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Jenis Kelas</label></td>
                <td>:</td>
                <td>
                    <input type="radio" name="kelas" value="VIP" required> VIP
                    <input type="radio" name="kelas" value="Festival"> Festival
                </td>
            </tr>
            <tr>
                <td><label>Jumlah Tiket</label></td>
                <td>:</td>
                <td><input type="number" name="jumlah" min="1" required></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Tampil">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>