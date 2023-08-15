<?php 
session_start();
require_once '../config/koneksi.php';

$sql = "SELECT * FROM ruangan LEFT JOIN user ON ruangan.id_ruangan = user.id";
$query=$conn->query($sql);
$data_ruangan = $query->fetch_all(MYSQLI_ASSOC);

$no = 1;

require_once 'view/header.php';
if (!isset($_GET['p'])){
    require_once 'view/ruangan.php';
} elseif($_GET['p']=='edit-ruangan') {
    require_once 'view/'.$_GET['p'].'.php';
} elseif ($_GET['p']=='hapus-ruangan') {
   $hapus=$conn->query("DELETE FROM ruangan WHERE id_ruangan = '$_GET[id]'");
   if ($hapus) {
    $_SESSION['pesan']='<div class="alert alert-warning" role="alert">Data berhasil dihapus</div>';
    header('location: data-ruangan.php');
   }
}
require_once 'view/footer.php';