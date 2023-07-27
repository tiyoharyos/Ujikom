<?php
// panggil file "database.php" untuk koneksi ke database
require_once "config/functions.php";



// pemanggilan file halaman konten sesuai "module" yang dipilih

if ($_GET['module'] == 'dashboard') {
    include "views/dashboard.php";
} elseif ($_GET['module'] == 'Admin') {
    include "views/admin/admin.php";
}
elseif ($_GET['module'] == 'Pengadaan') {
    include "views/pengadaan/pengadaan.php";
}
elseif ($_GET['module'] == 'Buku') {
    include "views/admin/crud_buku/buku.php";
}