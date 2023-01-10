u<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_kurikulum = $_GET['id_kurikulum'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM kurikulum where
id_kurikulum=$id_kurikulum");
if ($hapus_data) {
 header('location:data_kurikulum.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_kurikulum.php?pesan=Data Gagal Di hapus');
}