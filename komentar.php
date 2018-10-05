<form method="POST">
	<H1>KOMENTAR</H1>
	<textarea name="KOMENTAR"></textarea><br>
	<input type="submit" name="submit" value="SEND">
</form>

<?php 
	if (isset($_POST['submit'])){
		$komentar = $_POST['KOMENTAR'];

		if (str_word_count($komentar)>= 5) {
			echo "KOMENTAR";
			echo $komentar;

		}
		else{
			echo"harus memasukkan lebih dari 5 karakter";
		}
	}
 ?>
