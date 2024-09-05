<!doctype html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>

	<style type="text/css">
		* {
			font-family: Verdana, Arial, sans-serif;
		}

		table {
			font-size: x-small;
		}

		tfoot tr td {
			font-weight: bold;
			font-size: x-small;
		}

		.gray {
			background-color: lightgray;
		}

		.tabel1 {
			border-collapse: collapse;
			/* Merges borders for a clean look */
			width: 100%;
			/* Adjust as needed */
		}

		.tabel1 td {
			/* Styles table cells (both data and header cells) */
			border: 1px solid #000;
			padding: 8px;
			text-align: center;
			/* Adjust as needed */
		}

		.tabel1 th {
			/* Styles table header cells */
			border: 1px solid #000;
			padding: 8px;
			text-align: center;
			background-color: lightgray;
			/* Adjust as needed */
		}
	</style>

</head>

<body>

	<table width="100%">
		<tr>
			<td style="text-align: center;">
				<h3><?= $title ?></h3>
			</td>
		</tr>
	</table>


	<table class="tabel1">
		<tr style="margin-bottom: 5; text-align:center">
			<th><b>No</b></th>
			<th><b>Nik</b></th>
			<th><b>Nama Anak</b></th>
			<th><b>Tanggal Imunisasi</b></th>
			<th><b>Jenis Imunisasi</b></th>
			<th><b>Status</b></th>
		</tr>
		<?php $no = 1;
		foreach ($getImunisasiUser as $row): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row['nik']; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['tanggal_imunisasi']; ?></td>
				<td><?= $row['jenis_imunisasi']; ?></td>
				<td>
					<?php if ($row['status'] == 0) { ?>
						Belum
					<?php } else { ?>
						Sudah
					<?php } ?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>

</body>

</html>