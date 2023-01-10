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
$update_data = mysqli_query($koneksi, "UPDATE matakuliah set
id_matakuliah='$id_matakuliah', identitas='$identitas', kode_mtk='$kode_mtk', 
nama_matakuliah='$nama_matakuliah' where id_matakuliah=$id_matakuliah");
if ($update_data) {
 header('location:data_matakuliah.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_matakuliah.php?pesan=Data Gagal Di Ubah');
}