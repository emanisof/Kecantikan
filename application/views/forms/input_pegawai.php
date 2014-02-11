<h3><?php echo $template['title']; ?></h3>
<div style="padding-top:30px;">
	<?php 
		$attr = array('class'=>'form-horizontal','role'=>'form');
		if(!isset($pegawai['id'])){
			echo form_open('pegawai/input',$attr);
		}else{
			echo form_open('pegawai/edit/'.$pegawai['id'],$attr);	
		}
	?>
	<?php echo validation_errors(); ?>
	<!-- BEGIN FORM STYLE BOOTSTRAP -->
	<div class="form-group">
		<label for="NamaPegawai" class="col-sm-2 control-label">Nama Pegawai </label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama',isset($pegawai['nama']) ? $pegawai['nama'] : NULL); ?>" placeholder="Nama Pegawai"/>
		</div>
	</div>
	<div class="form-group">
		<label for="ttlahir" class="col-sm-2 control-label"> Tempat & Tgl Lahir </label>
		<div class="row">
			<div class="col-sm-3">
				<input type="text" class="form-control" value="<?php echo set_value('tempatlahir',isset($pegawai['tmp_lahir']) ? $pegawai['tmp_lahir'] : NULL ); ?>" name="tempatlahir" placeholder="Tempat Lahir" />
			</div>
			<div class="col-sm-2 input-group date" data-date="1980-01-01" data-date-format="yyyy-mm-dd">
				<input type="text" class="form-control" value="<?php echo set_value('tgllahir',isset($pegawai['tgl_lahir'])? $pegawai['tgl_lahir']:NULL); ?>" name="tgllahir" placeholder="tgl lahr HH/BB/TTTTT" />
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-sm-2 control-label">Alamat</label>
		<div class="col-sm-3">
			<input type="text" placeholder="Masukan Alamat" class="form-control" name="alamat" value="<?php echo set_value('alamat',isset($pegawai['alamat'])?$pegawai['alamat'] : NULL); ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="kota" class="col-sm-2 control-label">Kota</label>
		<div class="col-sm-3">
			<input type="text" placeholder="Masukan Nama Kota" class="form-control" name="kota" value="<?php echo set_value('kota',isset($pegawai['kota']) ? $pegawai['kota'] : NULL); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label for="kelamin" class="col-sm-2 control-label"> Jenis Kelamin </label>
		<div class="col-sm-2">
			<select name="kelamin" class="form-control">
				<?php
					if(isset($pegawai['kelamin'])) {
						if($pegawai['kelamin']=='L')
						{
							echo "<option value=".$pegawai['kelamin']." selected> Laki-Laki </option>"; 
							echo "<option value='P'> Perempuan </option>";	
						}else{
							echo "<option value=".$pegawai['kelamin']." selected>Perempuan </option>"; 
							echo "<option value='L'> Laki-Kali </option>";
						}
					}else{
						echo '<option value="L"> Laki Laki </option>';
						echo '<option value="P"> Perempuan </option>';
					}
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nohp" class="col-sm-2 control-label">No Handphone</label>
		<div class="col-sm-3">
			<input type="text" placeholder="Masukan Nomor HP" class="form-control" name="nohp" value="<?php echo set_value('nohp',isset($pegawai['notelp']) ? $pegawai['notelp']:NULL); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label for="button" class="col-sm-2 control-label"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-primary">Submit </button>
		</div>
	</div>
	<!-- END OF FORM STYLE -->
</div>