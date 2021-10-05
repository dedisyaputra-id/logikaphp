<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $barang1 = 20000;
    $barang2 = 30000;
    $barang3 = 50000;
    $totalBayarSblmDiskon = $barang1 + $barang2 + $barang3;
    $diskon1 = ($totalBayarSblmDiskon * 20) / 100;
    $diskon2 = ($totalBayarSblmDiskon * 15) / 100;

    $diskonBarang3 = $barang3 - $diskon1;
    $totalBayarStlhDiskon = $barang1 + $barang2 + $diskonBarang3;
    $jumlahBayar = $totalBayarSblmDiskon - $diskon2;
    if ($totalBayarSblmDiskon > 75000) {
        $jumlahBayar;
    } else {
        $totalBayarSblmDiskon;
    }
    ?>
    <table border="1" align="center">
        <tr align="center">
            <th>Barang1</th>
            <th>Barang2</th>
            <th>Barang3</th>
            <th>Diskon 15%</th>
            <th>Total Bayar Tanpa Diskon</th>
        </tr>
        <tr align="center">
            <td><?= $barang1; ?></td>
            <td><?= $barang2; ?></td>
            <td><?= $barang3; ?></td>
            <td><?= $jumlahBayar; ?></td>
            <td><?= $totalBayarSblmDiskon; ?></td>
        </tr>
    </table>
</body>

</html>