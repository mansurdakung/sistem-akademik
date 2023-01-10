<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "config.php";
$id_nilai = $_GET['id_nilai'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM nilai where
id_nilai=$id_nilai");
if ($hapus_data) {
 header('location:data_nilai.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_nilai.php?pesan=Data Gagal Di hapus');
}