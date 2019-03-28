<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan CodeIgniter dengan database MYSQL</title>
</head>
<body>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach ($user as $u) {
		?>
		<tr>
			<td><?php echo $u->nama ; ?></td>
			<td><?php echo $u->alamat ; ?></td>
			<td><?php echo $u->pekerjaan ; ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>