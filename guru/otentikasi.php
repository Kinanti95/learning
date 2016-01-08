<?php
  include "../model/koneksi.php";
  session_start(); // Memulai Session
  if (isset($_POST["login"])) {
    
    $username = $_POST["username"]; //$username= variable, $_POST["mengambil data dari form login dengan name=username"]
    $password = md5($_POST["password"]);
    
    $query = $db->db->prepare("SELECT * FROM admin WHERE username='$username' AND password='$password'"); 
    //query belum diekseskusi
    $query->execute();
    if($query->rowCount()==1){
      while ($a=$query->fetch()) {
        $_SESSION['id_admin'] = $a['id_admin'];
        $_SESSION['username'] = $a['username'];
        // $_SESSION['level'] = $a['level'];
      }
      header("location:label/dashboard.php");
    }else{
      header("location:login.php");
    }
    echo "
    <script language='javascript'>
    alert('Pastikan anda sudah terdaftar');
    top.location='login.php';
    </script>";
  }

  if (isset($_POST["logout"])) {
    session_destroy();
    header('location:../login.php');
  }
  
?>