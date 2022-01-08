<?php 
class Koneksi{
	protected $conn;
	function __construct(){
		if(!isset($this->conn)){
			$this->conn = new PDO('mysql:host=localhost;dbname=db_penjualan', "root", "");
			
		}
		if(!$this->conn){
			echo ('Koneksi gagal');
			die();
		}
		return $this->conn;
	}
}
?>