<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
$super_admin = "admin@super_admin.co";
$password = "123456";
if(isset($_POST['super_admin']) && isset($_POST['password'])) {
    if($_POST['super_admin'] == $super_admin && $_POST['password'] == $password) {
        session_start();
        $_SESSION['super_admin'] = $_POST['super_admin'];
        $_SESSION['password'] = $_POST['password'];
        echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
        echo "<center><h1>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h1></center>";
    } elseif($_POST['super_admin'] != $super_admin && $_POST['password'] == $password) {
        echo "<center><h1>Gagal!, super_admin Salah</h1></center>";
    } elseif($_POST['super_admin'] == $super_admin && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Password Salah</h1></center>";
    } elseif($_POST['super_admin'] != $super_admin && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, super_admin & Password Salah</h1></center>";
    } 
} else {
    echo "<center><h1>Gagal!, jangan biarkan super_admin & password kosong</h1></center>";
}
}
?>