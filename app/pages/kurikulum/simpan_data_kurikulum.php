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

$insert_data = mysqli_query($koneksi, "INSERT INTO kurikulum
(id_kurikulum,kode,nama,jurusan)
values ('$id_kurikulum','$nama','$nama','$jurusan')");
if ($insert_data) {
 header('location:data_kurikulum.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_kurikulum.php?pesan=Data Gagal Di simpan');
}