function hitungTotal() {
    let total = 0;
    let pajak = 0;
    let totalBayar = 0;
  
    // Harga satuan
    const harga = {
      D: 2500,
      P: 2000,
      S: 1500
    };
  
    // Ambil checkbox dan jumlah
    if (document.querySelector('input[value="D"]').checked) {
      const qty = parseInt(document.getElementById("qty_D").value) || 0;
      total += qty * harga.D;
    }
  
    if (document.querySelector('input[value="P"]').checked) {
      const qty = parseInt(document.getElementById("qty_P").value) || 0;
      total += qty * harga.P;
    }
  
    if (document.querySelector('input[value="S"]').checked) {
      const qty = parseInt(document.getElementById("qty_S").value) || 0;
      total += qty * harga.S;
    }
  
    pajak = total * 0.1;
    totalBayar = total + pajak;
  
    document.getElementById("hasil").innerHTML = `
      Total: Rp ${total}<br>
      Pajak (10%): Rp ${pajak}<br>
      <strong>Total Bayar: Rp ${totalBayar}</strong>
    `;
  
    return false; // Cegah submit form
  }
  