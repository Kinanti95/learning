<?php

	class DBConnect{


	function __construct(){
	    
	    try{
	    	$db = new PDO("mysql:host=localhost; dbname=elearning", "root", "");
	    }catch (PDOException $e){
	    	echo $e->getMessage();
	    }

	}

}
$db= new DBConnect();
?>    
