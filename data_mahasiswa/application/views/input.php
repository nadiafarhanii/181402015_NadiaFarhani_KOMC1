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
		<title>Input Data Mahasiswa</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/style.css" rel="stylesheet">
<style>
input[type=text], select {
  width: 110%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #aba;
  border-radius: 10px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  margin: 10px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 10px;
  background-color: #EEE8AA;
  padding: 10px;
}
</style>
<body id="page-top">
		
	
		<section class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="section-text">
	<div>
  <form action="<?php echo base_url('index.php/crud/Simpan'); ?>" method="POST">
  	<h3>Input Data Mahasiswa</h3>
    <label for="fname">NAMA :</label>
    <input type="text" id="fname" name="nama" placeholder="Nama...">

    <label for="lname">NIM :</label>
    <input type="text" id="lname" name="nim" placeholder="Nim...">
    <label for="lname">JENIS KELAMIN :</label>
    <input type="text" id="lname" name="jenis_kelamin" placeholder="Jenis Kelamin...">
    <label for="lname">ALAMAT :</label>
    <input type="text" id="lname" name="alamat" placeholder="Alamat...">

    <input type="submit" value="Simpan">
  </form>
</div>
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