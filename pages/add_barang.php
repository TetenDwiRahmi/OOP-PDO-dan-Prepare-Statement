<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Barang</title>
  </head>
  <body>
	<?php 
	include ("class_crud_barang.php"); 
		$crud = new Crud();
		$hasil = $crud->readData();
		$datajenis = $crud->readDataJenis();
		$datasupplier = $crud->readDataSupplier();
	?>
	<!-- FORM -->
	<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Barang</h2>
	<form method="POST" >
	  <div class="form-group">
		<label>Kode Barang</label>
		<input type="text" class="form-control" name= "kode_barang" placeholder="Masukan Kode Barang" required>
	  </div>
	  <div class="form-group">
		<label>Nama Barang</label>
		<input type="text" class="form-control" name= "nama_barang" placeholder="Masukan Nama Barang" required>
	  </div>
	  <div class="form-group">
		<label>Satuan</label>
		<input type="text" class="form-control" name= "satuan" placeholder="Masukan Satuan" required>
	  </div> 
	  <div class="form-group">
		<label>Jenis Barang</label>
		<select name="id_jenis" class="form-control">
			<?php
			foreach($datajenis as $data) { ?>
				<?php echo "<option value='$data[id]'>$data[nama_jenis]</option>"; 
			}
			?>
		</select>
	  </div> 
	  <div class="form-group">
		<label>Suppllier</label>
		<select name="id_supplier" class="form-control">
			<?php
				foreach($datasupplier as $data) { ?>
					<?php echo "<option value='$data[id]'>$data[nama_supplier]</option>"; 
				}
			?>
		</select>
	  </div> 
	  <div class="form-group">
		<label>Harga</label>
		  <input type="number" class="form-control" name= "harga" required placeholder="Masukkan Harga">
	  </div>	
	  <div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name= "stok" placeholder="Masukan Stok" required>
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
	if (isset($_POST['sub'])) { 
		$id=''; 
		$kode_barang=$_POST['kode_barang']; 
		$nama_barang=$_POST['nama_barang']; 
		$satuan=$_POST['satuan'];  
		$id_jenis=$_POST['id_jenis'];  
		$id_supplier=$_POST['id_supplier'];  
		$harga=$_POST['harga'];  
		$stok=$_POST['stok'];  
		$hasil=$crud->createData($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok);			
	} 
	?>
  </body>
</html>