<?php 
	include 'koneksi.php';

	$data_bidang = mysqli_query($koneksi, "SELECT * FROM bidang");


 ?>

<form action="index.php" method="POST">
	<label for="nama">Nama : </label>
	<input type="text" name="nama"><br>
	<label for="no_hp">Telepon : </label>
	<input type="text" name="no_hp"><br>
	<label for="id_bidang">Bidang :</label>
		<?php foreach ($data_bidang as $key): ?>
			<input type="radio" name="bidang" value=<?php  echo $key['id_bidang'];?>>
			<?php echo $key['bidang']; ?>	
		<?php endforeach ?>
	<br>		
	<input type="submit" name="kirim" value="kirim">
</form>