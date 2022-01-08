<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type= "text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type= "text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Jenis</title>
  </head>
  <body>
	<br/>
	<div class="container">
	<h1 class ="text-center"> Supplier </h1 ><br>
	<a href="index.php?p=add_supplier" class="btn btn-success">Tambahkan Data</a>
	<?php
		$p=isset($_GET['p']) ? $_GET['p'] : 'home';
			if($p=='add_supplier') include 'add_supplier.php';
			if($p=='edit_supplier') include 'edit_supplier.php';
			if($p=='hapus_supplier') include 'hapus_supplier.php';
	?>
	<br><br>
		<table class="table" id="example" style="width:100%">
		  <thead class="thead-dark">
			<tr>
				 <th scope="col">No</th> 
				 <th scope="col">Nama Supplier</th> 
				 <th scope="col">No Telephone</th>  
				 <th scope="col">Email</th>  
				 <th scope="col">Alamat</th>  
				 <th scope="col">Aksi</th> 
			</tr>
		  </thead>
		  <tbody>
			<?php 
				include ("class_crud_supplier.php"); 
				$crud = new Crud();
				$hasil=$crud->readData();
				$no = 1;
				foreach($hasil as $data){ 
			?> 
			 <tr> 
				 <td><?php echo $no++ ?> </td> 
				 <td><?php echo $data['nama_supplier']; ?> </td> 
				 <td><?php echo $data['notelp']; ?></td> 
				 <td><?php echo $data['email']; ?></td> 
				 <td><?php echo $data['alamat']; ?></td> 
				 <td>
					<a href="index.php?p=hapus_supplier&id=<?php echo $data['id']?>" class="mb-1 mr-1 btn btn-danger"><i class="nav-link-icon fa fa-trash"></i></a>
					<a href="index.php?p=edit_supplier&id=<?php echo $data['id']?>" class="mb-2 mr-2 btn btn-info"><i class="nav-link-icon fa fa-edit"></i></a>
				
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