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

$insert_data = mysqli_query($koneksi, "INSERT INTO identitas
(id_identitas,kodehukum,nama_identitas,tglmulai)
values ('$id_identitas','$kodehukum','$nama_identitas','$tglmulai')");
if ($insert_data) {
 header('location:data_identitas.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_identitas.php?pesan=Data Gagal Di simpan');
}