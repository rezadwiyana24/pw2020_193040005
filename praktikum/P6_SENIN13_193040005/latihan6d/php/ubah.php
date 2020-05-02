<?php
require 'function.php';

$id = $_GET['id'];
$i = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3 style="margin-left : 40px;">Formulir Ubah Data</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $i["id"]; ?>">
		<ul style="list-style-type : none;">
		<li>
				<label for="photo">Photo :</label><br>
				<input type="text" name="photo" id ="photo" required><br><br>
			</li>
			<li>
				<label for="type">Type :</label><br>
				<input type="text" name="type" id ="type" required><br><br>
			</li>
			<li>
				<label for="photo">Photo :</label><br>
				<input type="text" name="photo" id ="photo" required><br><br>
			</li>
			<li>
				<label for="type">Type :</label><br>
				<input type="text" name="type" id ="type" required><br><br>
			</li>
			<li>
			<label for="merk">Merk :</label><br>
				<select name="merk" id ="merk" required><br><br>
					<option value="">-Merk-</option>
					<option value="Gucci">Gucci</option>
					<option value="Gucci2">Gucci</option>
					<option value="Hm">H&M</option>
					<option value="Hm2">H&M</option>
					<option value="pull">Pull&Beer</option>
					<option value="pull2">Pull&Beer</option>
					<option value="green">Greenlight</option>
					<option value="green2">Greenlight</option>
					<option value="Queen2">QueenBeer</option>
					<option value="queen">QueenBeer</option>

				</select>	
			</li><br>
			<li>
			<label for="type">type :</label><br>
				<select name="type" id ="type" required><br><br>
					<option value="">-Type-</option>
					<option value="Hoodie">Hoodie</option>
					<option value="T-Shirt">T-shirt</option>
				</select>	
			</li><br>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="harga" name="harga" id="harga" required value="<?= $i["harga"]; ?>"><br><br>
			</li>
			<br>
			<button type="submit" name="ubah">Ubah Data!</button>
			<button type="">
				<a href="admin.php" style="text-decoration: none; color : black;">Back</a>
			</button>
		</ul>
	</form>
</body>

</html>