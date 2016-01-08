<?php
include 'materi.php';


if($_POST['action'] == 'input'){
    $siswa->addsiswa($_POST['nis'], $_POST['fullname'],$_POST['address'], $_POST['gpa'], $_POST['status']);
} elseif($_POST['action'] == 'edit') {
    $siswa->updatesiswa($_POST['id'],$_POST['nis'],$_POST['nama'],$_POST['username'],$_POST['password'],$_POST['level'] );
} elseif($_GET['action'] == 'delete'){
    $student->deleteStudent($_GET['nis']);
}
header('location:upload-materi.php');
