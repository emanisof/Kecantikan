<?php 
		$attr = array('class'=>'form-horizontal','role'=>'form');
		if(!isset($layanan['id'])){
			echo form_open('layanan/category',$attr);
		}else{
			echo form_open('layanan/edit_cat/'.$layanan['id'],$attr);
		}
	echo validation_errors();
?>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label"> Ketegori Layanan </label>
	<div class="col-sm-4">
		<input type="text" name="nama" class="form-control" placeholder="Kategori Layanan" value="<?php echo set_value('nama',isset($layanan['nama']) ? $layanan['nama'] : NULL); ?>" />
	</div>
</div>
<div class="form-group">
	<label for="keterangan" class="col-sm-2 control-label"> Keterangan </label>
	<div class="col-sm-4">
		<textarea name="keterangan" rows="5" class="form-control"><?php echo set_value('keterangan',isset($layanan['keterangan']) ? $layanan['keterangan']:NULL); ?></textarea>	
	</div>
</div>
<div class="form-group">
	<label for="diskon" class="col-sm-2 control-label">  Diskon % </label>
	<div class="col-sm-2">
		<input type="text" name="diskon" class="form-control" placeholder="0,00" value="<?php echo set_value('disc',isset($layanan['disc']) ? $layanan['disc']:NULL); ?>" />
	</div>
</div>
<div class="form-group">
	<label for="button" class="col-sm-2 control-label"> </label>
	<div class="col-sm-2">
		<button type="submit" class="btn btn-primary"> Submit </button>
	</div>
</div>