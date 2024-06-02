<html>
	<head>
	<title>Tampil Data Siswa</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Siswa
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>:</th>
				<td>
				<?php echo $nama; ?>
				</td>
			</tr>
			<tr>
			<td>NIS</td>
			<td>:</td>
			<td>
			<?php echo $nis; ?> 
			</td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
			<?php echo $kelas; ?>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>
			<?php echo $tanggal; ?>
			</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td>
			<?php echo $tempat; ?>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
			<?php echo $alamat; ?>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<?php echo $jenis; ?>
			</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
			<?php echo $agama; ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<a href="<?= base_url('datasiswa'); 
				?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>
