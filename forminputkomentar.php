<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar</title>
</head>
<body>
    <h2>BUKU TAMU</h2>
    <p>Komentar dan Saran Anda Sangat Kami Butuhkan<br>
    Untuk Meningkatkan Kualitas Situs Kami</p>
    
    <form action="tampilan.php" method="POST">
        <label for="nama" style="display: inline-block; width: 130px;">Nama Anda:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email" style="display: inline-block; width: 130px;">Email Anda:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="komentar" style="display: inline-block; width: 130px;">Komentar Anda:</label>
        <textarea id="komentar" name="komentar" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>
</html>
