<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <p>Isi Data Dibawah Ini :</p>
    <form action="data.php" method="post">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><textarea name="alamat" rows="3" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir :</td>
                <td><input type="text" name="tempat_lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="text" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki - Laki" required> Laki - Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Pendidikan :</td>
                <td>
                    <select name="pendidikan" required>
                        <option value="S1">S1</option>
                        <option value="D3">D3</option>
                        <option value="SMA">SMA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
