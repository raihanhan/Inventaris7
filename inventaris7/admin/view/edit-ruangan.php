<div class="container mt-5">
    <h2>Ubah data ruangan</h2>
    <br>

    <a href="data-ruangan.php" class="btn btn-primary btn-sm float-left">&larr;Kembali</a>
    <div class="clearfix"></div>

    <?php
    $ruangan = $conn->query("SELECT * FROM ruangan WHERE id_ruangan = '$_GET[id]'");
    $data=$ruangan->fetch_assoc();
    ?>
    <form action="../../../inventaris7/proses/proses-ubah-ruangan.php" method="post" class="mt-3 " autocomplete="off">
        <input type="hidden" name="id" value="<?= $data['id_ruangan']?>">
        <div class="form-group">
            <label> Nama ruangan</label>
            <input type="text" name="nama_ruangan" placeholder="<?=$data['nama_ruangan']?>" class="form-control"
            required value="<?=$data['nama_ruangan']?>">
        </div>
            <div class="col-md-4 mt-4">
            <div class="form-group">
            <label> Kondisi</label>
            <input type="text" name="kondisi" placeholder="<?=$data['kondisi']?>" class="form-control"
            required value="<?=$data['kondisi']?>">
        </div>
            </div>
            <div class="col-md-4 mt-4">
            <div class="form-group">
            <label> Kapasitas</label>
            <input type="text" name="kapasitas" placeholder="<?=$data['kapasitas']?>" class="form-control"
            required value="<?=$data['kapasitas']?>">
        </div>
        </div>
        <div class="col-md-4 mt-5">
            <button type="submit" name="simpan" class="btn btn-success btn-sm">Confirm</button>
        </div>
    </form>
</div>