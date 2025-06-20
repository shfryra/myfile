<!DOCTYPE html>
<html>
<head>
  <title>Gerobak Fried Chicken</title>
</head>
<body>
  <h2>GEROBAK FRIED CHICKEN</h2>
  <form action="proses.js" method="POST" onsubmit="return hitungTotal()">
    <label><input type="checkbox" name="item" value="D" data-price="2500"> Dada - Rp 2500</label><br>
    <label>Jumlah Dada: <input type="number" id="qty_D" min="0" value="0"></label><br><br>

    <label><input type="checkbox" name="item" value="P" data-price="2000"> Paha - Rp 2000</label><br>
    <label>Jumlah Paha: <input type="number" id="qty_P" min="0" value="0"></label><br><br>

    <label><input type="checkbox" name="item" value="S" data-price="1500"> Sayap - Rp 1500</label><br>
    <label>Jumlah Sayap: <input type="number" id="qty_S" min="0" value="0"></label><br><br>

    <button type="submit">Hitung Total</button>
  </form>

  <h3 id="hasil"></h3>

  <script src="proses.js"></script>
</body>
</html>