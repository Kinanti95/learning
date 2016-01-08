<?php
include_once "../../../model/koneksi.php";

class materi extends DBConnect {

    public function getmateri($id){
        $stmt = $this->db->prepare('select * from materi where id_materi = ?');
        $stmt->execute(array($id));
        $res = $stmt->fetch();
        return $res;
    }

    public function getsiswaAllStatus(){
        return $this->db->query('select * from materi');
    }

	public function getAllmateri(){
		return $this->db->query('select * from materi where status = 1');
	}

	public function addmateri($file,$tanggal, $judul, $konten){
		$stmt = $this->db->prepare('insert into materi values (?,1, ?, ?, ?, ?)');
		$stmt->execute( array(NULL,$file,$tanggal, $judul, $konten) );
		return 'input materi id_materi : '.$id_materi.' berhasil';
	}

    public function updatemateri($id_materi, $data = array()){
        $stmt = $this->db->prepare('update materi set
                                tanggal = ?, judul = ?, konten = ? where id_materi = ?');
		$stmt->execute( array($data['nama'], $data['password'], $data['nim']) );
		return 'ubah user nis : '.$nis.' berhasil';
    }

    public function delmateri($id_materi){
        $stmt = $this->db->prepare('delete from user where nis = ?');
        $stmt->execute(array($id_materi));
    }

    public function showStatus($status){
        if($status == 1){
            return "Aktif";
        } elseif ($status == 2){
            return "Alumni";
        }
        return "Non Aktif";
    }
}

$materi = new materi();
