<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Tablosu</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    // Örnek tablo verileri.
    // Gerçek senaryoda veritabanına bağlanılır ve veriler gerekli veritabanından çekilir.
    $veri_tablosu = array(
        array('urun_id' => 1, 'grup_adi' => 'Elektronik', 'urun_adi' => 'Akıllı Telefon', 'birimi' => 'Adet', 'guncel_stok' => 100),
        array('urun_id' => 2, 'grup_adi' => 'Beyaz Eşya', 'urun_adi' => 'Buzdolabı', 'birimi' => 'Adet', 'guncel_stok' => 50),
        array('urun_id' => 3, 'grup_adi' => 'Ev Aletleri', 'urun_adi' => 'Mikrodalga Fırın', 'birimi' => 'Adet', 'guncel_stok' => 30),
    );

    echo "<table>";
    echo "<tr>";
    echo "<th>Ürün ID</th>";
    echo "<th>Grup Adı</th>";
    echo "<th>Ürün Adı</th>";
    echo "<th>Birimi</th>";
    echo "<th>Güncel Stok</th>";
    echo "</tr>";

    // for each ile verileri tabloya aktarıyoruz.
    foreach ($veri_tablosu as $veri) {
        echo "<tr>";
        echo "<td>" . $veri['urun_id'] . "</td>";
        echo "<td>" . $veri['grup_adi'] . "</td>";
        echo "<td>" . $veri['urun_adi'] . "</td>";
        echo "<td>" . $veri['birimi'] . "</td>";
        echo "<td>" . $veri['guncel_stok'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>