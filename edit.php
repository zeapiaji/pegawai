<?php 

include 'koneksi.php';

$id=$_GET['id'];

$data= mysqli_query($koneksi, "SELECT * FROM pegawai WHERE no_pegawai='$id'");

$row= mysqli_fetch_assoc($data);

$databidang= mysqli_query($koneksi, "SELECT * FROM bidang");
 ?>


 <form action="web.php" method="post">
 	<input type="text" name="nama" value="<?php echo $row['nama']; ?>">
 	<input type="number" name="no_hp" value="<?php echo $row['no_hp']; ?>">
 	<?php foreach ($databidang as $key): ?>
 		<input type="radio" name="bidang" value=<?php  echo $key['id_bidang'];?>>
			<?php echo $key['bidang']; ?>

 	<?php endforeach ?>
 	<button type="submit" name='update' value="<?php echo $id; ?>">
 		kirim
 	</button>
 </form>