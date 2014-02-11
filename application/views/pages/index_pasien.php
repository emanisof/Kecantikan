<h3><?php echo $template['title']; ?></h3>
<table class="table table-striped table-bordered">
	<tr>
		<th> No </th>
		<th> NO Kartu </th>
		<th> Nama </th>
		<th> L/P </th>
		<th> Umur </th>
		<th> Alamat </th>
		<th> Kota </th>
		<th> Terakhir Kontrol </th>
		<th> Detail </th>
		<th> Edit </th>
		<th> Hapus </th>
	</tr>
	<?php
			if($nomor == 0) {
				$nomer = 1;
			}else{
				$nomer = $nomor+1;
			}
			foreach($pasien as $psn){
			echo '<tr>';
			echo '<td>'.$nomer.'</td>';
			echo '<td>'.$psn['no_kartu'].'</td>';
			echo '<td>'.$psn['nama_pasien'].'</td>';
			echo '<td>'.$psn['kelamin'].'</td>';
			$umur = date('Y') - $psn['tgl_lahir'];
			echo '<td>'.$umur.'</td>';
			echo '<td>'.$psn['alamat'].'</td>';
			echo '<td>'.$psn['kota'].'</td>';
			$kontrol = "BELUM ADA";
			echo '<td>'.$kontrol.'</td>';
			echo '<td><a href="'.base_url().'index.php/pasien/view/'.$psn['idpasien'].'" class="btn btn-primary btn-sm"> View </a></td>';
			echo '<td><a href="#" class="btn btn-warning btn-sm"> Edit </a></td>';
			echo '<td><a href="#" class="btn btn-danger btn-sm"> Hapus </a></td>';
			echo '</tr>';
			$nomer++;
		}
	?>
</table>
<?php echo $this->pagination->create_links(); ?>