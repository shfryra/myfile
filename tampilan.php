<!DOCTYPE html>
<html>
<head>
    <title>Data Komentar Anda</title>
</head>
<body>
    <h2>Data Komentar Anda</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $komentar = htmlspecialchars($_POST['komentar']);

        echo "<p><strong>Nama Anda :</strong> $nama</p>";
        echo "<p><strong>Email Anda :</strong> $email</p>";
        echo "<p><strong>Komentar Anda :</strong> $komentar</p>";
        echo '<br><a href="forminputkomentar.php">INPUT DATA LAGI</a>';
    } else {
        echo "<p>Data tidak tersedia.</p>";
    }
    ?>
</body>
</html>
