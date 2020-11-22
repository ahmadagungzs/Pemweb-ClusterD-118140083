<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 3</title>
</head>
<body>

	<?php
	$connect = mysqli_connect("localhost", "root", "", "praktikumpemweb") or die("koneksi ke database gagal");

	if(isset($_GET['carinama'])){
		$cari = $_GET['carinama'];
		echo "<b>Data yang anda cari : ".$cari."</b><br><br>";
	}
	?>
 
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Nama Jurusan</th>
	</tr>
	
	<?php 
	if(isset($_GET['carinama'])){
		$cari = $_GET['carinama'];
		$data = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE nama LIKE '%".$cari."%'");	
	}
	else{
		$data = mysqli_query($connect, "SELECT * FROM mahasiswa");
		echo "<h3>Data Mahasiswa</h3>";		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d["nim"]; ?></td>
		<td><?php echo $d["nama"]; ?></td>
		<td><?php echo $d["jurusan"]; ?></td>
	</tr>
	<?php } ?>

	</table>
	
	<h4><a href="mainmenu.php" style="text-decoration: none;">Kembali ke menu awal</a></h4>

</body>
</html>