<?php

include_once "../../../model/koneksi.php";

class materi extends DBConnect{

	public function ryp_insert($table, $rows=null,$header=null){
		try{
		$sql="INSERT INTO ".$table;
		$row=null; $value=null;
		foreach ($rows as $key =>$nilainya) {
		# code...
		$row .=",".$key;
		$value .=", :".$key;
		}
		$sql .="(".substr($row,1).")";
		$sql .="VALUES(".substr($value,1).")";
		 
		$stmt= parent::prepare($sql);
		$stmt->execute($rows);
		$rowcount=$stmt->rowCount();
		if($rowcount !=0){
		echo "<script> alert('Simpan Data Sukses $rowcount');
		window.location.assign('$header');</script>";
		}else{
		echo "<script> alert('Simpan Data Error, Data Sudah Ada $rowcount'); </script>";
		}
		if($header != null){
		//session_start();
		//$_SESSION['pesan']="SIMPAN DATA TABEL $table SUKSES";
		header("location:".$header);
		}
		 
		return $rowcount;
		}catch(PDOException $e){
		echo "<script> alert('Simpan Data Gagal'); </script>";
		}
		}
}

$materi = new materi();
?>