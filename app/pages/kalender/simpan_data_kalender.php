<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include 'config.php';
$id_jadwal = $_POST['id_jadwal'];
$id_kalender = $_POST['id_kalender'];
$id_identitas = $_POST['id_identitas'];
$id_program = $_POST['id_program'];

$insert_data = mysqli_query($koneksi, "INSERT INTO jadwal
(id_jadwal,id_kalender,id_identitas,id_program)
values ('$id_jadwal','$id_kalender','$id_identitas','$id_program')");
if ($insert_data) {
 header('location:data_jadwal.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_jadwal.php?pesan=Data Gagal Di simpan');
}