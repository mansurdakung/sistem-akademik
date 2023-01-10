<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nim = $_POST['nim'];
$id_kurikulum = $_POST['id_kurikulum'];
$tanggallahir = $_POST['tanggallahir'];
$tglLulus = $_POST['tglLulus'];
$update_data = mysqli_query($koneksi, "UPDATE mahasiswa set
nim='$nim', id_kurikulu=$'id_kurikulum', tanggallahir='$tanggallahir', tglLulus='$tglLulus', 
 where nim=$nim");
if ($update_data) {
 header('location:data_siswa.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_siswa.php?pesan=Data Gagal Di Ubah');
}