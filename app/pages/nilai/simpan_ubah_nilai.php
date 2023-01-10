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
$update_data = mysqli_query($koneksi, "UPDATE nilai set
id_nilai='$id_nilai', id_identitas='$id_identitas', kode_jurusan='$kode_jurusan', 
grade='$grade' where id_nilai=$id_nilai");
if ($update_data) {
 header('location:data_nilai.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_nilai.php?pesan=Data Gagal Di Ubah');
}