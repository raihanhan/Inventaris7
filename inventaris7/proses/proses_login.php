<?php

session_start();
require_once '../config/koneksi.php';
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
$level = $_POST['level'];

if (empty($username)|| empty($password) || empty($level)){
    header('location: ../login.php');

}
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND id_level ='$level'";
$query = $conn->query($sql);

if ($query->num_rows > 0){
    while ($result = $query->fetch_assoc()){
        $_SESSION['nama'] = $result['nama'];
        $_SESSION['id'] = $result['id'];
        if($result['id_level'] == 1){
            header('Location: ../admin/index.php');    
        } else {
            header('location: ../siswa/dashboard.php');
        }
    }
}else{
     $_SESSION['error']= 'Username atau Password tidak valid';
     header('location: ../login.php');
}