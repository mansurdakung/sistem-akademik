<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include 'config.php';
$id_identitas = $_POST['id_identitas'];
$kodehukum = $_POST['kodehukum'];
$nama_identitas = $_POST['nama_identitas'];
$tglmulai = $_POST['tglmulai'];
$update_data = mysqli_query($koneksi, "UPDATE identitas set
id_identitas='$id_identitas', kodehukum='$kodehukum', nama_identitas='$nama_identitas', 
tglmulai='$tglmulai' where id_identitas=$id_identitas");
if ($update_data) {
 header('location:data_identitas.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_identitas.php?pesan=Data Gagal Di Ubah');
}