<?php

session_start();
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $kondisi = $_POST['kondisi'];
    
    $update = $conn->query("UPDATE barang SET nama_barang = '$nama_barang', stok ='$stok', kondisi='$kondisi' WHERE id_barang = '$id'");
    if ($update) {
        $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
        header('location: ../admin/data-barang.php');
    } else{
        $_SESSION['pesan'] = '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
        header('location: ../admin/data-barang.php?p=edit-barang&id='.$_POST['id']);
    }
}