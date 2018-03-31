<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/fontawesome/css/fontawesome-all.css" />

</head>
<body>
	<div class="container" style="padding-top: 15px;">
		<div class="card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-md-6">

					</div>
					<div class="col-md-6">
						<h2>Login Untuk Submit Data</h2>
						<h2>Perolehan Sementara</h2>
					</div>
				</div>
				<div class="row" style="padding-top: 15px;">
					<div class="col-12">
						<?php echo form_open(); ?>
							<div class="form-group">
								<?php echo form_label('Username','username', 'class="font-weight-bold"'); ?>
								<?php echo form_input('username','', 'class="form-control" id="username" placeholder="Username"')?>
						  	</div>
						  	<div class="form-group">
								<?php echo form_label('Password','password', 'class="font-weight-bold"'); ?>
								<?php echo form_password('password','', 'class="form-control" id="password" placeholder="Password"')?>
						 	 </div>
							<?php echo form_submit('login','Login','class="btn btn-primary"'); ?>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/res/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/res/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>