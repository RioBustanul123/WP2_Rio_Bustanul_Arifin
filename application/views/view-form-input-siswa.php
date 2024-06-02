<html>
	<head>
		<title>Form Input Data Siswa</title>
	</head>
	<body>
			<center>
			<form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
		<table>
			<tr>
				<th colspan="3">Form Input Data Siswa</th>
			</tr>
			<td colspan="3"><hr></td>
			<tr>
				<th>Nama</th>
				<th>:</th>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>
			<tr>
				<th>NIS</th>
				<td>:</td>
				<td>
					<input type="text" name="nis" id="nis">
				</td>
			</tr>
			<tr>
				<th>Kelas</th>
				<th>:</th>
				<td>
					<input type="text" name="kelas" id="kelas">
				</td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<th>:</th>
				<td>
					<input type="text" name="tanggal" id="tanggal">
				</td>
			</tr>
			<tr>
				<th>Tempat Lahir</th>
				<th>:</th>
				<td>
					<input type="text" name="tempat" id="tempat">
				</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<th>:</th>
				<td>
					<input type="text" name="alamat" id="alamat">
				</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<th>:</th>
				<td>
					<input type="radio" name="jenis" value="Laki-laki" id="jenis">Laki-laki<br>
					<input type="radio" name="jenis" value="Perempuan" id="jenis">Perempuan<br>
				</td>
			</tr>
				<th>Agama</th>
				<td>:</td>
				<td>
					<select name="agama" id="agama">
						<option value="1">Islam</option>
						<option value="2">Kristen</option>
						<option value="3">Katolik</option>
						<option value="4">Budha</option>
						<option value="5">Hindu</option>
						<option value="6">Konghucu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
				<input type="submit" value="Submit">
			</td>
		</tr>	
		</table>
		</form>
		</center>
	</body>
</html>
