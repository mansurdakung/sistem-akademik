<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_nilai = $_POST['id_nilai'];
$id_identitas = $_POST['id_identitas'];
$kode_jurusan = $_POST['kode_jurusan'];
$grade = $_POST['grade'];

$insert_data = mysqli_query($koneksi, "INSERT INTO nilai
(id_nilai,id_identitas,kode_jurusan,grade)
values ('$id_nilai','$id_identitas','$kode_jurusan','$grade')");
if ($insert_data) {
 header('location:data_nilai.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_nilai.php?pesan=Data Gagal Di simpan');
}