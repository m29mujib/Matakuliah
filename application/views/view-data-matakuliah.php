<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Matakuliah</title>
</head>
<body>
	<center>
		<table class="table-hover">
			<tr>
				<th colspan="3">
					Tampil Data Mata Kuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Kode Mtk</th>
					<th>:</th>
					<td>
						<?= $kode; ?>
					</td>
				</tr>
				<tr>
					<th>Nama Mtk</th>
					<th>:</th>
					<td>
						<?= $nama; ?>
					</td>
				</tr>
				<tr>
					<th>SKS</th>
					<th>:</th>
					<td>
						<?= $sks; ?>
					</td>
				</tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('matakuliah'); ?>">Kembali</a>
					</td>
				</tr>
			</table>
		</center>

</body>
</html>