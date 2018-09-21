<?php 

	class MyDB extends SQLite3{

		function __construct() {
			$this->open('./db/main.db');
		}

		function addUser($data){
			$sql = "INSERT INTO `users` VALUES('".$data['f_name']."','".$data['l_name']."','". $data['m_name']."','". $data['m_name']."', 2)";
			$db->exec($sql); 
		}

		function findUser($data){			
			$sql = "SELECT * FROM `users` WHERE password='".md5($data['password'])."' AND l_name='".$data['l_name']."' AND type=".$data['type'];
			return $this->query($sql);
		}

		function __destruct(){
			$this->close();
		}

	}	

?>