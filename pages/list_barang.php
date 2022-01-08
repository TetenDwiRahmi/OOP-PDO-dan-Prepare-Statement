<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type= "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type= "text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Barang</title>
  </head>
  <body>
	<br/>
	<div class="container">
	<h1 class ="text-center"> Barang </h1 ><br>
	<a href="index.php?p=add_barang" class="btn btn-success">Tambahkan Data</a>
	<?php
		$p=isset($_GET['p']) ? $_GET['p'] : 'home';
			if($p=='add_barang') include 'add_barang.php';
			if($p=='edit_barang') include 'edit_barang.php';
			if($p=='hapus_barang') include 'hapus_barang.php';
	?>
	<br><br>
		<table class="table" id="example" style="width:100%">
		  <thead class="thead-dark">
			<tr>
				 <th scope="col">No</th> 
				 <th scope="col">Kode Barang</th> 
				 <th scope="col">Nama Barang</th>  
				 <th scope="col">Satuan</th>  
				 <th scope="col">Nama Jenis</th>  
				 <th scope="col">Nama Supplier</th>  
				 <th scope="col">Harga</th>  
				 <th scope="col">Stok</th>  
				 <th scope="col">Aksi</th> 
			</tr>
		  </thead>
		  <tbody>
			<?php 
				include ("class_crud_barang.php"); 
				$crud = new Crud();
				$hasil=$crud->readData();
				$no = 1;
				foreach($hasil as $data){ 
			?> 
			 <tr> 
				 <td><?php echo $no++ ?> </td> 
				 <td><?php echo $data['kode_barang']; ?> </td> 
				 <td><?php echo $data['nama_barang']; ?></td> 
				 <td><?php echo $data['satuan']; ?></td> 
				 <td><?php echo $data['nama_jenis']; ?></td> 
				 <td><?php echo $data['nama_supplier']; ?></td> 
				 <td><?php echo $data['harga']; ?></td> 
				 <td><?php echo $data['stok']; ?></td> 
				 <td>
					<a href="index.php?p=hapus_barang&id_barang=<?php echo $data['id_barang']?>" class="mb-1 mr-1 btn btn-danger"><i class="nav-link-icon fa fa-trash"></i></a>
					<a href="index.php?p=edit_barang&id_barang=<?php echo $data['id_barang']?>" class="mb-2 mr-2 btn btn-info"><i class="nav-link-icon fa fa-edit"></i></a>
				
				 </td>
			 </tr> 
			<?php 
				   } 
			
			?> 
		  </tbody>
		</table>
		
	</div> <br>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable(); ///pada table tambahkan id example
		} );
	</script>
    
  </body>
</html>