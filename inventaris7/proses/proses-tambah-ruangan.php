<?php

session_start();
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_ruangan = $_POST['nama_ruangan'];
    $kondisi = $_POST['kondisi'];
    $kapasitas = $_POST['kapasitas'];
    
    $query = mysqli_query($conn, "INSERT INTO ruangan (nama_ruangan, kondisi, kapasitas)
                                  VALUES ('$nama_ruangan', '$kondisi', '$kapasitas')");
}

if ($query) {
    header('location: ../admin/data-ruangan.php');
    $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
} else {
    header ('location: ../admin/data-ruangan.php');
    $_SESSION['pesan'] = '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
}