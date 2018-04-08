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
	<div class="container" style="padding-top: 15px; padding-bottom: 15px;">
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
				<div class="row" style="padding-top:20px;">
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan1 : <strong><span class="jur1"></span></strong> Suara
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan2 : <strong><span class="jur2"></span></strong> Suara
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan3 : <strong><span class="jur3"></span></strong> Suara
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="padding-top:20px;">
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan4 : <strong><span class="jur4"></span></strong> Suara
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan5 : <strong><span class="jur5"></span></strong> Suara
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								Suara Masuk Dari Jurusan6 : <strong><span class="jur6"></span></strong> Suara
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
		//Ajax Chart Function
		$(document).ready(function() {
			setInterval(function(){
				$.ajax({
					method: "GET",
					url:"<?php echo base_url();?>index.php/detail/view"
				});
				$.getJSON('./assets/res/json_data.json', function(all){
					var ctx = $('#grafik')[0].getContext('2d');
					var rendChart = new Chart(ctx,{
						type: 'bar',
						data: {
							labels: ["Jurusan 1","Jurusan 2","Jurusan 3","Jurusan 4","Jurusan 5","Jurusan 6"],
							datasets: [{
								label: '# Suara Paslon 1',
								data:[all[0].jurusan1, all[0].jurusan2, all[0].jurusan3, all[0].jurusan4, all[0].jurusan5, all[0].jurusan6],
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
								data:[all[1].jurusan1, all[1].jurusan2, all[1].jurusan3, all[1].jurusan4, all[1].jurusan5, all[1].jurusan6],
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
								data:[all[2].jurusan1, all[2].jurusan2, all[2].jurusan3, all[2].jurusan4, all[2].jurusan5, all[2].jurusan6],
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
							},{
								label: '# Suara Tidak Sah',
								data:[all[3].jurusan1, all[3].jurusan2, all[3].jurusan3, all[3].jurusan4, all[3].jurusan5, all[3].jurusan6],
								backgroundColor: [
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db'
								],
								borderColor: [
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db',
									'#d6d9db'
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
					$('.jur1').text(all[4].jurusan1);
					$('.jur2').text(all[4].jurusan2);
					$('.jur3').text(all[4].jurusan3);
					$('.jur4').text(all[4].jurusan4);
					$('.jur5').text(all[4].jurusan5);
					$('.jur6').text(all[4].jurusan6);
				});
			}, 5000);
		});

		//Initial Chart Load
		$(function() {
			var all = <?php echo $all; ?>;
			var ctx = $('#grafik')[0].getContext('2d');
			var rendChart = new Chart(ctx,{
				type: 'bar',
				data: {
					labels: ["Jurusan 1","Jurusan 2","Jurusan 3","Jurusan 4","Jurusan 5","Jurusan 6"],
					datasets: [{
						label: '# Suara Paslon 1',
						data:[all[0].jurusan1, all[0].jurusan2, all[0].jurusan3, all[0].jurusan4, all[0].jurusan5, all[0].jurusan6],
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
						data:[all[1].jurusan1, all[1].jurusan2, all[1].jurusan3, all[1].jurusan4, all[1].jurusan5, all[1].jurusan6],
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
						data:[all[2].jurusan1, all[2].jurusan2, all[2].jurusan3, all[2].jurusan4, all[2].jurusan5, all[2].jurusan6],
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
					},{
						label: '# Suara Tidak Sah',
						data:[all[3].jurusan1, all[3].jurusan2, all[3].jurusan3, all[3].jurusan4, all[3].jurusan5, all[3].jurusan6],
						backgroundColor: [
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db'
						],
						borderColor: [
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db',
							'#d6d9db'
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
			$('.jur1').text(all[4].jurusan1);
			$('.jur2').text(all[4].jurusan2);
			$('.jur3').text(all[4].jurusan3);
			$('.jur4').text(all[4].jurusan4);
			$('.jur5').text(all[4].jurusan5);
			$('.jur6').text(all[4].jurusan6);
		}); 
	</script>
</body>
</html>