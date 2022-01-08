<?php
include 'koneksi.php';

class Crud extends Koneksi {
	function __construct(){
		parent::__construct();
	}
	
	public function readData(){
		$sql = 'SELECT * FROM jenis';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_ASSOC);
		return $row;
	}
	public function editData($id){
		$sql = 'SELECT * FROM jenis WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_OBJ);
		return $row;
	}
	public function createData($id, $nama_jenis, $keterangan){
		$sql = 'INSERT INTO jenis  VALUES (:id, :nama_jenis,  :keterangan)';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':nama_jenis', $nama_jenis);
		$stmt->bindParam(':keterangan', $keterangan);
		$stmt->execute();
		echo "<script>alert('Jenis barang berhasil tersimpan');window.location='index.php?p=list_jenis';</script>";
	}
	public function updateData($id, $nama_jenis, $keterangan){
		$sql = 'UPDATE jenis
				SET
					nama_jenis = :nama_jenis,
					keterangan = :keterangan
				WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':nama_jenis', $nama_jenis);
		$stmt->bindParam(':keterangan', $keterangan);
		$stmt->execute();
		echo "<script>alert('jenis berhasil tersimpan');window.location='index.php?p=list_jenis';</script>";
	}
	
	public function deleteData($id){
		$sql = 'DELETE FROM jenis WHERE id = :id';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_jenis';</script>";
	}
}

?>