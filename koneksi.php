<?php

class Koneksi{

	private $server;
	private $user;
	private $pass;
	private $db;
	private $conn;
		
	public function __construct($server="localhost", $user="root", $pass=""){
		$this->server=$server;
		$this->user=$user;
		$this->password=$pass;
	}

	public function konek(){
		$this->conn=mysql_connect($this->server,$this->user,$this->pass);
		if(!$this->conn){
			echo "koneksi server error"."\n";
			throw new MySQLException(mysql_error(), mysql_errno());
		} 
		//else {
			//echo "koneksi server berhasil";
		//}
	}
	
	public function konekDb($db="bubuku"){
		$this->db=mysql_select_db($db,$this->conn);
		if(!$this->db){
			echo "koneksi database error"."\n";
			throw new MySQLException(mysql_error(), mysql_errno());
		} 
		//else {
			//echo "koneksi db berhasil";
		//}
	}

}







