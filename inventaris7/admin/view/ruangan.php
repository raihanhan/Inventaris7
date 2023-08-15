<div class="container mt-5">
  <!-- <?php 
  if (isset($_SESSION['pesan'])){
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
  }
  ?> -->
  <h2>Data Ruangan</h2>
  <hr>
  <a href="../admin/index.php"class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Ruangan
  </button>
  <div class="clearfix"></div>

  <table class="table table-light table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Ruangan</th>
        <th>Kondisi</th>
        <th>Kapasitas</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_ruangan as $ruangan) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $ruangan['nama_ruangan']; ?></td>
          <td><?= $ruangan['kondisi']; ?></td>
          <td><?= $ruangan['kapasitas']; ?></td>
          <td>
            <div class="d-inline">
              <a href="?p=edit-ruangan&id=<?=$ruangan['id_ruangan'];?>"class="btn 
              btn-success btn-sm">Edit</a>
            </div>
            <div class="d-inline">
              <a href="?p=hapus-ruangan&id=<?=$ruangan['id_ruangan'];?>"class="btn 
              btn-danger btn-sm">Hapus</a>
            </div>
          </td>
        </tr>
    </tbody>
    <?php endforeach;?>
  </table>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data alat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../proses/proses-tambah-ruangan.php" method="post" autocomplete="off">
        <div class="form-group">
          <label for="nama_ruangan">Nama ruangan</label>
          <input type="text" name="nama_ruangan" class="form-control" autofocus required>
        </div>
        <div class="row">
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Kondisi</label>
              <input type="text" name="kondisi" class="form-control" required>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kapasitas">Kapasitas</label>
              <input type="text" name="kapasitas" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" value="simpan" name="simpan" class="btn btn-primary" href="/proses/proses-tambah-ruangan.php">Simpan</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  