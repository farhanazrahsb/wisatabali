<?php
	$host='localhost';
	$user='root';
	$password='';
	$db='bali';
	$koneksi=mysql_connect($host,$user,$password);
	$database=mysql_select_db($db, $koneksi);

?>
