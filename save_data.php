<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $distance = $_POST['distance'];
    $cost = $_POST['cost'];
    
    $data = "Jarak: " . $distance . " km, Biaya: Rp. " . $cost . "\n";
    file_put_contents('data.txt', $data, FILE_APPEND);
    
    echo "Data berhasil disimpan! <a href='index.html'>Kembali</a>";
}
?>
