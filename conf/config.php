<?php
$koneksi = mysqli_connect('localhost','root','','sistem_akademik');	
//mengecek koneksi
if (!$koneksi) {
		die("koneksi gagal:". mysqli_connect_error());
}
else{
	echo "koneksi berhasil";
}

?>