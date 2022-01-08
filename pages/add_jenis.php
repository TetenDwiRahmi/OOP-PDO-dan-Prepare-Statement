<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Jenis Barang</title>
  </head>
  <body>
  
	<!-- FORM -->
	<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Jenis Barang</h2>
	<form method="POST" >
	  <div class="form-group">
		<label>Nama Jenis</label>
		<input type="text" class="form-control" name= "nama_jenis" placeholder="Masukan Jenis Barang" required>
	  </div>
	  <div class="form-group">
		<label>Keterangan</label>
		<input type="text" class="form-control" name= "keterangan" placeholder="Masukan Keterangan" required>
	  </div>    
	  <div class="form-group">
		<div class="form-group">
		<button type="submit"  name ="sub" class="btn btn-success btn-lg">Kirim</button>
		<button type="reset"  class="btn btn-danger btn-lg">Reset</button>
	  </div>
	  </div>
	  
	</form>
	</div>
	<!-- END FORM -->
	
	<?php 
	include ("class_crud_jenis.php"); 
	if (isset($_POST['sub'])) { 
		$id=''; 
		$nama_jenis=$_POST['nama_jenis']; 
		$keterangan=$_POST['keterangan'];  
		$crud = new Crud();
		$hasil=$crud->createData($id, $nama_jenis, $keterangan);			
	} 
	?>
  </body>
</html>