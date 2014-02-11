<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet"  href="<?php echo CSS.'default-style.css'; ?>" >
		<link rel="stylesheet"  href="<?php echo CSS.'bootstrap.css'; ?>" >
		<link rel="stylesheet"  href="<?php echo CSS.'bootstrap-theme.css'; ?>" >
		<link rel="stylesheet"  href="<?php echo CSS.'jasny-bootstrap.css'; ?>" >
		<link rel="stylesheet"  href="<?php echo CSS.'jquery-ui-1.10.4.custom.min.css'; ?>" >
		<link rel="stylesheet"  href="<?php echo CSS.'datepicker.css'; ?>" >
		<title><?php echo $template['title']; ?></title>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo base_url();?>" class="navbar-brand"> KECANTIKAN </a>
				</div>
				<div class="collapes navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="dropdown">
							<a classs="dropdown-toggle" data-toggle="dropdown" href="#">Pasien<b class="caret"> </b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'index.php/pasien/input'; ?>">Pasien Baru</a></li>
								<li><a href="<?php echo base_url().'index.php/pasien/checkup'; ?>"> Pasien Check Up</a></li>
								<li><a href="<?php echo base_url().'index.php/pasien/index'; ?>">Data Pasien</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdpwn-toggle" data-toggle="dropdown">Data Obat<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'index.php/obat/input'; ?>">Input Data Obat</a></li>
								<li><a href="<?php echo base_url().'index.php/obat/index'; ?>">Data Stock Obat</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pegawai <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'index.php/pegawai/input'; ?>"> Input Data Pegawai </a></li>
								<li><a href="<?php echo base_url().'index.php/pegawai/index'; ?>"> Data Pegawai </a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Layanan <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url().'index.php/layanan/input'; ?>"> Input Layanan </a></li>
									<li><a href="<?php echo base_url().'index.php/layanan/get_layanan'; ?>"> Data Layanan </a></li>
									<li><a href="<?php echo base_url().'index.php/layanan/category'; ?>"> Input Category Layanan </a></li>
									<li><a href="<?php echo base_url().'index.php/layanan/index_category'; ?>"> Data Category Layanan </a></li>
								</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pembayaran <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'index.php/laporan/nota'; ?>">Masukan Nota </a></li>
								<li><a href="#"> Cetal Laporan </a></li>
							</ul>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li style="padding-right:20px;"><a href="#">About </a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="starter-template">
				<!--// <h1><?php echo $template['title']; ?> </h1> -->
				<p class="lead">
					<?php echo $template['body']; ?>
				</p>
			</div>
		</div>
	<script type="text/javascript" src="<?php echo JS.'jquery-1.10.2.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo JS.'jquery-ui-1.10.4.custom.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo JS.'bootstrap.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo JS.'jasny-bootstrap.js'; ?>"></script>
	<script type="text/javascript"src="<?php echo JS.'bootstrap-datepicker.js';?>"></script>
	<script type="text/javascript" src="<?php echo JS.'jquery.confirm.min.js'; ?>"></script>
	
	<script type="text/javascript">
		 $(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
		 $('.fileinput').fileinput();
		 /* Add Another Field */
		 $(document).ready(function() {
			 var count = 1;			 
			 
			$('#addPhoto').click(function(){
				fieldPhoto();
				return false;	
			});
			function fieldPhoto(){
				$('#photo')
				.append(
					'<div class="col-sm-2">'+
			 	'<div class="fileinput fileinput-new" data-provides="fileinput">'+
			 		'<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">'+
			 			'<img data-src="holder.js/100%x100%" alt="...">'+		
			 		'</div>'+
			 		'<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>'+
			 		'<div>'+
			 			'<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="newphoto[]"></span>'+
			 			'<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>'+
			 		'</div>'+
			 	'</div>'+
			 '</div>');
			}
			$("#konfir").confirm({
				title:"Hapus Data",
				text:"Anda Akan Menghapus Data Ini",
				confirmButton: "YA HAPUS",
				cancelButton: "Tidak"
			});
			/* Delete Diaqlog */
				$('a[data-confirm]').click(function(eval){
		var href = $(this).attr('href');
		if(!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade bs-modal-sm" tableindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hiden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hiden="ture">&times;</button><h4 class="modal-title" id="dataConfrimLabel"> HAPUS DATA INI </h4></div><b><div class="modal-body"></div></b><div class="modal-footer"><button type="button" class="btn btn-default btn-sx" data-dismiss="modal" aria-hiden=""true"> BATAL </button><a class="btn btn-danger btn-sx" aria-hiden="true" id="dataConfirmOK"> HAPUS </a></div></div></div></div>');}
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href',href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});

			/* End Deltge Dialog */
			/* Auto Complete */
			/*
			$(function(){
				$("#pasien").autocomplete({ 
					source:'<?php echo base_url()."index.php/pasien/caridata"; ?>'
				});
			});
			*/
			$(function(){
			$( "#pasien" ).autocomplete({
			source: '<?php echo base_url()."index.php/pasien/caridata"; ?>',
			focus: function( event, ui ) {
				$( "#pasien" ).val( ui.item.label );
				return false;
			},
			select: function( event, ui ) {
				$( "#pasien" ).val( ui.item.label );
				$( "#pasien-id" ).val( ui.item.value );
				$( "#pasien-sakit" ).val( ui.item.sakit ); 
				$("#pasien-alergi").val(ui.item.alergi);
				return false;
			}
		})
		.data( "autocomplete" )._renderItem = function( ul, item ) {
			return $( "<li></li>" )
				.data( "item.autocomplete", item )
				.append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
				.appendTo( ul );
		};
		});
		
			/* End Of Auto Complete */
			});
		/* End Of Add Another Field */
	</script>
	</body>
</html>