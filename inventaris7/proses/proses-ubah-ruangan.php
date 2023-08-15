<?php

session_start();
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_ruangan = $_POST['nama_ruangan'];
    $kondisi = $_POST['kondisi'];
    $kapasitas = $_POST['kapasitas'];
    
    $update = $conn->query("UPDATE ruangan SET nama_ruangan = '$nama_ruangan', kondisi ='$kondisi', kapasitas='$kapasitas' WHERE id_ruangan = '$id'");
    if ($update) {
        $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
        header('location: ../admin/data-ruangan.php');
    } else{
        $_SESSION['pesan'] = '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
        header('location: ../admin/data-ruangan.php?p=edit-ruangan&id='.$_POST['id']);
    }
}