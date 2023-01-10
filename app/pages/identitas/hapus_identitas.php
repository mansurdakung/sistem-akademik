<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_identitas = $_GET['id_identitas'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM identitas where
id_identitas=$id_identitas");
if ($hapus_data) {
 header('location:data_identitas.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_identitas.php?pesan=Data Gagal Di Ubah');
}