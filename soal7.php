<!DOCTYPE html>

<html lang="en">

<head>

  <style>

table, th, td {

border: 3px solid black;

}

</style>

</head>

<body>

  <?php 

$koneksi = mysqli_connect("localhost","root","","arka");

// Check connection

if (mysqli_connect_errno()){

echo "Koneksi database gagal : " . mysqli_connect_error();

}

?>

  <table>

   <thead>

        <tr>

          <th>No</th>

          <th>Kategori</th>

          <th>Jumlah Produk</th>

        </tr>

      </thead>

      <tbody>

        <?php

$no = 1;

$data = mysqli_query($koneksi,"SELECT product_categories.id, product_categories.name, Count(products.name) as jmlh FROM product_categories LEFT JOIN products ON product_categories.id = products.category_id GROUP BY product_categories.id");

while($d = mysqli_fetch_array($data)){

?>

        <tr>

          <td><?php echo $no++; ?></td>

          <td><?php echo $d['name']; ?></td>

          <td><?php echo $d['jmlh']; ?></td>

        </tr>

        <?php 

}

?>

      </tbody>

</table>

</body>

</html>

