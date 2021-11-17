<!-- Cre = Zea Piaji -->
<?php 
	include 'koneksi.php';

	$data_bidang = mysqli_query($koneksi, "SELECT * FROM bidang");


 ?>

<form action="web	.php" method="POST">
	<label for="nama">Nama : </label>
	<input type="text" name="nama"><br>
	<label for="no_hp">Telepon : </label>
	<input type="number" name="no_hp"><br>
	<label for="id_bidang">Bidang :</label>
		<?php foreach ($data_bidang as $key): ?>
			<input type="radio" name="bidang" value=<?php  echo $key['id_bidang'];?>>
			<?php echo $key['bidang']; ?>	
		<?php endforeach ?>
	<br>		
	<button type="submit" name="isi" >Kirim</button>
</form>