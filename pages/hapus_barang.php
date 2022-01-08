<?php 
	include("class_crud_barang.php"); 
	$crud=new Crud(); 
	if (isset($_GET['id_barang'])) { 
		$id_value=$_GET['id_barang'];
		$resul = $crud->deleteData($id_value);
		
	}
?> 