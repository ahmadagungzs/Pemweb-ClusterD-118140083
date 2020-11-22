<?php 
	$connect = mysqli_connect("localhost", "root", "", "praktkumpemweb") or die ("koneksi ke database gagal");

	function tambah($data){

		global $connect;

		$nim = $data["nim"];
		$nama = $data["nama"];
		$alamat = $data["alamat"];
		$id_jur = $data["id_jur"];

		if ($data["id_jur"] == "Telekomunikasi") {
			$id_tel = "310TL";
			$query = "INSERT INTO data mahasiswa VALUES ('$nim','$nama','$alamat','$id_tel','$id_jur')";
			mysqli_query($connect, $query);
			return mysqli_affected_rows($connect);	
		}
		else if ($data["id_jur"] == "Elka") {
			$id_elka = "299EL";
			$query = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$id_elka','$id_jur')";
			mysqli_query($connect, $query);
			return mysqli_affected_rows($connect);		
		}
		else if ($data["id_jur"] == "IT") {
			$id_it = "281IT";
			$query = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$id_it','$id_jur')";
			mysqli_query($connect, $query);
			return mysqli_affected_rows($connect);			
		}
		else if ($data["id_jur"] == "Elin") {
			$id_elin = "082ELI";
			$query = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$id_elin','$id_jur')";
			mysqli_query($connect, $query);
			return mysqli_affected_rows($connect);	
		}
	}

	function hapus($data){
		global $connect;
		$nim = $data["nimdel"];
		mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim = $nim");
		return mysqli_affected_rows($connect);
	}

?>