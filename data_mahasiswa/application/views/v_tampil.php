<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Data Mahasiswa</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/style.css" rel="stylesheet">
		<style>
		
table {
  border-collapse: collapse;
  width: 173%;
}

th, td {
  text-align: left;
  padding: 10px;
}

tr:nth-child(even){background-color: #E9967A}

th {
  background-color: #20B2AA;
  color: black;
}
</style>
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="<?php echo base_url('index.php/crud/input'); ?>">Input Data Mahasiswa</a>
						</li>
						
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		
	
		<section class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="section-text">
							<h1>Form Data Mahasiswa</h1>
	<br>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th><center>NO</th></center>
			<th><center>NAMA</th></center>
			<th><center>NIM</th></center>
			<th><center>JENIS KELAMIN</th></center>
			<th><center>ALAMAT</th></center>
			<th><center>ACTION</th></center>

		</tr>
		<?php
		$no = 1;
		foreach($mahasiswa as $u) {
		?>
		<tr>
			<td><center><?php echo $no++ ?></td></center>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><center><?php echo anchor('crud/edit/'.$u->nim,'Edit');?>
				<?php echo anchor('crud/delete/'.$u->nim,'Delete');?></td></center>
		</tr>
		<?php } ?>
	</table>
						</div>
					</div>
					
				</div>
			</div>
		</section>
					
		<script src="<?php echo base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo base_url()?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/jquery.appear.js"></script>
	</body>
</html>