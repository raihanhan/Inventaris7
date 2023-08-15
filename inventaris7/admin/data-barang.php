<?php 
session_start();
require_once '../config/koneksi.php';

$sql = "SELECT * FROM barang LEFT JOIN user ON barang.id_barang = user.id";
$query=$conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

$no = 1;

require_once 'view/header.php';
if (!isset($_GET['p'])){
    require_once 'view/barang.php';
} elseif($_GET['p']=='edit-barang') {
    require_once 'view/'.$_GET['p'].'.php';
} elseif ($_GET['p']=='hapus-barang') {
   $hapus=$conn->query("DELETE FROM barang WHERE id_barang = '$_GET[id]'");
   if ($hapus) {
    $_SESSION['pesan']='<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>';
    header('location: data-barang.php');
   }
}
require_once 'view/footer.php';