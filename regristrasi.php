<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td></td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td></td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td></td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="input" value="input">
		</tr>

	</table>
</form>

<?php 
	if(isset($_POST['input'])){
		include 'prosesregis.php';
	}
?>
