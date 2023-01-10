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
$nama_jurusan= $_POST['nama_jurusan'];
$update_data = mysqli_query($koneksi, "UPDATE jurusan set
id_jurusan='$id_jurusan', id_identitas='$id_identitas', kode_jurusan='$kode_jurusan', 
nama_jurusan='$nama_jurusan' where id_jurusan=$id_jurusan");
if ($update_data) {
 header('location:data_jurusan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_jurusan.php?pesan=Data Gagal Di Ubah');
}