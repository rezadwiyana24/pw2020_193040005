<?php 
	$club = [
    "Juve"   => " Juventus",
	"Barcelona"   => " Barcelona",
	"Real Madrid"   => " Real Madrid",
	"Liverpool" 	=> " Liverpool",
	"PSG"  	=> " Paris Saint Germany",
	"Liverpool"   => " Liverpool",
	"Ac Milan" 	=> " Ac Milan",

];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4c</title>
 	<style>
 		h5 a{
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
 	</style>
 </head>
 <body>
 	<h3>Daftar Pemain Bola Terkenal dan Clubnya</h3>
 	<table cellpadding="5" cellspacing="0">
 		<tr>
 			<th>Cristiono Ronaldo</th>
 			<td>:</td>
 			<td><?php echo $club['Juve']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Lionel Messi</th>
 			<td>:</td>
 			<td><?php echo $club['Barcelona']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Luca Modric</th>
 			<td>:</td>
 			<td><?php echo $club['Real Madrid']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Mohammad Salah</th>
 			<td>:</td>
 			<td><?php echo $club['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Neymar Jr</th>
 			<td>:</td>
 			<td><?php echo $club['PSG']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Sadio Mane</th>
 			<td>:</td>
 			<td><?php echo $club['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Zlantan Ibrahimovic</th>
 			<td>:</td>
 			<td><?php echo $club['Ac Milan']; ?></td>
 		</tr>
 	</table>
 	
 </body>
 </html>