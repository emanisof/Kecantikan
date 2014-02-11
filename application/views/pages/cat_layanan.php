<h1><?php echo $template['title']; ?> </h1>
<div class="pull-right">
<p>
<a href="<?php echo base_url().'index.php/layanan/category'; ?>" class="btn btn-primary btn-sm" toggle="button"> DATA BARU </a>
</p></div>
<table class="table table-striped table-bordered">
	<tr>
		<th> ID </th>
		<th> Nama Layanan </th>
		<th> Keterangan </th>
		<th> Diskon </th>
		<th> Edit </th>
		<th> Hapus </th>
	</tr>
	<?php 
		$no = 1;
		foreach($all_layanan as $layanan)
		{
			echo '<tr>';
			echo '<td>'.$no.'</td>';
			echo '<td>'.$layanan['nama'].'</td>';
			echo '<td>'.$layanan['keterangan'].'</td>';
			echo '<td>'.$layanan['disc'].'</td>';
			$id = $layanan['id'];
			echo '<td><a href="'.base_url("/index.php/layanan/edit_cat/".$id).'" class="btn btn-warning btn-xs" toggle="button"> EDIT </a></td>';
			echo '<td><a href="'.base_url('index.php/layanan/del_category/'.$id).'" class="btn btn-danger btn-xs" toggle="button" data-confirm=" ISI DATA Nama : '.$layanan['nama'].' Discount : '.$layanan['disc'].'">HAPUS</a></td>';
			echo '</tr>';
			$no++;
			
		}
	?>
</table>