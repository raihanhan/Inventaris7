<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventaris Sevenners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
   <!-- login -->
   <div class="card col-sm-4 mx-auto mt-5">
  <div class="card-header">
    Masuk
  </div>
  <div class="card-body">
    <form action="proses/proses_login.php" method="post" autocomplete="off">
        <div class = "form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" autofocus>
        </div>
        <div class = "form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
        </div>
        <div class = "form-group mb-3">
            <label for="level">Sebagai</label>
            <select name="level" id="level" class="form-select">
            <option selected >--Pilih--</option>
            <option value="1" >Administrator</option>
            <option value="2">Siswa</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        <div class="register">
          <a href="register.php">Register</a></div>
    </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php
    session_start();
    if(isset($_SESSION['error'])){
 ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <center><?=$_SESSION['error'];?></center>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php } unset($_SESSION['error']); ?>
   
    
  </body>
</html>