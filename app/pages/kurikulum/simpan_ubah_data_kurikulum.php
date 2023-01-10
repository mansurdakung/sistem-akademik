<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_kurikulum = $_POST['id_kurikulum'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$update_data = mysqli_query($koneksi, "UPDATE kurikulum set
id_kurikulum='$id_kurikulum', kode='$kode', nama='$nama', 
jurusan='$jurusan' where id_kurikulum=$id_kurikulum");
if ($update_data) {
 header('location:data_kurikulum.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_kurikulum.php?pesan=Data Gagal Di Ubah');
}