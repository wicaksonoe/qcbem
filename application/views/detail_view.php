<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/res/fontawesome/css/fontawesome-all.css" />

	<style>
		@media (max-width: 768px) {
			.col-md4{
				padding-top: 10px;
			}
		}
	</style>
</head>
<body>
	<div class="container" style="padding-top: 15px;">
		<div class="card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-md-6">

					</div>
					<div class="col-md-6">
						<h2>Quick Count Pemilihan</h2>
						<h3>Perolehan Sementara</h3>
					</div>
				</div>
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-4 col-md4">
						<div class="card">
							<div class="card-body bg-info" style="min-height:100px">
								<div class="row">
									<div class="col-3 bg-light">

									</div>
									<div class="col-9">
										<h5>Pasangan No. Urut 1</h5>
										<h6>Apel & Madu</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-md4">
						<div class="card">
							<div class="card-body bg-warning" style="height:100px">
								<div class="row">
									<div class="col-3 bg-light">

									</div>
									<div class="col-9">
										<h5>Pasangan No. Urut 2</h5>
										<h6>Kelapa & Nanas</h6>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-4 col-md4">
						<div class="card-body bg-primary" style="height:100px">
							<div class="row">
								<div class="col-3 bg-light">

								</div>
								<div class="col-9">
									<h5>Pasangan No. Urut 3</h5>
									<h6>Durian & Jeruk</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="padding-top: 15px;">
					<div class="col-12">
						<div class="card">
							<div class="card body">
								<canvas id="grafik"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/res/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/res/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/res/chartjs/Chart.bundle.js"></script>

	<!-- Chart Javascript -->
	<script>
		$(function() {
			var ctx = $('#grafik')[0].getContext('2d');
			var rendChart = new Chart(ctx,{
				type: 'bar',
				data: {
					labels: ["Jurusan 1","Jurusan 2","Jurusan 3","Jurusan 4","Jurusan 5","Jurusan 6"],
					datasets: [{
						label: '# Suara Paslon 1',
						data:[152, 92, 100, 152, 92, 100],
						backgroundColor: [
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8'
						],
						borderColor: [
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8',
							'#17a2b8'
						],
					},{
						label: '# Suara Paslon 2',
						data:[85, 100, 25, 85, 100, 25],
						backgroundColor: [
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107'
						],
						borderColor: [
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107',
							'#ffc107'
						],
						fill: [false],
					},{
						label: '# Suara Paslon 3',
						data:[94, 73, 64, 94, 73, 64],
						backgroundColor: [
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff'
						],
						borderColor: [
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff',
							'#007bff'
						],
						fill: [false],
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		});
	</script>
</body>
</html>