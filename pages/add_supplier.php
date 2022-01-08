<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Supplier</title>
  </head>
  <body>
  
	<!-- FORM -->
	<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Supplier</h2>
	<form method="POST" >
	  <div class="form-group">
		<label>Nama Supplier</label>
		<input type="text" class="form-control" name= "nama_supplier" placeholder="Masukan Nama Supplier" required>
	  </div>
	  <div class="form-group">
		<label>No Telepon</label>
		<input type="number" class="form-control" name= "notelp" placeholder="Masukan Notelp" required>
	  </div> 
	  <div class="form-group">
		<label>Email</label>
		  <input type="email" class="form-control" name= "email" required placeholder="Email">
	  </div>	
	  <div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>
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
	include ("class_crud_supplier.php"); 
	if (isset($_POST['sub'])) { 
		$id=''; 
		$nama_supplier=$_POST['nama_supplier']; 
		$notelp=$_POST['notelp'];  
		$email=$_POST['email'];  
		$alamat=$_POST['alamat'];  
		$crud = new Crud();
		$hasil=$crud->createData($id, $nama_supplier, $notelp, $email, $alamat);			
	} 
	?>
  </body>
</html>