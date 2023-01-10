<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_reg = $_GET['id_reg'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM registrasi where
id_reg=$id_reg");
if ($hapus_data) {
 header('location:data_registrasi.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_registrasi.php?pesan=Data Gagal Di hapus');
}