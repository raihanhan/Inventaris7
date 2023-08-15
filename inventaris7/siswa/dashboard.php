<?php 
  if (isset($_SESSION['pesan1'])){
    echo $_SESSION['pesan1'];
    unset($_SESSION['pesan1']);
 }
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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Dashboard</span>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  AJUKAN IZIN
</button>
  </div>
</nav>
  <div class="container mt-3 ms-6">
<table class="table table-light table-hover table-bordered">
<thead>
      <tr>
        <th>No</th>
        <th>Penanggung Jawab</th>        
        <th>NIS</th>
        <th>Barang/Tempat</th>
        <th>Keterangan</th>
        <th>Mulai</th>
        <th>Tenggang</th>
        <th>Status</th>
      </tr>
    </thead>
<tbody>
<?php foreach ($data as $data) : ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['nis']; ?></td>
    <td><?= $data['barang_tempat']; ?></td>
    <td><?= $data['keterangan']; ?></td>
    <td><?= $data['mulai']; ?></td>
    <td><?= $data['tenggang']; ?></td>
    <td><?= $data['status']; ?></td>
    <td>
    </td>
  </tr>
</tbody>
<?php endforeach;?>
</table>
<footer>
<div class="position-absolute top-50 start-50">
<a role="button" class="btn btn-danger" href="../admin/logout.php">Keluar</a></div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulir Pengajuan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../proses/proses_form.php" method="post" autocomplete="off">
        <div class="form-group">
          <label for="nama_barang">Nama</label>
          <input type="text" name="nama" class="form-control" autofocus required>
        </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="stok">NIS</label>
              <input type="text" name="nis" class="form-control" required>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Barang/Tempat</label>
              <input type="text" name="barang_tempat" class="form-control" required>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Keterangan</label>
              <textarea class="form-control" type="message-text" name="keterangan" required></textarea>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Mulai</label>
              <input type="text" name="mulai" class="form-control" required>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Tenggang</label>
              <input type="text" name="tenggang" class="form-control" required>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" value="simpan" name="simpan" class="btn btn-primary">Ajukan</button>
        </div>
          </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>