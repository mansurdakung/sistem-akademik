<?php

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include ('config.php');

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_array($result);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_user'] = $data['id_user'];
    header("location:../app");
} else {
    
}