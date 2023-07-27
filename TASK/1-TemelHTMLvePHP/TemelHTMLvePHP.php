<?php
include("baglanti.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <title>Klasik Tablo Örneği</title>
</head>

<body>

  <body>
    <div class="container mt-4">
      <h1>Klasik Tablo Örneği</h1>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Yaş</th>
            <th>TC</th>
            <th>Telefon No</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $sql = "SELECT * FROM kullanicilar";
            $sorgu = $baglanti->query($sql);
            while ($sonuc = $sorgu->fetch_assoc()) {
              $k_ad = $sonuc['k_ad'];
              $k_soyad = $sonuc['k_soyad'];
              $k_tc = $sonuc['k_tc'];
              $k_tel = $sonuc['k_tel'];
              $k_yas = $sonuc['k_yas'];
            ?>
              <td><?php echo $k_ad ?></td>
              <td><?php echo $k_soyad ?></td>
              <td><?php echo $k_yas ?></td>
              <td><?php echo $k_tc ?></td>
              <td><?php echo $k_tel ?></td>
          </tr>
        <?php
            }
        ?>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</body>

</html>