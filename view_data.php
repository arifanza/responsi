<?php
$data = file_get_contents('data.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengiriman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Pengiriman</h1>
    <pre><?php echo $data; ?></pre>
    <h2><a href="index.html">Kembali</a></h2>
</body>
</html>
