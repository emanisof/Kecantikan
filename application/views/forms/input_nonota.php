<div style="padding-top:20px;">
	<?php 
		$attr = array('class'=>'form-horizontal','role'=>'form');
		echo form_open('laporan/nota',$attr);
		echo validation_errors(); 
	?>
	<div class="form-group">
		<label for="nokartu" class="col-sm-2 control-label"> Nomor Kartu Pasien </label>
		<div class="col-sm-3">
			<?php if(!empty($nokartu)) {
				echo '<input type="text" name="nokartu" value="'.strtoupper(set_value('nokartu')).'" placeholder="XXX-DDD" class="form-control" readonly />';
			}else{
				echo '<input type="text" name="nokartu" value="'.strtoupper(set_value('nokartu')).'" placeholder="XXX-DDD" class="form-control" />';
			}
		?>
		</div>
	</div>
	<div class="form-group">
		<label for="button" class="col-sm-2 control-label"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary"> Submit </button>
		</div>
	</div>
	<?php echo form_close(); ?>
</div><!-- End Of Padding Top -->