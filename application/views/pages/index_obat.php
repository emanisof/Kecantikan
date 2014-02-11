<h3><?php echo $template['title']; ?></h3>
<p class="pull-right">
	<a href="<?php echo base_url().'index.php/obat/input'; ?>" class="btn btn-primary"> Tambah Data </a>
</p>
<table class="table table-striped table-bordered">
	<tr>
		<th> No </th>
		<th> Nama Obat </th>
		<th> Keterangan </th>
		<th> Harga Beli </th>
		<th> Harga Jual </th>
		<th> Stock </th>
		<th> Edit </th>
		<th> Hapus </th>
	</tr>
	<?php 
		$nomor = 1;
		foreach($obat as $obt) {
			echo '<tr>';
			echo '<td>'.$nomor.'</td>';
			echo '<td>'.$obt['nama'].'</td>';
			echo '<td>'.$obt['keterangan'].'</td>';
			echo '<td>'.$obt['harga_beli'].'</td>';
			echo '<td>'.$obt['harga_jual'].'</td>';
			echo '<td>'.$obt['jumlah'].'</td>';
			echo '<td><a href="'.base_url().'index.php/obat/edit/'.$obt['id'].'" class="btn btn-warning btn-sm"> Edit </a></td>';
			echo '<td><a href="'.base_url().'index.php/obat/delete/'.$obt['id'].'" class="btn btn-danger btn-sm" data-confirm="DATA OBAT INI AKAN DIHASPU"> Hapus </a></td>';
			echo '</tr>';
			$nomor++;
		}
	?>
</table>