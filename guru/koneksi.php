<?php
class connection {
		protected $host="localhost";
		protected $user="root";
		protected $db="elearning";
		protected $pass="";
		protected $conn;
		function __construct(){
			$this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user, $this->pass);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
?>