<?php

session_start();
require_once '../config/koneksi.php';

if (!isset($_SESSION['id'])) {
    header('location: ../login.php');
}

require_once 'view/header.php';
require_once 'view/dashboard.php';
require_once 'view/footer.php';