<h3><?php echo $template['title']; ?></h3>
<div style="padding-top:20px;">
<?php 
	$attr = array('class'=>'form-horizontal','role'=>'form');
	if(isset($obat['id'])){
		echo form_open('obat/edit/'.$obat['id'],$attr);
	}else{
		echo form_open('obat/input',$attr); 
	}
?>
<?php echo validation_errors(); ?><!-- VALIDATION ERROR MESSAGES -->
<!-- BEGIN FORM -->
	<!-- BEGINING FORM STYLE -->
	<div class="form-group">
		<label for="NamaObat" class="col-sm-2 control-label"> Nama Obat </label>
		<div class="col-sm-4">
			<input type="text" id="namaobat" name="nama" placeholder="Nama Obat" class="form-control" value="<?php echo set_value('nama',isset($obat['nama']) ? $obat['nama'] : NULL ); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label for="keteranganobat" class="col-sm-2 control-label"> Keterangan </label>
		<div class="col-sm-4">
			<textarea name="keterangan" placeholder="Keterangan Tambagan Untuk Obat" name="ketobat" rows="3" class="form-control"><?php echo set_value('keterangan',isset($obat['keterangan']) ? $obat['keterangan'] : NULL ); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Harga Beli Obat </label>
		<div class="col-sm-2">
			<input type="text" class="form-control" name="harga_beli" placeholder="Harga Beli Obat" value="<?php echo set_value('harga_beli',isset($obat['harga_beli']) ? $obat['harga_beli'] : NULL ); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Harga Jual Obat </label>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="Harga Jual Obat" name="harga_jual" value="<?php echo set_value('harga_jual',isset($obat['harga_jual']) ? $obat['harga_jual'] : NULL ); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Jumlah Stock Awal </label>
		<div class="col-sm-2">
			<input type="text" name="jumlah" class="form-control" placeholder="Jumlah Obat Stock Awal" value="<?php echo set_value('jumlah',isset($obat['jumlah']) ? $obat['jumlah'] : NULL ); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label for="button" class="col-sm-2 control-label"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary"> Submit </button>
			<button type="reset" class="btn btn-default"> Reset </button>
		</div>
	</div>

	<!-- END FORM STYLE -->
<?php echo form_close(); ?> <!-- END FORM -->
</div>