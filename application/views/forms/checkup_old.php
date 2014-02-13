<div class="padding-top:20px;">
	<?php 
		$attr = array('class'=>'form-horizontal','role'=>'form');
		echo form_open_multipart('pasien/checkup',$attr); 
		echo validation_errors(); 
	?>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Nama Pasien </label>
		<div class="col-sm-3">
			<input type="text" id="pasien" class="form-control" placeholder="Masukan Kartu Pasien"/>
			<input type="hidden" id="pasien-id" />
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Riwayat Sakit </label>
		<div class="col-sm-4">
			<textarea class="form-control" id="pasien-sakit" readonly="yes"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-sm-2 control-label"> Riwayat Alergi </label>
		<div class="col-sm-4">
			<textarea class="form-control" id="pasien-alergi" readonly="yes"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="keluhan"class="col-sm-2 control-label" >Keluhan Pasien </label>
		<div class="col-sm-4">
			<textarea class="form-control" id="keluhan" rows="5" placeholder="Isikan Keluhan Pasien"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="analisa" class="col-sm-2 control-label">Hasil Analisa</label>
		<div class="col-sm-4">
			<textarea class="form-control" id="anaslisa" rows="5" placeholder="Hasil Dari Analisa"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="hasil"class="col-sm-2 control-label">Tindakan Medis </label>
		<div class="col-sm-4">
			<textarea rows="5" class="form-control" placeholder="Tindakan Medis Yang dilakukan"></textarea>
		</div>
	</div>
	<!-- TEST -->
	<div class="row">
	<div class="form-group">
		<label for="photo" class="col-sm-2 control-label"></label>
	<div id="photo">
	<div class="col-sm-3">
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
				<img data-src="holder.js/100%x100%" alt="...">
			</div>
			<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
			<div>
				<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="newphoto[]"></span>
				<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				<p></p>
				<a href="#" class="btn btn-default" id="addPhoto"> Tambah Photo Lain </a>
			</div>
		</div>
	</div><!-- enf of class sm -->
	</div><!-- photo -->
  	</div><!-- end of Group -->
	</div><!-- end of row -->
	<!-- END OF TEST -->
	<div class="form-group">
		<label for="pegawai" class="col-sm-2 control-label"> Nama Perawat </label>
		<div class="col-sm-3">
			<select name="pegawai" class="form-control">
				<?php 
					foreach($pegawai as $pgw){
						echo '<option value='.$pgw['id'].'>'.$pgw["nama"].'</option>';
					}
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="button" class="col-sm-2 control-label"></label>
		<div class="col-sm-3">
			<button type="submit" class="btn btn btn-primary btn-sx"> Submit </button>
		</div>
	</div>
</div>