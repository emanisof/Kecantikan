<h2><?php echo $template['title']; ?></h2>
<p class="pull-right">
	<a href="<?php echo base_url()."index.php/pegawai/input"; ?>" class="btn btn-primary btn-sx" toggle="button">TAMBAH DATA</a>
</p>
<table class="table table-striped table-bordered">
	<tr>
		<th>No </th>
		<th>Nama </th>
		<th>Alamat </th>
		<th>Kota</th>
		<th> Tanggal Lahir </th>
		<th>Umur </th>
		<th> No Telp </th>
		<th> Edit </th>
		<th> Hapus </th>
	</tr>
	<?php 
		$no = 1;
		foreach($pegawai as $pgw){
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$pgw['nama']."</td>";
			echo "<td>".$pgw['alamat']."</td>";
			echo "<td>".$pgw['kota']."</td>";
			echo "<td>".$pgw['tgl_lahir']."</td>";
			$umur = DATE('Y') - substr($pgw['tgl_lahir'],0,4);
			echo "<td>".$umur."</td>";
			echo "<td>".$pgw['notelp']."</td>";
			echo "<td><a href='".base_url()."index.php/pegawai/edit/".$pgw['id']."' class='btn btn-warning btn-sm' toggle='button'> EDIT </a></td>";
			echo "<td><a href='#' class='btn btn-danger btn-sm' tonggle='button'> HAPUS </a></td>";
			echo "</tr>";
			$no ++;
		}
	?>
</table>