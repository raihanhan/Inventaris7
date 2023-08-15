<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventaris Sevenners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <!-- Register -->
   <div class="card col-sm-4 mx-auto mt-5">
  <div class="card-header">
    register
  </div>
  <div class="card-body">
    <form action="proses/proses_register.php" method="post" autocomplete="off">
        <div class = "form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" autofocus>
        </div>
        <div class = "form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
            <div id="passwordHelpBlock" class="form-text">Masukan NIS(Nomor Induk Siswa) anda.</div>
        </div>
        <div class = "form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
            <div id="passwordHelpBlock" class="form-text">Disarankan password menggunakan NIS anda.</div>
        </div>
        <input type="text" name="id_level" id="id_level" class="form-control" value="2" hidden>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Daftar</button>
    </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>