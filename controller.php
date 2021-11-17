<?php 
	include 'koneksi.php';

	function insertPegawai($data){
		global $koneksi;

		$nama = $data['nama'];
		$telepon = $data['no_hp'];
		$bidang = $data['bidang']; 

		$proses = mysqli_query($koneksi, "INSERT INTO pegawai(`nama`, `no_hp`,`id_bidang`) VALUES('$nama','$telepon','$bidang') ");

		if ($proses) {
			echo "<script>alert('Data berhasil di tambahkan');
			document.location= 'index.php'
			</script>";
		}else{
			echo "<script>alert('Data gagal di tambahkan');
			document.location= 'daftar.php'
			</script>";
		}

	}


	function updatePegawai($data){
		global $koneksi;


		$id= $data['update'];

		$nama = $data['nama'];
		$telepon = $data['no_hp'];
		$bidang = $data['bidang'];

		$update= mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', no_hp='$telepon', id_bidang= '$bidang' WHERE no_pegawai='$id' ");
		if ($update) {
			header('location: index.php');
		}
	}
 ?>