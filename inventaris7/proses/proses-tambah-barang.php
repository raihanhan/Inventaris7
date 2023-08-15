<?php

session_start();
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $kondisi = $_POST['kondisi'];
    
    $query = mysqli_query($conn, "INSERT INTO barang (nama_barang, stok, kondisi)
                                  VALUES ('$nama_barang', '$stok', '$kondisi')");
}
if ($query) {
    header('location: ../admin/data-barang.php');
    $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
} else {
    header ('location: ../admin/data-barang.php');
    $_SESSION['pesan'] = '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
}