<div class="padding-top: 20px">
	<?php 
		$attr = array('class'=>'form-horizontal','role'=>'form');
		if(isset($layanan['id']))
		{
			echo form_open('layanan/update/'.$layanan['id'],$attr);
		}else{
			echo form_open('layanan/input',$attr); 
		}
	?>
	<h2><?php echo $template['title']; ?></h2>
	<?php echo validation_errors(); ?>
	<div class="form-group">
		<label for="Nama Layanan" class="col-sm-2 control-label"> Nama Layanan </label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control"  id="layanan" placeholder="Masukan Nama Layanan" value="<?php echo set_value('nama',isset($layanan['nama']) ? $layanan['nama']:NULL); ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-sm-2 control-label"> Keterangan </label>
		<div class="col-sm-4">
			<textarea id="keterangan" name="keterangan" class="form-control" placeholder="" ><?php echo set_value('keterangan',isset($layanan['keterangan']) ? $layanan['keterangan']:NULL); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="harga" class="col-sm-2 control-label"> Harga </label>
		<div class="col-sm-2">
			<input type="text" class="form-control" name="harga" placeholder="Harga Jual Layanan" id="harga"value="<?php echo set_value('harga',isset($layanan['harga']) ? $layanan['harga'] : NULL); ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</div>