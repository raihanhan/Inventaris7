<div class="container mt-5">
<div class="row text-center">
  <div class="col-md-4">
    <div class="card" style="width : 18rem;">
      <div class="card-body">

<?php
$q=$conn->query("SELECT COUNT(*) AS id_barang FROM barang");
$r=$conn->query("SELECT COUNT(*) AS id_ruangan FROM ruangan");
$p=$conn->query("SELECT COUNT(*) AS id_detail FROM detail_piinjaman");
$barang = $q->fetch_array();
$ruangan = $r->fetch_array();
$pinjaman = $p->fetch_array();

    $sql="SELECT * FROM detail_piinjaman";
    $query = $conn->query($sql);
    $data=$query->fetch_all(MYSQLI_ASSOC);
    $no=1;
  ?>
        <h5 class="card-title">Data Alat</h5>
        <p class="card-text">Jumlah alat yang tersedia</p>
        <h4><?= $barang['id_barang'];?></h4>
        <a href="data-barang.php" class="btn btn-primary">Lihat data alat</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card" style="width : 18rem;">
      <div class="card-body">
        <h5 class="card-title">Data Ruangan</h5>
        <p class="card-text">Jumlah ruangan yang tersedia</p>
        <h4><?= $ruangan['id_ruangan'];?></h4>
        <a href="data-ruangan.php" class="btn btn-primary">Lihat data ruangan</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card" style="width : 20rem;">
      <div class="card-body">
        <h5 class="card-title">Data Peminjaman</h5>
        <p class="card-text">Jumlah alat dan ruangan yang dipinjam</p>
        <h4><?= $pinjaman['id_detail'];?></h4>
      </div>
    </div>
  </div>
</div>
</div>
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
        <th>Action</th>
      </tr>
    </thead>
<tbody>
  <tr>
  <?php foreach ($data as $data) : ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['nis']; ?></td>
    <td><?= $data['barang_tempat']; ?></td>
    <td><?= $data['keterangan']; ?></td>
    <td><?= $data['mulai']; ?></td>
    <td><?= $data['tenggang']; ?></td>
    <td>
      <div class="d-inline">
      <form action="../../../inventaris7/proses/proses-persetujuan.php" method="post"
      id="persetujuan" name="persetujuan">
      <input type="hidden" name="id_detail" value="<?= $data['id_detail']?>">
      <input type="submit" onclick="setuju()" class="btn btn-success btn-sm" name="setuju" id="setuju" value="Setuju">
      <input type="submit" onclick="tolak()" class="btn btn-danger btn-sm" name="tolak" id="tolak" value="Tolak">
      <script>function setuju() {
    var input = document.getElementById("setuju");
    input.innerHTML = "Disetujui";
    input.disabled = true;
      }     
      </script>
      </form>
      </div>
    </td>
  </tr>
</tbody>
<?php endforeach;?>
</table>
</div>