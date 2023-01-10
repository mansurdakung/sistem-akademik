<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_krs = $_POST['id_krs'];
$id_jadwal = $_POST['id_jadwal'];
$jurusan = $_POST['jurusan'];
$tahun = $_POST['tahun'];
$update_data = mysqli_query($koneksi, "UPDATE krs set
id_krs='$id_krs', id_jadwal='$id_jadwal', jurusan='$jurusan', 
tahun='$tahun' where id_krs=$id_krs");
if ($update_data) {
 header('location:data_krs.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_krs.php?pesan=Data Gagal Di Ubah');
}