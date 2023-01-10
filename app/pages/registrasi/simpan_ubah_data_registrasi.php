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
$update_data = mysqli_query($koneksi, "UPDATE registrasi set
id_reg='$id_reg', nim='$nim', tgl_reg='$tgl_reg', 
aktiv='$aktiv' where id_reg=$id_reg");
if ($update_data) {
 header('location:data_registrasi.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_registrasi.php?pesan=Data Gagal Di Ubah');
}