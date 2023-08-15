<div class="container mt-5">
    <h2>Ubah data barang</h2>
    <br>

    <a href="data-barang.php" class="btn btn-primary btn-sm float-left">&larr;Kembali</a>
    <div class="clearfix"></div>

    <?php
    $barang = $conn->query("SELECT * FROM barang WHERE id_barang = '$_GET[id]'");
    $data=$barang->fetch_assoc();
    ?>
    <form action="../../../inventaris7/proses/proses-ubah-barang.php" method="post" class="mt-3 " autocomplete="off">
        <input type="hidden" name="id" value="<?= $data['id_barang']?>">
        <div class="form-group">
            <label> Nama Barang</label>
            <input type="text" name="nama_barang" placeholder="<?=$data['nama_barang']?>" class="form-control"
            required value="<?=$data['nama_barang']?>">
        </div>
            <div class="col-md-4 mt-4">
            <div class="form-group">
            <label> Stok</label>
            <input type="text" name="stok" placeholder="<?=$data['stok']?>" class="form-control"
            required value="<?=$data['stok']?>">
        </div>
            </div>
            <div class="col-md-4 mt-4">
            <div class="form-group">
            <label> Kondisi</label>
            <input type="text" name="kondisi" placeholder="<?=$data['kondisi']?>" class="form-control"
            required value="<?=$data['kondisi']?>">
        </div>
        </div>
        <div class="col-md-4 mt-5">
            <button type="submit" name="simpan" class="btn btn-success btn-sm">Confirm</button>
        </div>
    </form>
</div>