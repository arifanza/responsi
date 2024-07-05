function calculateCost() {
    var distance = document.getElementById('distance').value;
    if (distance) {
        var cost = distance * 15000;
        document.getElementById('result').textContent = 'Biaya Pengiriman: Rp. ' + cost;
        
        // Menampilkan form untuk menyimpan data
        document.getElementById('hidden-distance').value = distance;
        document.getElementById('hidden-cost').value = cost;
        document.getElementById('data-form').style.display = 'block';
    } else {
        alert('Mohon masukkan jarak pengiriman.');
    }
}
