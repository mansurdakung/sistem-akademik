<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "confug.php";
$id_krs = $_POST['id_krs'];
$id_jadwal = $_POST['id_jadwal'];
$jurusan = $_POST['jurusan'];
$tahun = $_POST['tahun'];

$insert_data = mysqli_query($koneksi, "INSERT INTO krs
(id_krs,id_jadwal,jurusan,tahun)
values ('$id_krs','$id_jadwal','$jurusan','$tahun')");
if ($insert_data) {
 header('location:data_krs.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_krs.php?pesan=Data Gagal Di simpan');
}