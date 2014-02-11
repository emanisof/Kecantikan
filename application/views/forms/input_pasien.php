<div style="padding-top:20px;">
<?php echo validation_errors(); ?>
<?php 
	$attr = array('class'=>'form-horizontal','role'=>'form');
	echo form_open('pasien/input',$attr); 
?>
		<!--// Begin Form //-->
		<!-- Remove ID CARD Will Replace By Automatic Script 
		<div class="form-group">
			<label for="nokartu" class="col-sm-2 control-label">Nomor Kartu</label>
			<div class="col-sm-2">
				<input type="text" id="nokartu" name="nokartu" placeholder="Nomor Kartu Pasien" class="form-control" />
			</div>
		</div>
		-->
		<div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
			<div class="col-sm-6">
				<input type="text" id="nama" name="nama" placeholder="Nama Lengkap Pasien" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<label for="tempatlahir" class="col-sm-2 control-label">Tempat / Tanggal Lahir</label>
			<div class="row"> <!--// IN LINE CLAA //-->
			<div class="col-sm-3">
				<input type="text" id="tempatlahir" name="tmp_lahir" placeholder="Kota Kelahiran" class="form-control" />
			</div>
			<div style="padding-left:15px;" class="col-sm-2 input-group date" data-date="1980/06/01" data-date-format="yyyy/mm/dd">	
				<input type="text" name="tgl_lahir" placeholder="Tanggal Kelahiran" readonly="" class="form-control" />
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			</div>
			</div><!--// END OF INLINE //-->
		</div>
		
		<div class="form-group">
			<label for="jeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
			<div class="col-sm-2">
				<select class="form-control" name="jnskelamin">
					<option value="L"> Laki - Laki </option>
					<option value="P"> Perempuan </option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kawin" class="col-sm-2 control-label"> Status Nikah </label>
			<div class="col-sm-2">
				<select name="nikah" class="form-control">
					<option value="0"> Belum Nikah </option>
					<option value="1"> Sudah Nikah </option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="category" class="col-sm-2 control-label"> Category </label>
			<div class="col-sm-2">
				<select class="form-control" name="category">
					<?php 
						foreach($category as $cat)
						{
							echo '<option value='.$cat['id'].'>'.$cat['nama'].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 control-label"> Alamat </label>
			<div class="col-sm-6">
				<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Lengkap" />
			</div>
		</div>
		<div class="form-group">
			<label for="kota" class="col-sm-2 control-label">Kota </label>
			<div class="col-sm-4">
				<input type="text" id="kota" name="kota" class="col-sm-4 form-control" placeholder="Nama Kota / Kabupaten " />
			</div>
		</div>
		<div class="form-group">
			<label for="notelp" class="col-sm-2 control-label"> No Telp </label>
			<div class="col-sm-4">
				<input type="text" name="notelp" id="notelp"class="form-control" placeholder="No Telp XXX-XXXXXXX" /> 
			</div> 
		</div>
		<div class="form-group">
			<label for="nohp" class="col-sm-2 control-label"> No Handphone </label>
			<div class="col-sm-4">
				<input type="text" name="nohp" id="nohp" class="form-control" placeholder="No HP 08XXXXXXX" />
			</div>
		</div>
		<div class="form-group">
			<label for="pekerjaan" class="col-sm-2 control-label"> Pekerjaan </label>
			<div class="col-sm-4">
				<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" />
			</div>
		</div>
		<div class="form-group">
			<label for="riwayatsakit" class="col-sm-2 control-label"> Riwayat Penyakit </label>
			<div class="col-sm-6">
				<textarea class="form-control" name="rsakit" rows="4" id="riw_sakit"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="alergi" class="col-sm-2 control-label"> Riwayat Alergi </label>
			<div class="col-sm-6">
				<textarea class="form-control" rows="4" name="ralergi" id="riw_alergi"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="notes" class="col-sm-2 control-label"> Catatan Tambahan </label>
			<div class="col-sm-6">
				<textarea class="form-control" rows="4" name="note" id="note"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="button" class="col-sm-2 control-label"></label>
			<div class="row">
			<div class="col-sm-1">
				<button type="submit" class="btn btn-primary"> Simpan </button>
			</div>
			<div class="col-sm-1">
				<button type="reset" class="btn btn-default"> Reset </button>
			</div>
			</div>
		</div>
		<!--// End Form Group //-->	
		<?php echo form_close(); ?>
</div>