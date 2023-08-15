<?php
require_once '../config/koneksi.php';
$sql="SELECT * FROM detail_piinjaman";
$query = $conn->query($sql);
$data=$query->fetch_all(MYSQLI_ASSOC);
$no=1;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<div class="container mt-5">
<table class="table table-light table-hover">
<table class="table table-light table-hover table-bordered">
<thead>
      <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Penanggung Jawab</th>
        <th>Barang/Tempat</th>
        <th>Keterangan</th>
        <th>Mulai</th>
        <th>Tenggang</th>
      </tr>
    </thead>
<tbody>
<?php foreach ($data as $data) : ?>
  <tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nis']; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['barang_tempat']; ?></td>
    <td><?= $data['keterangan']; ?></td>
    <td><?= $data['mulai']; ?></td>
    <td><?= $data['tenggang']; ?></td>
    <td>
    </td>
  </tr>
</tbody>
<?php endforeach;?>
</table>
</table>
</div>
<script>window.print()</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>