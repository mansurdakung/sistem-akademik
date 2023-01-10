<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_jurusan = $_POST['id_jurusan'];
$id_identitas = $_POST['id_identitas'];
$kode_jurusan = $_POST['kode_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

$insert_data = mysqli_query($koneksi, "INSERT INTO jurusan
(id_jurusan,id_identitas,kode_jurusan,nama_jurusan)
values ('$id_jurusan','$id_identitas','$kode_jurusan','$nama_jurusan')");
if ($insert_data) {
 header('location:data_jurusan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_jurusan.php?pesan=Data Gagal Di simpan');
}