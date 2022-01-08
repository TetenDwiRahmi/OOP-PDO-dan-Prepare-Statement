<?php
include 'koneksi.php';

class Crud extends Koneksi {
	function __construct(){
		parent::__construct();
	}
	
	public function readData(){
		$sql = 'SELECT * FROM barang JOIN Jenis ON barang.id_jenis = jenis.id JOIN Supplier ON barang.id_supplier = supplier.id';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_ASSOC);
		return $row;
	}

	public function readDataJenis(){
		$sql = 'SELECT * FROM Jenis';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_ASSOC);
		return $row;
	}
	public function readDataSupplier(){
		$sql = 'SELECT * FROM Supplier';
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_ASSOC);
		return $row;
	}
	public function editData($id){
		$sql = 'SELECT * FROM barang WHERE id_barang = :id_barang';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id_barang', $id);
		$stmt->execute();
		$row = $stmt->fetchall(PDO::FETCH_OBJ);
		return $row;
	}
	public function createData($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok){
		$sql = 'INSERT INTO barang  VALUES (:id_barang, :kode_barang,  :nama_barang, :satuan, :id_jenis, :id_supplier, :harga, :stok)';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id_barang', $id);
		$stmt->bindParam(':kode_barang', $kode_barang);
		$stmt->bindParam(':nama_barang', $nama_barang);
		$stmt->bindParam(':satuan', $satuan);
		$stmt->bindParam(':id_jenis', $id_jenis);
		$stmt->bindParam(':id_supplier', $id_supplier);
		$stmt->bindParam(':harga', $harga);
		$stmt->bindParam(':stok', $stok);
		$stmt->execute();
		echo "<script>alert('barang berhasil tersimpan');window.location='index.php?p=list_barang';</script>";
	}
	public function updateData($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok){
		$sql = 'UPDATE barang
				SET
					kode_barang = :kode_barang,
					nama_barang = :nama_barang,
					satuan = :satuan,
					id_jenis = :id_jenis,
					id_supplier = :id_supplier,
					harga = :harga,
					stok = :stok
				WHERE id_barang = :id_barang';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id_barang', $id);
		$stmt->bindParam(':kode_barang', $kode_barang);
		$stmt->bindParam(':nama_barang', $nama_barang);
		$stmt->bindParam(':satuan', $satuan);
		$stmt->bindParam(':id_jenis', $id_jenis);
		$stmt->bindParam(':id_supplier', $id_supplier);
		$stmt->bindParam(':harga', $harga);
		$stmt->bindParam(':stok', $stok);
		$stmt->execute();
		echo "<script>alert('barang berhasil tersimpan');window.location='index.php?p=list_barang';</script>";
	}
	
	public function deleteData($id){
		$sql = 'DELETE FROM barang WHERE id_barang = :id_barang';
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':id_barang', $id);
		$stmt->execute();
		echo "<script>alert('Berhasil Menghapus Data');window.location='index.php?p=list_barang';</script>";
	}
}

?>