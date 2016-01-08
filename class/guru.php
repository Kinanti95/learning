<?php
include_once "../model/koneksi.php";

class siswa extends connection {

    public function getsiswa($id){
        $stmt = $this->db->prepare('select * from user where id_siswa = ?');
        $stmt->execute(array($id));
        $res = $stmt->fetch();
        return $res;
    }

    public function getsiswaAllStatus(){
        return $this->db->query('select * from siswa');
    }

    public function getAllsiswa(){
        return $this->db->query('select * from user where status = 1');
    }

    public function getAllDropoutsiswa(){
        return $this->db->query('select * from user where status = 0');
    }

    public function getAllAlumni(){
        return $this->db->query('select * from user where status = 2');
    }

    public function addsiswa($nis, $nama, $password){
        $stmt = $this->db->prepare('insert into user values (?, ?, ?)');
        $stmt->execute( array($nis, $nama, $password) );
        return 'input user nis : '.$nis.' berhasil';
    }

    public function updatesiswa($nim, $data = array()){
        $stmt = $this->db->prepare('update user set
                                nama = ?, password = ? where nim = ?');
        $stmt->execute( array($data['nama'], $data['password'], $data['nim']) );
        return 'ubah user nis : '.$nis.' berhasil';
    }

    public function delsiswa($nis){
        $stmt = $this->db->prepare('delete from user where nis = ?');
        $stmt->execute(array($nim));
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

$siswa = new siswa();

?>
