<h1><?php echo $template['title']; ?> </h1>
<div class="pull-right">
<p>
<a href="<?php echo base_url().'index.php/layanan/input'; ?>" class="btn btn-primary btn-sm" toggle="button"> DATA BARU </a>
</p></div>
<table class="table table-striped table-bordered">
	<tr>
		<th> ID </th>
		<th> Nama Layanan </th>
		<th> Keterangan </th>
		<th> Harga </th>
		<th> Edit </th>
		<th> Hapus </th>
	</tr>
	<?php 
		$nomer=1;
		foreach($all_layanan as $layanan)
		{
			echo '<tr>';
			echo '<td>'.$nomer.'</td>';
			echo '<td>'.$layanan['nama'].'</td>';
			echo '<td>'.$layanan['keterangan'].'</td>';
			echo '<td>'.$layanan['harga'].'</td>';
			$id = $layanan['id'];
			echo '<td><a href="'.base_url("/index.php/layanan/edit/".$id).'" class="btn btn-warning btn-xs" toggle="button"> EDIT </a></td>';
			echo '<td> <a href="'.base_url("/index.php/layanan/del_layanan/".$id).'" class="btn btn-danger btn-xs" toggle="buttoon" data-confirm="ISI DATA Nama : '.$layanan['nama'].' Keterangan  :'.$layanan['keterangan'].'"> HAPUS </a></td>';			
			echo '</tr>';
			$nomer++;
		}
	?>
</table>