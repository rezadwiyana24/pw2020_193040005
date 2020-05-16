<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<h1><marquee bgcolor="#3ec7b0">WELCOME</b></marquee></h1>
<br>
	<div class="footer">
		<p align="center">Biar Gampang</p>
		<p align="center">Klik aja buat liat liat !!!</p>
	</div>
	<br>
	<table border="6" align="center" width="65%" cellspacing="12" cellpadding="5"
	<tr bgcolor="#9fd1cf">
		<td bgcolor="#3ec7b0" colspan="8" align="center"><b>INDEX  </b></td>
	</tr>
	<tr>
		<td align="center"><b>NO.</b></td>
		<td align="center"><b>LINK</b></td>
		<td align="center"><b>TUGAS</b></td>

	</tr>
	
	<?php $i = 1;
		for ($no = 9; $no <= 13; $no++) : ?>
			<tr>
				<td align="center"><?= $i; ?>.</td>
				<td><a href="kuliah/pertemuan<?= $no; ?>">Klik Disini</a></td>
				<td align="center">Pertemuan<?= $no; ?></td>
			</tr>
		<?php $i++;
		endfor; ?>
		</tr>

	<tr>
	<?php $i = 1;
		for ($no = 3; $no <= 7; $no++) : ?>
			<tr>
				<td align="center"><?= $i; ?>.</td>
				<td><a href="praktikum/p<?= $no; ?>_SENIN13_193040005">Klik Disini</a></td>
				<td align="center">P<?= $no; ?>_SENIN13_193040005</td>
			</tr>
		<?php $i++;
		endfor; ?>
		</tr>

		<tr>
			<td align="center">1.</td>
			<td><a href="tubes/">Klik Disini</a></td>
			<td align="center">TUBES</td>
		</tr>
	
</body>
</html