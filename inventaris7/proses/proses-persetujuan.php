<!--
include 'koneksi.php';
$id=$_POST;
$status=isset($_POST) ? 1 : 0;
//jika diklik tombol setuju maka nilai var status 1, jika tidak 0
//lalu tinggal update
mysqli_query("update pinjaman set status='$status' where id='$id'");
header("location:daftar_pinjaman.php");
-->
<?php 
session_start();
    require_once '../config/koneksi.php';
    
    if (isset($_POST['setuju'])) {
        $id_detail=$_POST['id_detail'];
        $update = $conn->query("UPDATE detail_piinjaman SET status ='Disetujui' WHERE id_detail='$id_detail' ");
    } elseif (isset($_POST['tolak'])) {
        $id_detail=$_POST['id_detail'];
        $update = $conn->query("UPDATE detail_piinjaman SET status ='Ditolak' WHERE id_detail='$id_detail' ");
    }
    if ($update) {
        header('location: ../admin/index.php');
    } 
?>
