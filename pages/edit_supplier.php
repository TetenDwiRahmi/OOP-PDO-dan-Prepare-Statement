<!doctype html>
<html lang="en">
<head>
<!--Required meta tags-->
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Supplier</title>
</head>
<body>
<?php
    include("class_crud_supplier.php");
    $crud=new Crud();
    $id=$_GET['id'];
    $hasil=$crud->editData($id);
    foreach($hasil as $data){

?>
<!--FORM-->
<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Edit Supplier</h2>
	<form method="POST">
		<div class="form-group">
			<label>ID</label>
			<input type="text"class="form-control"readonly name="id"placeholder="Masukan id"value=<?php echo"$data->id";?>>
		</div>
		<div class="form-group">
			<label>Nama Supplier</label>
			<input type="text"class="form-control"name="nama_supplier"value="<?= $data->nama_supplier?>"required>
		</div>
		<div class="form-group">
			<label>No Telepon</label>
			<input type="number"class="form-control"name="notelp"required placeholder="notelp"value=<?php echo"$data->notelp";?>>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text"class="form-control"name="email"required placeholder="email"value=<?php echo"$data->email";?>>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"><?php echo"$data->alamat";?></textarea>
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
        $nama_supplier=$_POST['nama_supplier'];
        $notelp=$_POST['notelp'];
        $email=$_POST['email'];
        $alamat=$_POST['alamat'];

        $hasil=$crud->updateData($id,$nama_supplier,$notelp,$email,$alamat);
        }

?>
</body>
</html>