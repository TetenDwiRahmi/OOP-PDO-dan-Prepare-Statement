<!doctype html>
<html lang="en">
<head>
<!--Required meta tags-->
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Jenis Barang</title>
</head>
<body>
<?php
    include("class_crud_jenis.php");
    $crud=new Crud();
    $id=$_GET['id'];
    $hasil=$crud->editData($id);
    foreach($hasil as $data){

?>
<!--FORM-->
<div class="container">
	<h2 class="alert alert-primary text-center mt-2">Edit Jenis Barang</h2>
	<form method="POST">
		<div class="form-group">
			<label>ID</label>
			<input type="text"class="form-control"readonly name="id"placeholder="Masukan id"value=<?php echo"$data->id";?>>
		</div>
		<div class="form-group">
			<label>Nama Jenis</label>
			<input type="text"class="form-control"name="nama_jenis"value="<?= $data->nama_jenis?>"required>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text"class="form-control"name="keterangan"required placeholder="Keterangan"value=<?php echo"$data->keterangan";?>>
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
        //set error mode
        $id=$_POST['id'];
        $nama_jenis=$_POST['nama_jenis'];
        $keterangan=$_POST['keterangan'];

        $hasil=$crud->updateData($id,$nama_jenis,$keterangan);
        }

        ?>
</body>
</html>