<?php 	
include 'controller.php';

if (isset($_POST['isi'])) {
	insertPegawai($_POST);
}

if (isset($_POST['update'])) {
	updatePegawai($_POST);
}

 ?>