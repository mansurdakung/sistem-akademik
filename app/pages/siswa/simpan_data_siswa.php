<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nim = $_POST['nim'];
$id_kurikulum = $_POST['id_kurikulum'];
$tanggallahir = $_POST['tanggallahir'];
$tglLulus = $_POST['tglLulus'];

$insert_data = mysqli_query($koneksi, "INSERT INTO mahasiswa
(nim,level,username,password)
values ('$nim','$id_kurikulum','$tanggallahir','$tglLulus')");
if ($insert_data) {
 header('location:data_siswa.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_siswa.php?pesan=Data Gagal Di simpan');
}