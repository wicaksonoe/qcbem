<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Submit Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/fontawesome/css/fontawesome-all.css" />

</head>
<body>
	<div class="container" style="padding-top:15px">
		<div class="row align-items-center">
			<div class="col-md-6">

			</div>
			<div class="col-md-6">
				<h2>Form Submit Data</h2>
			</div>
		</div>
		<div class="card border-primary">
			<div class="card-header text-white bg-primary"><strong><h5 style="margin-bottom: 0rem;">Submit Data</h5></strong></div>
			<div class="card-body">	
				<div class="row" style="padding: top 15px;">
					<div class="col-12">
						<div class="alert alert-info">
							<p>Mohon untuk <strong>TIDAK MEMANIPULASI</strong> data yang akan di input.</p>
							<p style="margin-top: -1rem; margin-bottom: 0rem;">Terima Kasih.</p>
						</div>
					</div>
				</div>
				<div class="row" style="padding: top 15px;">
					<div class="col-12">
						<?php echo form_open(); ?>
							<div class="form-group">
								<?php echo form_label('Fakultas','fakultas', 'class="font-weight-bold"'); ?>
								<?php echo form_input('fakultas','', 'class="form-control" id="fakultas"')?>
						  	</div>
						  	<div class="form-group">
								<?php echo form_label('Total Suara Calon A','calon_a', 'class="font-weight-bold"'); ?>
								<?php echo form_input('calon_a','', 'class="form-control" id="calon_a"')?>
							</div>
							<div class="form-group">
								<?php echo form_label('Total Suara Calon B','calon_b', 'class="font-weight-bold"'); ?>
								<?php echo form_input('calon_b','', 'class="form-control" id="calon_b"')?>
							</div>
							<div class="form-group">
								<?php echo form_label('Total Suara Calon C','calon_c', 'class="font-weight-bold"'); ?>
								<?php echo form_input('calon_c','', 'class="form-control" id="calon_c"')?>
							</div>
							<div class="form-group">
								<?php echo form_label('Total Suara Tidak Sah','tidak_sah', 'class="font-weight-bold"'); ?>
								<?php echo form_input('tidak_sah','', 'class="form-control" id="tidak_sah"')?>
							</div>
							<div class="form-group">
								<?php echo form_label('Total Suara','tot', 'class="font-weight-bold"'); ?>
								<?php echo form_input('tot','', 'class="form-control" id="tot" disabled')?>
							</div>
							<?php echo form_submit('kirim','Kirim Data','class="btn btn-primary"'); ?>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?php echo base_url(); ?>assets/res/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/res/bootstrap/js/bootstrap.bundle.js"></script>

	<script type="text/javascript">
		$('#calon_a').keyup(function() {
			var cal_a = parseInt($('#calon_a').val());
			var cal_b = parseInt($('#calon_b').val());
			var cal_c = parseInt($('#calon_c').val());
			var tidak_sah = parseInt($('#tidak_sah').val());
			var tot = cal_a + cal_b + cal_c + tidak_sah;
			$('#tot').val(tot);
		});
		$('#calon_b').keyup(function() {
			var cal_a = parseInt($('#calon_a').val());
			var cal_b = parseInt($('#calon_b').val());
			var cal_c = parseInt($('#calon_c').val());
			var tidak_sah = parseInt($('#tidak_sah').val());
			var tot = cal_a + cal_b + cal_c + tidak_sah;
			$('#tot').val(tot);
		});
		$('#calon_c').keyup(function() {
			var cal_a = parseInt($('#calon_a').val());
			var cal_b = parseInt($('#calon_b').val());
			var cal_c = parseInt($('#calon_c').val());
			var tidak_sah = parseInt($('#tidak_sah').val());
			var tot = cal_a + cal_b + cal_c + tidak_sah;
			$('#tot').val(tot);
		});
		$('#tidak_sah').keyup(function() {
			var cal_a = parseInt($('#calon_a').val());
			var cal_b = parseInt($('#calon_b').val());
			var cal_c = parseInt($('#calon_c').val());
			var tidak_sah = parseInt($('#tidak_sah').val());
			var tot = cal_a + cal_b + cal_c + tidak_sah;
			$('#tot').val(tot);
		});
	</script>
</body>
</html>