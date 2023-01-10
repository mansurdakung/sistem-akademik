<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_kalender = $_POST['id_kalender'];
$id_identitas = $_POST['id_identitas'];
$id_jurusan = $_POST['id_jurusan'];
$id_program = $_POST['id_program'];
$update_data = mysqli_query($koneksi, "UPDATE kalender set
id_kalender='$id_kalender', id_identitas='$id_identitas', id_jurusan='$id_jurusan', 
id_program='$id_program' where id_kalender=$id_kalender");
if ($update_data) {
 header('location:data_kalender.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_kalender.php?pesan=Data Gagal Di Ubah');
}