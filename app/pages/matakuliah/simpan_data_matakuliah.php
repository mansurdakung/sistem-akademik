<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_matakuliah = $_POST['id_matakuliah'];
$identitas = $_POST['identitas'];
$kode_mtk = $_POST['kode_mtk'];
$nama_matakuliah = $_POST['nama_matakuliah'];

$insert_data = mysqli_query($koneksi, "INSERT INTO matakuliah
(id_matakuliah,identitas,kode_mtk,nama_matakuliah)
values ('$id_matakuliah','$identitas','$kode_mtk','$nama_matakuliah')");
if ($insert_data) {
 header('location:data_matakuliah.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_matakuliah.php?pesan=Data Gagal Di simpan');
}