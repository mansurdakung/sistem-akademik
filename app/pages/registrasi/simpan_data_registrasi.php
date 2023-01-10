<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_reg = $_POST['id_reg'];
$nim = $_POST['nim'];
$tgl_reg = $_POST['tgl_reg'];
$aktiv = $_POST['aktiv'];

$insert_data = mysqli_query($koneksi, "INSERT INTO registrasi
(id_reg,nim,tgl_reg,aktiv)
values ('$id_reg','$nim','$tgl_reg','$aktiv')");
if ($insert_data) {
 header('location:data_registrasi.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_registrasi.php?pesan=Data Gagal Di simpan');
}