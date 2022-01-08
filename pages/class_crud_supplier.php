<?php
include 'koneksi.php';

class Crud extends Koneksi {
	function __construct(){
		parent::__construct();
	}
	
	public function readData(){
		$sql = 'SELECT * FROM supplier';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_ASSOC);
		return $row;
	}
	public function editData($id){
		$sql = 'SELECT * FROM supplier WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_OBJ);
		return $row;
	}
	public function createData($id, $nama_supplier, $notelp, $email, $alamat){
		$sql = 'INSERT INTO supplier  VALUES (:id, :nama_supplier,  :notelp, :email, :alamat)';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':nama_supplier', $nama_supplier);
		$stmt->bindParam(':notelp', $notelp);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':alamat', $alamat);
		$stmt->execute();
		echo "<script>alert('supplier berhasil tersimpan');window.location='index.php?p=list_supplier';</script>";
	}
	public function updateData($id, $nama_supplier, $notelp, $email, $alamat){
		$sql = 'UPDATE supplier
				SET
					nama_supplier = :nama_supplier,
					notelp = :notelp,
					email = :email,
					alamat = :alamat
				WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':nama_supplier', $nama_supplier);
		$stmt->bindParam(':notelp', $notelp);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':alamat', $alamat);
		$stmt->execute();
		echo "<script>alert('supplier berhasil tersimpan');window.location='index.php?p=list_supplier';</script>";
	}
	
	public function deleteData($id){
		$sql = 'DELETE FROM supplier WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_supplier';</script>";
	}
}

?>