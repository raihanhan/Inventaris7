<?php

session_start();
require_once '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = $_POST['id_level'];
    
    $query = mysqli_query($conn, "INSERT INTO user (nama, username, password, id_level)
                                  VALUES ('$nama', '$username', '$password', '$id_level')");
}
if ($query) {
    header('location: ../login.php');
    $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
} 