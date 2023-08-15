  <div class="container mt-5">
   <?php 
  if (isset($_SESSION['pesan'])){
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
  }
  ?> 
  <h2>Data Barang</h2>
  <hr>
  <a href="../admin/index.php"class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Alat
  </button>
  <div class="clearfix"></div>

  <table class="table table-light table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Kondisi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_barang as $barang) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $barang['nama_barang']; ?></td>
          <td><?= $barang['stok']; ?></td>
          <td><?= $barang['kondisi']; ?></td>
          <td>
            <div class="d-inline">
              <a href="?p=edit-barang&id=<?=$barang['id_barang'];?>"class="btn 
              btn-success btn-sm">Edit</a>
            </div>
            <div class="d-inline">
              <a href="?p=hapus-barang&id=<?=$barang['id_barang'];?>"class="btn 
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
          <form action="../proses/proses-tambah-barang.php" method="post" autocomplete="off">
        <div class="form-group">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" autofocus required>
        </div>
        <div class="row">
          <div class="col md-4">
            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="text" name="stok" class="form-control" required>
            </div>
          </div>
          <div class="col md-4">
            <div class="form-group">
              <label for="kondisi">Kondisi</label>
              <input type="text" name="kondisi" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" value="simpan" name="simpan" class="btn btn-primary">Simpan</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  