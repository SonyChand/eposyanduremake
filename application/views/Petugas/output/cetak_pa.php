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


	<table width="100%" class="tabel1">
		<thead>
			<tr>
				<th>#</th>
				<th>Id KMS</th>
				<th>Nama Anak</th>
				<th>Tanggal Periksa</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
				<th>Tinggi Badan</th>
				<th>Berat Badan</th>
				<th>Berat Badan Optimal</th>
				<th>Status Gizi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($data1 as $row) : ?>
				<?php
				$anak = $this->db->get_where('dataanak', ['nik' => $row->nik_anak])->row();

				$ibu = $this->db->get_where('dataibu', ['nik' => $anak->nik_wali])->row();
				?>
				<tr>
					<th scope="row"><?= $i++ ?></th>
					<td><?= $row->id_kms ?></td>
					<td><?= $anak->nama ?></td>
					<td><?= format_indo($row->tanggal_periksa) ?></td>
					<td><?= $row->jk ?></td>
					<td><?= $row->umur ?></td>
					<td><?= $row->tinggi_badan ?> cm</td>
					<td><?= $row->berat_badan ?> kg</td>
					<td><?= $row->bb_optimal ?> kg</td>
					<td><?= $row->status_gizi ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>