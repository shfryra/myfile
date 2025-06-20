<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskel = $_POST['jeniskel'];
$pekerjaan = $_POST['pekerjaan'] ;
$hobi1 = isset($_POST['hobi1']) ? $_POST['hobi1'] : '';
$hobi2 = isset($_POST['hobi2']) ? $_POST['hobi2'] : '';
$hobi3 = isset($_POST['hobi3']) ? $_POST['hobi3'] : '';
?>
<table border="1" bgcolor="cyan">
    <tr>
        <td colspan="2" align="center"><b>Data Mahasiswa</b></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td><?php echo $pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td><?php echo implode(", ", array_filter([$hobi1, $hobi2, $hobi3])); ?></td>
    </tr>
</table>
<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>
