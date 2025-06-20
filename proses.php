<!DOCTYPE html>
<html>
<head>
    <title>Data Diri</title>
</head>
<body>
    <h2>Data Diri</h2>
    <table border="1" cellpadding="8">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $_POST['tempat_lahir']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo date('d M Y', strtotime($_POST['tanggal_lahir'])); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST['jenis_kelamin']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $_POST['pendidikan']; ?></td>
        </tr>
    </table>
    <br>
    <a href="nama.html">← Kembali ke Form</a>
</body>
</html>
