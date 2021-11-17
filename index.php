<!DOCTYPE html>
<html>

<?php 
include 'head.php';
include 'koneksi.php';

$dataPegawai = mysqli_query($koneksi, "SELECT * FROM pegawai INNER JOIN bidang ON pegawai.id_bidang = bidang.id_bidang ");

$no = 1;
 ?>
<body>

	<!-- Kelompok :
	1. Achdian
	2. Kukuh
	3. Rafril
	4. Zea

	 -->

<a href="daftar.php">Daftar Pegawai</a>


<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Telepon</th>
			<th>Bidang</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($dataPegawai as $pegawai): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pegawai["nama"] ?></td>
				<td><?php echo $pegawai["no_hp"] ?></td>
				<td><?php echo $pegawai["bidang"] ?></td>
				<td><a href="">Update</a> 
					| <a href="delete.php?id=<?php 	echo $pegawai["no_pegawai"] ?>">Hapus</a></td>
			</tr>
		<?php endforeach ?>
	</tbody>



</table>

</body>
</html>