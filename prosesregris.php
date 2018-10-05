<?php 

	include 'koneksi.php';
	if(isset($_POST['id'])){
		$id 	= $_POST['id'];
		$sql	= "SELECT * FROM akun WHERE id = $id";

		if ($koneksi -> query($sql)) {
			$result = $koneksi -> query($sql);
			$row    = $result -> fetch_assoc();

		}
	}

	else{
		if(isset($_POST{'input'})){
			include('koneksi.php');

			if($konek) {
				$nim  = $_POST['nim'];
				$nama = $_POST['nama'];
				$email= $_POST['email'];
				//$pass = $_POST['pass'];
				$cekemail= strpos($email, '@gmail.com');
				$ceknama = strpos($nama, is_numeric($nama))

				if (strlen($nim)<=10) {
					if (is_numeric($nim)==true) {
						if (strlen($nama)==true) {
							if (is_string($nama)==true) {
								if ($cekemail == false) {

								}
								$sql = $konek -> query("
									INSERT INTO `mahasiswa`(`nim`, `nama`, `email`)
									VALUES ('$nim', '$nama', '$email')");

								echo "REGISTRASI BERHASIL";
								
						}
						else{
							echo"panjang nilai tidak boleh lebih dari 25 karakter";
						}
					} 
						else{
							echo"NIM harus angka";
						}
					}
						else{
							echo"panjang NIM tidak boleh lebih dari 10 angka";
						}
					}
						else{
							echo"Registrasi Gagal";
						}
					}
				}
			}
 ?>
