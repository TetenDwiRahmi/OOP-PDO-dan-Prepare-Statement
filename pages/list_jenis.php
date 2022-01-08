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
	<h1 class ="text-center"> Jenis Barang </h1 ><br>
	<a href="index.php?p=add_jenis" class="btn btn-success">Tambahkan Data</a>
	<?php
		$p=isset($_GET['p']) ? $_GET['p'] : 'home';
			if($p=='add_jenis') include 'add_jenis.php';
			if($p=='edit_jenis') include 'edit_jenis.php';
			if($p=='hapus_jenis') include 'hapus_jenis.php';
	?>
	<br><br>
		<table class="table" id="example" style="width:100%">
		  <thead class="thead-dark">
			<tr>
				 <th scope="col">No</th> 
				 <th scope="col">Nama Jenis</th> 
				 <th scope="col">Keterangan</th>  
				 <th scope="col">Aksi</th> 
			</tr>
		  </thead>
		  <tbody>
			<?php 
				include ("class_crud_jenis.php"); 
				$crud = new Crud();
				$hasil=$crud->readData();
				$no = 1;
				foreach($hasil as $data){ 
			?> 
			 <tr> 
				 <td><?php echo $no++ ?> </td> 
				 <td><?php echo $data['nama_jenis']; ?> </td> 
				 <td><?php echo $data['keterangan']; ?></td> 
				 <td>
					<a href="index.php?p=hapus_jenis&id=<?php echo $data['id']?>" class="mb-1 mr-1 btn btn-danger"><i class="nav-link-icon fa fa-trash"></i></a>
					<a href="index.php?p=edit_jenis&id=<?php echo $data['id']?>" class="mb-2 mr-2 btn btn-info"><i class="nav-link-icon fa fa-edit"></i></a>
				
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