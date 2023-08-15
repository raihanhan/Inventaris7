<?php
session_start();
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $conn->real_escape_string($_POST['nama']);
    $nis = $conn->real_escape_string($_POST['nis']);
    $barang_tempat = $conn->real_escape_string($_POST['barang_tempat']);
    $keterangan = $conn->real_escape_string($_POST['keterangan']);
    $mulai = $conn->real_escape_string($_POST['mulai']);
    $tenggang = $conn->real_escape_string($_POST['tenggang']);
    $status = $conn->$_POST['status'];

    $query = mysqli_query($conn,"INSERT INTO detail_piinjaman (nama,nis,barang_tempat, keterangan, mulai, tenggang)
                                VALUES ('$nama', '$nis', '$barang_tempat', '$keterangan', '$mulai', '$tenggang')");
}

if ($query) {
    header('location: ../siswa/dashboard.php');
    $_SESSION['pesan1'] = '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
} else {
    header ('location: ../siswa/dashboard.php');
    $_SESSION['pesan1'] = '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
}