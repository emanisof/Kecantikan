<div class="container">
<div class="row">
<div class="col-sx-12 col-md-8">
<h3> DETAIL DATA PASIEN </h3>
<table class="table table-striped table-bordered">
	<tr>
		<th> Data </th>
		<th> Keterangan </th>
	</tr>
	<?php 
		//foreach ($pasien as $psn)
		//{
			echo "<tr>";
			echo "<td> Nomor Kartu </td>";
			echo "<td>".$pasien['no_kartu']."</td>";
			echo "</tr><tr>";
			echo "<td> Nama Pasien </td>";
			echo "<td>".$pasien['nama_pasien']."</td>";
			echo "</tr><tr>";
			echo "<td> Umur Pasien </td>";
			$umur = date('Y') - $pasien['tgl_lahir'];
			echo "<td>".$umur."</td>";
			echo "</tr><tr>";
			echo "<td> Category Pelangan </td>";
			echo "<td>".$pasien['nama']."</td>";
			echo "</tr><tr>";
			echo "<td> Tempat / Tgl Lahir </td>";
			echo "<td>".$pasien['tmp_lahir']." - ".date('d, F Y',strtotime($pasien['tgl_lahir']))."</td>";
			echo "</tr><tr>";
			echo "<td> Alamat / Kota </td>";
			echo "<td>".$pasien['alamat']." - ".$pasien['kota']."</td>";
			echo "</tr><tr>";
			if($pasien['kelamin']=='P') { $jnskelamin = "Perempuan"; } else {$jnskelamin = 'Laki - Laki';}
			echo "<td> Jenis Kelamin </td>";
			echo "<td>".$jnskelamin."</td>";
			echo "</tr><tr>";
			echo "<td> Riwayat Alergi </td>";
			echo "<td>".$pasien['alergi']."</td>";
			echo "</tr><tr>";
			echo "<td> Riwayat Sakit </td>";
			echo "<td>".$pasien['riw_sakit']."</td>";
			echo "</tr><tr>";
			echo "<td> Catatan Lain </td>";
			echo "<td>".$pasien['note']."</td>";
			echo "</tr>";
		//}
	?>
</table>
<p class="pull-right">
	<a href="<?php echo base_url()."index.php/pasien/index"; ?>" class="btn btn-primary btn-sm"> Back to Index </a>
</p>
</div></div></div>
