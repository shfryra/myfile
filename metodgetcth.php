<html>
    <head>
        <title>FORM METODE GET</title>
        <style>
            body {
                background-color: #f0f8ff; /* Biru muda background */
                font-family: Arial, sans-serif;
            }
            form {
                background-color: #ffffff; /* Putih untuk form */
                padding: 20px;
                margin: 50px auto;
                width: 300px;
                border: 2px solid #4CAF50; /* Garis hijau */
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
            input[type="text"] {
                border: 1px solid #4CAF50;
                border-radius: 5px;
                padding: 5px;
                width: 90%;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <form action="metodegetproses.php" method="get">
            Masukkan nama: <input type="text" name="nama" size="25">
            <br><br>
            <input type="submit" value="Proses">
        </form>
    </body>
</html>
