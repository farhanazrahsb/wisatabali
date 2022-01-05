<?php
include "connection/koneksi.php";
$email = $_POST['email'];
$pesan = $_POST['pesan'];
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=en/index.php'>";
}else if (empty($pesan)){
echo "<script>alert('Pesan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=en/index.php'>";
}else{
	$query = mysql_query("INSERT INTO kontak (email,pesan) 
		VALUES ('$email','$pesan')");
	if ($query){
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=en/index.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=en/index.php'>";
}
}

?>