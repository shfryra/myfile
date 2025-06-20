<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding-top: 40px;
        }
        .container {
            background-color: #ffffff;
            border: 2px solid #cccccc;
            width: 450px;
            margin: auto;
            padding: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #4A148C;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 95%;
            padding: 6px;
            border: 1px solid #bbb;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-left: 10px;
        }
        .button-row {
            text-align: center;
            padding-top: 15px;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #4A148C;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            margin: 0 5px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #6A1B9A;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>KONSER AMAL INDAHNYA BERBAGI</h2>
        <form action="output.php" method="post">
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
                    <td colspan="3" class="button-row">
                        <input type="submit" value="Tampil">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
