<!doctype html>
<html lang="en">
<head>
<!--Required meta tags-->
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Barang</title>
</head>
<body>
<?php
    include("class_crud_barang.php");
    $crud=new Crud();
    $id=$_GET['id_barang'];
    $databarang=$crud->editData($id);
	$datajenis = $crud->readDataJenis();
	$datasupplier = $crud->readDataSupplier();
    foreach($databarang as $barang){

?>
<!--FORM-->
<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Edit Barang</h2>
	<form method="POST">
		<div class="form-group">
			<label>ID</label>
			<input type="text"class="form-control" readonly name="id" placeholder="Masukan id" value=<?php echo"$barang->id_barang";?>>
		</div>
		<div class="form-group">
			<label>Kode Barang</label>
			<input type="text"class="form-control"name="kode_barang"value=<?php echo"$barang->kode_barang";?> required>
		</div>
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text"class="form-control"name="nama_barang"value="<?php echo"$barang->nama_barang";?>"required>
		</div>
		<div class="form-group">
			<label>Satuan</label>
			<input type="text" class="form-control"name="satuan"required placeholder="satuan"value=<?php echo"$barang->satuan";?>>
		</div>
		<div class="form-group">
			<label>Jenis Barang</label>
			<select name="id_jenis" class="form-control">
				<?php
				foreach($datajenis as $data) { 
					if($barang->id_jenis==$data[id]) {
						$selected = "selected";
					}else{
						$selected = "";
					}
					echo "<option value='$data[id]' $selected>$data[nama_jenis]</option>";
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Supplier</label>
			<select name="id_supplier" class="form-control">
				<?php
				foreach($datasupplier as $data) { 
					if($barang->id_supplier==$data[id]) {
						$selected = "selected";
					}else{
						$selected = "";
					}
					echo "<option value='$data[id]' $selected>$data[nama_supplier]</option>";
				}
				?>
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="number" class="form-control"name="harga"required placeholder="harga"value=<?php echo"$barang->harga";?>>
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" class="form-control"name="stok"required placeholder="stok"value=<?php echo"$barang->stok";?>>
		</div>
		<div class="form-group">
			<div class="form-group">
				<button type="submit"name="sub"class="btn btn-success btn-lg">Kirim</button>
				<button type="reset"class="btn btn-danger btn-lg">Reset</button>
			</div>
		</div>
	</form>
</div>

<?php
     }
?>
<!--END FORM-->

<?php
        if(isset($_POST['sub'])){
			$id=$_POST['id'];
			$kode_barang=$_POST['kode_barang'];
			$nama_barang=$_POST['nama_barang'];
			$satuan=$_POST['satuan'];
			$id_jenis=$_POST['id_jenis'];
			$id_supplier=$_POST['id_supplier'];
			$harga=$_POST['harga'];
			$stok=$_POST['stok'];
			var_dump($kode_barang,$nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok);
			$databarang=$crud->updateData($id,$kode_barang,$nama_barang,$satuan,$id_jenis,$id_supplier,$harga,$stok);
        }

?>
</body>
</html>