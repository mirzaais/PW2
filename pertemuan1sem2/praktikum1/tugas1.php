<?php
  $name_fruits = [
    ["ID" => "1", "nama" => "Manggis", "warna" => "ungu", "stock" => 30, "harga" => 25000, "Deskripsi" => "buah tropis yang memiliki citarasa manis segar
    dengan daging buah berwarna putih"],

    ["ID" => "2", "nama" => "sawo", "warna" => "coklat", "stock" => 30, "harga" => 20000, "Deskripsi" => "buah yang lonjong seperti telur dan memiliki warna 
    coklat serta berkulit kasar"],

    ["ID" => "3", "nama" => "jeruk bali", "warna" => "hijau", "stock" => 30, "harga" => 30000, "Deskripsi" => "buah yang memiliki ukuran lebih besar dibandingkan jeruk lainnya
    memiliki kulit yang cukup tebal"],

    ["ID" => "4", "nama" => "naga", "warna" => "merah keunguan", "stock" => 30, "harga" => 10000, "Deskripsi" => "buah yang dihiasi sulur atau sisik berwarna hijau seperti sisik naga "],

    ["ID" => "5", "nama" => "apel", "warna" => "merah & hijau", "stock" => 30, "harga" => 27000, "Deskripsi" => " memiliki bentuk bulat tapi ada beberapa yang lonjong, kulitnya berpori
    agak tebal dan kasar aromanya tidak terlalu tajam"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($name_fruits as $fruit) {
        ?>

        <tr>
            <td><?=$fruit["ID"]?></td>
            <td><?=$fruit["nama"]?></td>
            <td><?=$fruit["warna"]?></td>
            <td><?=$fruit["stock"]?></td>
            <td><?=$fruit["harga"]?></td>
            <td><?=$fruit["Deskripsi"]?></td>


        </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
  