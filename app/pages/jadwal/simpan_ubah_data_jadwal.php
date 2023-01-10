<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_jadwal = $_POST['id_jadwal'];
$id_kalender = $_POST['id_kalender'];
$id_identitas = $_POST['id_identitas'];
$id_program = $_POST['id_program'];
$update_data = mysqli_query($koneksi, "UPDATE jadwal set
id_jadwal='$id_jadwal', id_kalender='$id_kalender', id_identitas='$id_identitas', 
id_program='$id_program' where id_jadwal=$id_jadwal");
if ($update_data) {
 header('location:data_jadwal.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_jadwal.php?pesan=Data Gagal Di Ubah');
}