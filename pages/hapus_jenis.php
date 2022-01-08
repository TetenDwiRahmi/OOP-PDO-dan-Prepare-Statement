<?php 
	include("class_crud_jenis.php"); 
	$crud=new Crud(); 
	if (isset($_GET['id'])) { 
		$id_value=$_GET['id'];
		$resul = $crud->deleteData($id_value);
		
	}
?> 