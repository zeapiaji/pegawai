<?php
	include 'koneksi.php' ;

	$pegawai=$_GET['id'];

	$delete=mysqli_query($koneksi, "DELETE FROM pegawai WHERE no_pegawai='$pegawai'");

	if ($delete) {
		header("Location: index.php");
	}





 ?>